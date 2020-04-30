<?php
include("init.php"); 

$id = $_POST['id'];

$cat = Category::findById($id);

if($cat){
    $cat->delete();
    echo "Deleted";
}else{
    echo "Error Deleting";
}

?>