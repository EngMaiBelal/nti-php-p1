<?php
// encapsulation // secure code // private, getter (accessors), setter (mutators)
class user {
    private $password;
    private $image;
   public function insertUserDb(){ 
        echo "insert password: " .$this->getPassword() ."and image: ".$this->getImage();
   }
   public function getImage(){
        $path = 'images/';
        return $path.$this->image;
   }
   public function setImage($image){
        $this->image =$image;
   }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = sha1($password);

        return $this;
    }

  
}

$newUser = new user;
$newUser->setPassword('123456');
// $newUser->image ='1.png';
$newUser->setImage('1.png');
$newUser->insertUserDb();

