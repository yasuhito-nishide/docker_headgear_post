<?php

namespace App\Http\Controllers;

use App\Models\Headgear;
use App\Models\user;
use Illuminate\Http\Request;
use App\Models\UploadImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\storage;

class ImageListController extends Controller
{
    function show()
    {
        //
        $uploads = Headgear::orderBy("id", "desc")->get();
        $imageUser = Auth::user();
        

        return view("headgearPost", [
            "images" => $uploads,
            'name' => $this->getLoginUserName(),
        ]);
    }

    private function getLoginUserName()
    {
        $user = Auth::user();

        $name = '';
        if ($user) {
            if (7 < mb_strlen($user->name)) {
                $name = mb_substr($user->name, 0, 7) . "...";
            } else {
                $name = $user->name;
            }
        }
        return $name;
    }

 

    public function delete(Request $request)
    {
        $input = $request->except('image');

        $user = Auth::user();
        $posted_id = $user->id;

        $id = headgear::find($request->edit_id);
        $select_id = $id->user_id;


        if ($posted_id === $select_id) {
            $image = Headgear::find($request->edit_id);
            $path = $image->file_path;

            session()->put('select_image', $image);

            Storage::delete('public/' . $path);
            Headgear::find($request->edit_id)->delete();


            return redirect()->to('headgearPost');
        } else {
            $request->validate([
            ]);
    
            $inputs = $request->all();
            return redirect('headgearPost')->withErrors("他の方の投稿です。削除できません。");
        }
    }
}
