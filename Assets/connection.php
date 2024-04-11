<?php

    $conn = new mysqli("localhost", "root", "", "blog_db");

    if(!$conn){
        echo "Failed to Connect";
    }
    else{
        // echo "Connected sucessful";
    }

?>
