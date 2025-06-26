<?php
    $page = basename($_SERVER['PHP_SELF'], '.php'); // get the path with .php extenion
    
    $titles = [
        "index" => "Home Page",
    ];

    if(isset($titles[$page])){
        $title = $titles[$page];
    }else{
        $title = "Online Food Ordering System";
    }
    
    // ? if : else 

?>