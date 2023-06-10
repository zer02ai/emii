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
        $page_title = 'Gallery';
        $galleries = gallery::all();
        return view('admin.gallery',compact(['galleries','page_title']));
    }

    public function add_update_gallery($id = null)
    {
        $page_title = 'Add Images to Gallery';
        if (!is_null($id)) {
            $gallery = gallery::find($id);
            return view('admin.add_gallery', compact(['page_title','gallery']));
        } else {
            return view('admin.add_gallery',compact(['page_title']));
        }
    }

    public function save(Request $request)
    {

        $request->validate(
            [
                'images' => 'required',
                'type' => 'required'
            ]
        );

        $data = $request->all();

        if ($request->hasFile('images')) {
            $i = $y = 1;
            foreach ($request->file('images') as $key => $file) {
                $imageData = new gallery();
                $imageData->type = $data['type'];
                $filename = time().$i++.'.'. $file->getClientOriginalExtension();
                $file->move('images/galleries/', $filename);
                $imageData->image = 'images/galleries/'.$filename;

                // thumnail section
                $image_path = public_path('images/galleries/');
                $image_file = $image_path . $filename;

                if (!file_exists($image_path . 'thumbnail/')) {
                    mkdir($image_path . 'thumbnail/');
                }

                // tmp image name
                $thumbnail_image_name = time().$y++. ".webp";

                // resize image for tmp image
                $imageResize = Image::make($image_file)->resize(300, 200);
                $imageResize->save($image_path . 'thumbnail/' . $thumbnail_image_name);
                $imageData->thumbnail_image = 'images/galleries/thumbnail/'.$thumbnail_image_name;
                $imageData->save();
            }

            return redirect()->route('admin.gallery')->with('success', 'Image(s) saved successfully.');
        } else {
            return redirect()->route('admin.gallery')->with('error', 'Error! Please select image');
        }
    }

    public function status($id)
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
                    return redirect()->route('admin.gallery')->with('success', 'Image gallery status changed');
                } else {
                    return redirect()->route('admin.gallery')->with('error', 'Failed!');
                }
            } else {
                return redirect()->route('admin.gallery')->with('error', "Image doesn't exist.");
            }
        } else {
            return redirect()->route('admin.gallery')->with('error', "Invalid id.");
        }
    }

    public function delete($id)
    {
        if (!is_null($id)) {
            $imageData = gallery::find($id);
            if ($imageData) {
                if ($imageData->delete()) {
                    $file = public_path($imageData->image);
                    $thumbnail_file = public_path($imageData->thumbnail_image);
                    if (file_exists($file)) {
                        unlink($file);
                    }
                    if (file_exists($thumbnail_file)) {
                        unlink($thumbnail_file);
                    }
                    return redirect()->route('admin.gallery')->with('success', 'Image deleted successfully.');
                }
            } else {
                return redirect()->route('admin.gallery')->with('error', "Image doesn't exist.");
            }
        } else {
            return redirect()->route('admin.gallery')->with('error', "Invalid id.");
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
