<?php
require"include/header.html";
require"lib/put.php";

function queryItem ($id){
    global $db;
    $sql = "select * from webSite where class_id =".$id;
    $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    putItems($rows);
}


try{
    //$db = new PDO("mysql:host=localhost;dbname=app_flyings;charset=utf8",SAE_MYSQL_USER,SAE_MYSQL_PASS);

    //$db = new PDO("mysql:host=".SAE_MYSQL_HOST_M.";port=".SAE_MYSQL_PORT.";dbname=".SAE_MYSQL_DB, SAE_MYSQL_USER, SAE_MYSQL_PASS);
    $dsn="mysql:dbname=".SAE_MYSQL_DB.";port=".SAE_MYSQL_PORT.";host=".SAE_MYSQL_HOST_M;
    $db_user=SAE_MYSQL_USER;
    $db_pass=SAE_MYSQL_PASS;

    $db=new PDO($dsn,$db_user,$db_pass);
    $db->exec("SET names utf8");
    
    //$db->query("Select * from class where id=".$mysecuredata);
    $sql = "select * from class";
    $rows = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        putTitle($row);
        queryItem($row['id']);
    }
    
}catch(PDOException  $e ){

    require"error.php";
    exit();
}


require"include/footer.html";
?>
