<?php
$title="Submit Survey"


if($mysqli -> connect_errno){
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
 //prepare and bind
    //number of question marks needs to match the number of parameters entered i.e 3question marks to match the 3parameters to match 
    $stmt= $mysqli->prepare("INSERT INTO Survey(`Name`, `Comment`, `PageId`,`Email`) VALUES (?,?,?,?");
    // i,d,s,b; where i= integer, d=double, s=string, b=blob -> used for files 
    $stmt->bind_para("ssis",$name,$comment,$articleId,$email);

    $name= sanitize($_POST['userName'],255);
    $comment=sanitize($_POST['message'],1000);
    $pageId=sanitize($_POST['pageId']);
    $email=sanitize($_POST['email'],240);
    if(emailCheck($email)){
        echo 'You have provided an invalid email address.';
        exit();
    }
    $stmt->execute();

    if($stmt->error){
        print_r($stmt->error);
    }

    echo '<p>Thank you for your comment.<a href="index.php"> Go Home</a></p>';

    require_once("assets/inc/footer.inc.php");
