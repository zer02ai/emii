<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function index()
    {
        $galleries = gallery::all();
        return view('admin.gallery',compact(['galleries']));
    }

    public function add_update_gallery($id = null)
    {
        if (!is_null($id)) {
            $gallery = gallery::find($id);
            return view('admin.add_gallery', ['gallery' => $gallery]);
        } else {
            return view('admin.add_gallery');
        }
    }

    public function save_gallery(Request $request)
    {

        $request->validate(
            [
                'images' => 'required',
            ]
        );

        $data = $request->all();

        if ($request->hasFile('images')) {
            $i = $y = 1;
            foreach ($request->file('images') as $key => $file) {
                $image = new gallery();
                $filename = time().$i++. $file->getClientOriginalExtension();
                $file->move('images/image_gallery/', $filename);
                $image->image_path = 'images/image_gallery/'.$filename;

                // thumnail section
                $image_path = public_path('images/image_gallery/');
                $image_file = $image_path . $filename;

                if (!file_exists($image_path . 'thumbnail/')) {
                    mkdir($image_path . 'thumbnail/');
                }

                // tmp image name
                $thumbnail_image_name = time().$y++. ".webp";

                // resize image for tmp image
                $imageResize = Image::make($image_file)->resize(300, 200);
                $imageResize->save($image_path . 'thumbnail/' . $thumbnail_image_name);
                $image->thumbnail_image_path = $image_path . 'thumbnail/'.$thumbnail_image_name;
                $image->save();
            }

            return redirect()->route('admin.gallery')->with('success', 'Image(s) saved successfully.');
        } else {
            return redirect()->route('admin.gallery')->with('error', 'Error! Please select image');
        }
    }

    public function delete_image_gallery($id)
    {
        if (!is_null($id)) {
            $image = gallery::find($id);
            if ($image) {
                if ($image->delete()) {
                    $file = public_path('images/gallery/' . $image->name);
                    $thumbnail_file = public_path('images/gallery/thumbnail/' . $image->thumbnail_image);
                    if (file_exists($file)) {
                        unlink($file);
                    }
                    if (file_exists($thumbnail_file)) {
                        unlink($thumbnail_file);
                    }
                    return redirect()->route('backend.image_galleries')->with('success', 'Image deleted successfully.');
                }
            } else {
                return redirect()->route('backend.image_galleries')->with('error', "Image doesn't exist.");
            }
        } else {
            return redirect()->route('backend.image_galleries')->with('error', "Invalid id.");
        }
    }

    public function status_image_gallery($id)
    {
        if (!is_null($id)) {
            $image = gallery::find($id);
            if ($image) {
                if ($image->status == 0) {
                    $image->status = 1;
                } else {
                    $image->status = 0;
                }
                if ($image->save()) {
                    return redirect()->route('backend.image_galleries')->with('success', 'Image gallery status changed');
                } else {
                    return redirect()->route('backend.image_galleries')->with('error', 'Failed!');
                }
            } else {
                return redirect()->route('backend.image_galleries')->with('error', "Image doesn't exist.");
            }
        } else {
            return redirect()->route('backend.image_galleries')->with('error', "Invalid id.");
        }
    }

    public function bulk_delete(Request $request)
    {
        if (is_array($request->image_ids)) {
            foreach ($request->image_ids as $id) {
                $image = gallery::find($id);
                if ($image) {
                    if ($image->delete()) {
                        if ($image->name != "") {
                            $file = public_path('images/image_gallery/' . $image->name);
                            if (file_exists($file)) {
                                unlink($file);
                            }
                        }
                        if ($image->thumbnail_image != "") {
                            $file = public_path('images/image_gallery/thumbnail/' . $image->thumbnail_image);
                            if (file_exists($file)) {
                                unlink($file);
                            }
                        }
                    }
                }
            }
        }
        return response()->json([
            'status' => 200,
            'success' => 'bulk delete successfully.'
        ]);
    }
}
