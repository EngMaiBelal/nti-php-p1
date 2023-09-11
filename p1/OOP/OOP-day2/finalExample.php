<?php
// user admin product
// upload image
// soluation single inheritance in php --> trait dosenot be class


// abstract class uploadImage{
//     public abstract function upload();
// }

trait media{
    // public $name;
    // public static $path;
    // public static function test(){

    // }
    // const x = 3;
    // public abstract function test2();
    public function uploadImage(){
        echo 'upload image';
    }
   
    public function getImage(){
        echo 'get image';
    }
}
trait deleteImage{
    public function deleteImage(){
        echo 'delete image';
    }
}
trait general{
    use media, deleteImage;
}
class user {
    use general;
}
class admin {
    // use media;
    // use deleteImage;
    // use media, deleteImage;
    use general;
}
class product {
    use deleteImage;

}
$obj = new product;
// $obj->deleteImage();
// $obj->uploadImage();
// $obj->getImage();
// $obj->deleteImage();