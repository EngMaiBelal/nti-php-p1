<?php
// variable, indexed array, associative array
// $x, !$x, isset, empty

// $x = 0;
// if($x){ //value --> true not restricted 
//  echo 'ok';
// }

// if(!$x){ // value --> true  (restricted value(0,null, false, '', [], '0')
  
// }

if(isset($x)){ // var true-->(defined , restricted value) false -->  null, not defined
  echo "ok";
}

if(empty($x)){ //true --> not defined , restricted value
  echo "ok";
}

// $x= [1,2,23];
// if($x){
//   echo "ok";

// }
// if(!$x){
//   echo "no";
  
// }
// if(isset($x)){ //false
  
// }
// if(empty($x)){ //true
  
// }
// $x = [ "id"=>'','name'=>'ahmed'];
// if($x){

// }
// if(!$x){
  
// }
// if(isset($x['id'])){ //key
//   echo "ok";
// }
// if(empty($x['id'])){ //key
//   echo "ok";
  
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- <form method="post" action="html2.php">
        <input type="email" name="email" id="">
        <button type="submit">ok</button>
        <?php /*

        */ ?>
      </form> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>