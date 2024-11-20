<?php

    $title='TravelSurvey';

  
    include('./assets/inc/header.inc.php');
    require_once('/home/MAIN/nic4340/connection.db.php');
    include('assets/inc/tools.inc.php');
    include('assets/inc/validation.inc.php');


    $pageId=1;

    $sql= "SELECT `Id`, `Name`, `Content` FROM `Survey` WHERE Id = ". $pageId;
    
    //$result is being set to the output of $mysqli -> query($sql)
    if($result = $mysqli -> query($sql)){
        while($row=$result -> fetch_assoc()){
            include('assets/inc/surveyComment.inc.php');
        }
        $result -> free_result();
    }
?>

<hr>

<?php
    require_once("assets/inc/surveyForm.inc.php");
    
    require_once("assets/inc/footer.inc.php");
?>