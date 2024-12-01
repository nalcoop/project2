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

    
    if(!emailCheck($email)){
        echo 'You have provided an invalid email address.';
        exit();
    }

    if(isset($_POST['favPage']) && !empty($_POST['favPage'])){
        if (isset($_POST['culture'])){
            $culture=sanitize($_POST['culture']);
          
        }if (isset($_POST['enjoyment'])){
            $enjoyment=sanitize($_POST['enjoyment']);
           
        }if (isset($_POST['learning'])){
            $learning=sanitize($_POST['learning']);
            
        }
        //get the value
        //sanitize it
        //store it to a count
    }

    // $activities=null;
    // if(isset($_POST['activities'])){
    //    $activities=false;
    // }else{
    //     $activities=true;
    //     $activities=sanitize($_POST['activities']);
    // }

    // $dining=null;
    // if(isset($_POST['dining'])){
    //    $dining=false;
    // }else{
    //     $dining=true;
    //     $dining=sanitize($_POST['dining']);
    // }

    // $restArea=null;
    // if(isset($_POST['restArea'])){
    //    $restArea=false;
    // }else{
    //     $restArea=true;
    //     $restArea=sanitize($_POST['restArea']);
    // }

    // $schools=null;
    // if(isset($_POST['schools'])){
    //    $schools=false;
    // }else{
    //     $schools=true;
    //     $schools=sanitize($_POST['schools']);
    // }

    // $art=null;
    // if(isset($_POST['art'])){
    //    $art=false;
    // }else{
    //     $art=true;
    //     $art=sanitize($_POST['art']);
    // }

    // $music=null;
    // if(isset($_POST['music'])){
    //    $music=false;
    // }else{
    //     $music=true;
    //     $music=sanitize($_POST['music']);
    // }

    // $sports=null;
    // if(isset($_POST['sports'])){
    //    $sports=false;
    // }else{
    //     $sports=true;
    //     $sports=sanitize($_POST['sports']);
    // }

    // $demographics=null;
    // if(isset($_POST['demographics'])){
    //    $demographics=false;
    // }else{
    //     $demographics=true;
    //     $demographics=sanitize($_POST['demographics']);
    // }

    //figure out what to do inside and sanitize it 

    
    $stmt->execute();



    if($stmt->error){
        print_r($stmt->error);
    }

    echo '<p>Thank you for your comment.<a href="index.php"> Go Home</a></p>';

    require_once("assets/inc/footer.inc.php");
    ?>
