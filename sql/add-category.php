<?php
    include 'config.php';

    if(isset($_POST['ok'])){
        $category = $_POST['category'] ?? '';
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'category/'.$_FILES['image']['name']);
        $date = date('Y-m-d');
        $status = 0;

        $insert = mysqli_query($conn,"INSERT INTO category(`category_name`,`image`,`date`,`status`)VALUES('$category', '$image', '$date', '$status')") or die(mysqli_error($conn));
        if($insert){
            echo "Data Inserted";
        }else{
            echo "Error".mysqli_error($conn);
        }
    }
?>