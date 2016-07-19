<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=flying;charset=utf8","root","xiaolong");

    $mysecuredata=1;
    //$db->query("Select * from class where id=".$mysecuredata);
    $sql = "Select * from webSite where class_id=".$mysecuredata;

    $rows = $db->query($sql);
    foreach ($rows as $row) {
        print $row['link'] . "\t";
    }
    
}catch(PDOException  $e ){

    echo "Error: ".$e;
}
?>









