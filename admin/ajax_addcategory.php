<?php
require('init.php');
    
$cat = new Category();

if($cat){

    $cat->name = $_POST['name'];
    
    if($cat->create()){

        echo "
        
            <div align='center' style='background-color:green; width:100%; padding-top:5px; padding-bottom:5px; margin-bottom:3px; color:#fff; '>Added</div>
            
            ";

    }else{

        echo join("<br>", $cat->errors);

    }

}else{

    echo "<h3 align='center' style='background:red;padding:7px;'>Error</h3>";

}

?>