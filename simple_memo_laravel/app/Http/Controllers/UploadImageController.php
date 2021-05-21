<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headgear;
use App\Models\UploadImage;
use App\Models\User;
use Illuminate\support\Facades\Auth;


class UploadImageController extends Controller
{
    //
    function show()
    {
        return view("headgearPost.index");
    }
    function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|file|image|mimes:png,jpeg,jpg'
        ]);
        $headgear = $request->file('image');
        $textTitle = $request->title;

        if ($headgear) {
            $path = $headgear->store('uploads', "public");

            if ($path) {
                Headgear::create([
                    "file_name" => $headgear->getClientOriginalName(),
                    "file_path" => $path,
                    "title" => $textTitle,
                    'user_id' => Auth::id()

                ]);
            }
        }
        return redirect("/headgearPost");
    }
    function index()
    {

        return view("headgearIndex", [
            'name' => $this->getLoginUserName(),
            'select_image' => session()->get('select_image')
        ]);
    }
    function index2()
    {

        return view("headgearPost", [
            'name' => $this->getLoginUserName(),
            'select_image' => session()->get('select_image')
        ]);
    }
    function index3()
    {

        return view("headgearBrand", [
            'name' => $this->getLoginUserName(),
            'select_image' => session()->get('select_image')
        ]);
    }
    function index4()
    {

        return view("headgearContact", [
            'name' => $this->getLoginUserName(),
            'select_image' => session()->get('select_image')
        ]);
    }





    function getLoginUserName()
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
    // selectメソッド
    public function select(Request $request)
    {
        $image = Headgear::find($request->id);
        session()->put('select_image', $image);

        return redirect()->route('headgearPost.index');
    }

    // メモの削除
    // public function delete(Request $request)
    // {
    //     Memo::find($request->edit_id)->delete();
    //     session()->remove('')
    // }
}
