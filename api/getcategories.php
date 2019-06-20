<?php
    $catArr = [];
    $catArr = json_decode($_POST["cat_arr"]);
    
    if(empty($catArr)){
        $arr = array('status' => false, 'message' => 'No categories found');
        echo json_encode($arr);
    }
    else{
        $allCategories = array();
        for($i = 0; $i < sizeof($catArr); $i++){
            $output = file_get_contents('https://www.eventbriteapi.com/v3/subcategories/'.$catArr[$i].'/?token=token');
            array_push($allCategories, json_decode($output));
        }
        echo json_encode($allCategories);
    }
?>