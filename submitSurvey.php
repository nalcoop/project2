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


    //update table in adminer to ensure that this will actally display proper values 
    $stmt= $mysqli->prepare("INSERT INTO Survey(`Name`, `Message`, `Email`,`Visitation`,`Activities`,`Dining`,`RestArea`,`Schools`,`Art`,`Music`,`Sports`,`Demographics`,`Culture`,`Enjoyment`,`Learning`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    // i,d,s,b; where i= integer, d=double, s=string, b=blob -> used for files 
    $stmt->bind_param("sssssssssssssss",$name,$message,$email,$visitation,$activities,$dining,$restArea,$schools,$art,$music,$sports,$demographics,$culture,$enjoyment,$learning);

    $name= sanitize($_POST['userName'],255);
    $message=sanitize($_POST['message'],1000);
    $email=sanitize($_POST['email'],240);
    $visitation=sanitize($_POST['visitation']);
    //checkboxes after seeing if it checked or not , use string value
   
   $activities=isset($_POST['activities'])? sanitize($_POST['activities']) : null;
   $dining=isset($_POST['dining'])? sanitize($_POST['dining']) : null;
   $restArea=isset($_POST['restArea'])? sanitize($_POST['restArea']) : null;
   $schools=isset($_POST['schools'])? sanitize($_POST['schools']) : null;
   $art=isset($_POST['art'])? sanitize($_POST['art']) : null;
   $music=isset($_POST['music'])? sanitize($_POST['music']) : null;
   $sports=isset($_POST['sports'])? sanitize($_POST['sports']) : null;  
   $demographics=isset($_POST['demographics'])? sanitize($_POST['demographics']) : null;
   
    //radios after seeing if they are selected use string value
    $culture=isset($_POST['culture']) ? sanitize($_POST['culture']) : null;
    $enjoyment=isset($_POST['enjoyment']) ? sanitize($_POST['enjoyment']) : null;
    $learning=isset($_POST['learning']) ? sanitize($_POST['learning']) : null;
    $favPage=isset($_POST['favPage'])? sanitize($_POST['favPage']) : null;
    
    if(!emailCheck($email)){
        echo 'You have provided an invalid email address.';
        exit();
    }

    if($favPage===null){
        echo 'Please select a favorite page.';
    }

    switch($favPage){
        case 'culture':
            $culture=true;
            break;
        case 'enjoyment':
            $enjoyment=true;
            break;
        case 'learning':
            $learning=true;
            break;
        default:
            echo 'Invlaid selection';
            exit();
    }

    $stmt->execute();

    if($stmt->error){
        print_r($stmt->error);
    }

    echo '<p>Thank you for your comment.<a href="index.php"> Go Home</a></p>';

    require_once("assets/inc/footer.inc.php");
    ?>
