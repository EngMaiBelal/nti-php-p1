<?php 
class user {
    // create order
    public function createOrder(){
        echo " create order";
    }
}

class  employee extends user{
    //read order
    public function readOrder(){
        echo " read order";
    }
    // create order --> user
}


class admin extends employee{
    // create, read order --> employee
    // delete order update order  (crud op)
    public function updateOrder(){
        echo " update order";
    }
    public function deleteOrder(){
        echo " delete order";
    }
}

$admin = new admin;
$employee = new employee;
$user = new user;
print_r($admin->createOrder());
print_r($user-> createOrder());
print_r($employee -> createOrder());
