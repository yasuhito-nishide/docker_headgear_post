<?php

namespace App\Http\Controllers;

use App\Models\Headgear;
use Illuminate\Http\Request;
use App\Models\UploadImage;
use Illuminate\Support\Facades\Auth;

class ImageListController extends Controller
{
    function show(){
    //
    $uploads = Headgear::orderBy("id","desc")->get();

    return view("headgearPost",[
        "images" => $uploads,
        'name' => $this->getLoginUserName()
    ]);
}
private function getLoginUserName(){
    $user = Auth::user();

    $name= '';
    if($user){
        if(7<mb_strlen($user->name)){
            $name = mb_substr($user->name,0,7)."...";
        }else{
            $name=$user->name;
        }
    }
    return $name;
}

public function delete(Request $request){

    $image = Headgear::find($request->edit_id);
    $image->delete();
    return redirect()->to('headgearPost.index');
}

}

