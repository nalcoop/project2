<?php
    $title="Submit Survey";

    require_once("assets/inc/header.inc.php");

    if($mysqli -> connect_errno){
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
 //prepare and bind
    //number of question marks needs to match the number of parameters entered i.e 3question marks to match the 3parameters to match 


    //SELECT(what do colums,fields) query retrieve (get) data FROM(where) a table WHERE filter it
    // ->picture to finish notes
    //INSERT into `table` ->creating data which replacing the data (fields)
    //VALUES (???); which correlate to the fields
    //bind param(use the short hand of the of the data(field) types)
    //example bind_param('iss',$id,$name,$comment);
    $stmt= $mysqli->prepare("INSERT INTO Survey(`Name`, `Message`, `Email`,`Visitation`,`Activities`,`Dining`,`RestArea`,`Schools`,`Art`,`Music`,`Sports`,`Demographics`,`Culture`,`Enjoyment`,`Learning`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    // i,d,s,b; where i= integer, d=double, s=string, b=blob -> used for files 
    $stmt->bind_para("sssssssssssssss",$name,$comment,$email,$visitation,$activities,$dining,$restArea,$schools,$art,$music,$sports,$demographics,$culture,$enjoyment,$learning);

    $name= sanitize($_POST['userName'],255);
    $message=sanitize($_POST['message'],1000);
    $email=sanitize($_POST['email'],240);
    $visitation=sanitize($_POST['visitation']);
    //checkboxes after seeing if it checked or not , use string value
    $activities=sanitize($_POST['activities']);
    $dining=sanitize($_POST['dining']);
    $restArea=sanitize($_POST['restArea']);
    $schools=sanitize($_POST['schools']);
    $art=sanitize($_POST['art']);
    $music=sanitize($_POST['music']);
    $sports=sanitize($_POST['sports']);
    $demographics=sanitize($_POST['demographics']);
    //radios after seeing if they are selected use string value
    $culture=sanitize($_POST['culture']);
    $enjoyment=sanitize($_POST['enjoyment']);
    $learning=sanitize($_POST['learning']);

    
    if(!emailCheck($email)){
        echo 'You have provided an invalid email address.';
        exit();
    }

    $activities=null;
    if(!array_key_exists($_POST['activities'])){
       $activities=false;
    }else{
        $activities=true;
    }

    
    $stmt->execute();



    if($stmt->error){
        print_r($stmt->error);
    }

    echo '<p>Thank you for your comment.<a href="index.php"> Go Home</a></p>';

    require_once("assets/inc/footer.inc.php");
