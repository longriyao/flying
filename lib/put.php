<?php


function putTitle(&$row)    //Don't change the row
{
    echo'
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-2 ">  
                <h3 id="" title="'.$row["desc"].'">'.$row['name'].'</h3>
            </div>
            <div class="col-md-2 col-md-offset-6">
                <h3 id=""><a href="#">Learn more</a></h3> 
            </div>
        </div>
        <hr class="driverIner"> 
        ';             
}

function putItem (&$row)    //Don't change the row
{
    echo'
        <div class="col-md-2 ">
            <a title="'.$row["webDesc"].'" href="'.$row['link'].'">'.$row['webName'].'</a>
        </div>';
        
    
}

function putItems(&$rows)   //Don't change
{
    $i = 0;

    echo' <div class="row"> ';

    foreach ($rows as $row) {
        if ( $i%5 == 0) {
            if($i != 0)
                echo"</br> </br>";
            echo' <div class="col-md-1"></div>';
            
        }
        putItem($row);
        $i++;
    }
    echo '</div>
         <hr class="driverOuter">';
    
    
    /*$countItem = sizeof($rows);
    echo' <div class="row"> ';
    for ($i = 0; $i < $countItem; $i++) {
        if ( $i%4 == 0) {
            if($i != 0)
                echo"</br> </br>";
            echo' <div class="col-md-1"></div>';
            
        }
        echo'
             <div class="col-md-2 ">
                <a href="'.$link[$i].'">'.$name[$i].'</a>
            </div>';
    }
    echo '</div>
         <hr class="driverOuter"> 
';*/
}



?>
