<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female




////////////////////////////////////////////////////////////////////////////
// Users Collection 

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],   
    ],

    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],

        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
       
    ],
    (object)[
        'id' => 3,
        'name' => 'mena',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],

        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],        
        

    ]
];

////////////////////////////////////////////////////////////////////////////
// Dynamic Table 

// function drawTable($users){
    $table = '<table class="table table-dark col-10"><thead><tr>';
    
    foreach ($users[0] as $property => $value) {
        $table.= "<th scope='col'>$property</th>";
        
    };


    $table.= '</tr></thead>';

    foreach ($users as $index => $user) {
        $table.= "<tbody><tr>";

        foreach ($user as $property => $value) {
            // print_r (gettype($value));

            if(gettype($value) == "array"){
                $listValues =" ";
                foreach ($value as $indexArr => $valueArr) {
                    $listValues.= $valueArr." ,";

                };
                $table.= "<td scope='row'>$listValues</td>";
            }
            elseif(gettype($value) == "object"){
                foreach ($value as $propertyObj => $valueObj) {

                    ////////////////////////////////////////////////

                    //I Update Just If Condition Here

                    if ($propertyObj == "gender"){
                        
                        if($valueObj == "f"){
        
                            $table.= "<td scope='row'>Female</td>";
                        }elseif($valueObj == "m"){
                            $table.= "<td scope='row'>Male</td>";
        
                        }
                    }
                    else{
                        $table.= "<td scope='row'>$valueObj</td>";
                    };
                };
            }else{
                $table.= "<td scope='row'>$value</td>";

            }
        };
            
        $table.= "</tr></tbody>";
    };

    $table.= "</table>";
//     return  $table;
// };

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
        <div class="col-10" style="margin: 5% auto">

            <!-- Insert Table -->
            <?php 
                // drawTable( $users );
                echo $table;
            ?>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>