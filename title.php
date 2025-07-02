<?php
    $page = basename($_SERVER['PHP_SELF'], '.php'); // get the path with .php extenion
    
    $titles = [
        "index" => "Home Page",
        "add-category" => 'Add Category'
    ];

    if(isset($titles[$page])){
        $title = $titles[$page];
    }else{
        $title = "Online Food Ordering System";
    }
    
    // ? if : else 

?>