<?php


trait data{
    public function uploadImage(){
        echo 'upload image from data';
    }
    public function uploadData(){
        echo 'upload data';
    }
}
trait media{

    public function uploadImage(){
        echo 'upload image';
    }
}
trait general{
    // use media {media::uploadImage as mediaUploadedPhoto;} // another name
    // use data  {data:: uploadImage insteadof media;} 
    
    use media , data{
        media::uploadImage as mediaUploadedPhoto; // another name
        data:: uploadImage insteadof media;
    } 
}
class user {
    // use data, media;
    // public function uploadImage(){
    //     echo 'upload image from user';
    // }
    // use data, media;
    use general;
}

$obj = new user;
$obj->uploadImage(); // class has more preiority trait

// namespace 
// autoload class, class autoloader
// json , apis