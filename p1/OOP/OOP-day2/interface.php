<?php
// abstraction 
// product, category, city
interface mahmoud
{
    // public $name;
    const x = 10;
    function createData();
    function readData();
    function updateData();
}
interface mostafa
{
    function deleteData();
    function test();
}
class product extends test implements mahmoud, mostafa
{
    const x = 20; // logical error --> canot override constant
    function createData()
    {
        //code
    }
    function updateData()
    {
        //code
    }
    function deleteData()
    {
        //code
    }
    function readData()
    {
        //code
    }
    function uploadImage()
    {
        //code
    }
     function test(){
        echo "test2 ";
    }

}
class city extends test implements mahmoud, mostafa
{
    function createData()
    {
        //code
    }
    function updateData()
    {
        //code
    }
    function deleteData()
    {
        //code
    }
    function readData()
    {
        //code
    }
    function uploadImage()
    {
        //code
    }
    
}
class test{
    function test(){
        echo "test";
    }
}
echo (product :: x) ; //10
echo (mahmoud :: x) ; //10

// $obj = new product;
// $obj->test();