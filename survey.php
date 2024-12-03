<?php

    $title='Travel Survey';
    include('./assets/inc/header.inc.php');
    include('/home/MAIN/nic4340/connection.db.php');


    $sql= "SELECT `Name` `Message` FROM `Survey`";
    
    //$result is being set to the output of $mysqli -> query($sql)
    if($result = $mysqli -> query($sql)){
        while($row=$result -> fetch_assoc()){
            require_once('assets/inc/surveyForm.inc.php');
        }
        $result -> free_result();
    }
?>

<hr>

<?php
 include('./assets/inc/pagination.inc.php');
    require_once("assets/inc/footer.inc.php");
?>