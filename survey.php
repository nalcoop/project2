<?php

    $title='TravelSurvey';

  
    include('./assets/inc/header.inc.php');
    require_once('/home/MAIN/nic4340/connection.db.php');
    include('assets/inc/tools.inc.php');
    include('assets/inc/validation.inc.php');


  

    $sql= "SELECT `Name` `Message` FROM `Survey`";
    
    //$result is being set to the output of $mysqli -> query($sql)
    if($result = $mysqli -> query($sql)){
        while($row=$result -> fetch_assoc()){
            include('assets/inc/surveyForm.inc.php');
        }
        $result -> free_result();
    }
?>

<hr>

<?php
    require_once("assets/inc/surveyComment.inc.php");
    
    require_once("assets/inc/footer.inc.php");
?>