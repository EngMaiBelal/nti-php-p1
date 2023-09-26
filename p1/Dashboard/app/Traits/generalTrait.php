<?php

namespace App\Traits;

trait generalTrait{
    public function uploadPhoto($request,  $data){
        $photoname=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images\products'), $photoname);
        $data['photo']= $photoname;
        return $data;
    }
}