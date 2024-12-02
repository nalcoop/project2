<?php

    $title='TravelSurvey';
    include('./assets/inc/header.inc.php');

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

    require_once("assets/inc/footer.inc.php");
?>