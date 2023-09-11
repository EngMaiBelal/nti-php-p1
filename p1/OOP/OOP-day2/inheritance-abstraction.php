<?php

// animal (cat , dog) (eat, drink) --> abstract, inherit

interface operation{
    public function eat();
    public function drink();
}
class animal{
    public function eat(){
        echo "eat food";
    }
    public function drink(){
        echo "drink water";
    }
}
class cat extends animal implements operation{
 
    
}

class dog extends animal implements operation{
   
}


