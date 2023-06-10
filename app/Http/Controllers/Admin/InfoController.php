<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\webinfo;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        $page_title = 'Website Info';
        $infos = webinfo::all();
        return view('admin.info',compact(['infos','page_title']));
    }

    public function add_update_info($id = null)
    {
        $page_title = 'Add/Edit Website Info';
        if (!is_null($id)) {
            $info = webinfo::find($id);
            return view('admin.add_info', compact(['page_title','info']));
        } else {
            return view('admin.add_info',compact(['page_title']));
        }
    }

    public function save(Request $request,$id=null)
    {

        $request->validate(
            [
                'name' => 'required',
                'value' => 'required'
            ]
        );

        $data = $request->all();
        if(!is_null($id)){
            $info = webinfo::find($id);
        }else{
            $info = new webinfo();
        }
        $info->name = $data['name'];
        $info->value = $data['value'];
        if($info->save()){
            return redirect()->route('admin.infos')->with('success', ucwords($data['name']).' saved successfully.');
        } else {
            return redirect()->route('admin.infos')->with('error', 'Error! Please try again');
        }
    }

    public function status($id)
    {
        if (!is_null($id)) {
            $info = webinfo::find($id);
            if ($info) {
                if ($info->status == 0) {
                    $info->status = 1;
                } else {
                    $info->status = 0;
                }
                if ($info->save()) {
                    return redirect()->route('admin.infos')->with('success', ucwords($info->name).' status changed');
                } else {
                    return redirect()->route('admin.infos')->with('error', 'Failed! try again');
                }
            } else {
                return redirect()->route('admin.infos')->with('error', "Info doesn't exist.");
            }
        } else {
            return redirect()->route('admin.infos')->with('error', "Invalid id.");
        }
    }

    public function delete($id)
    {
        if (!is_null($id)) {
            $info = webinfo::find($id);
            if ($info) {
                if ($info->delete()) {
                    return redirect()->route('admin.infos')->with('success', ucwords($info->name).' deleted successfully.');
                }
            } else {
                return redirect()->route('admin.infos')->with('error', "Info doesn't exist.");
            }
        } else {
            return redirect()->route('admin.infos')->with('error', "Invalid id.");
        }
    }
}
