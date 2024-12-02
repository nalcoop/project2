


<form action="submitSurvey.php" method="POST" class="blue">
        <h1>Travel Form</h1>
            <hr>Please tell us about your visit:
                <p>Please fill in all required fields.</p>
    
            <label for="userName">Your Name:</label>
            <input type="text" id="userName" name="userName" required>
    
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email">
    
            <label for="visitation">When did you visit?</label>
            <input type="date" id="visitation" name="visitation" required>

            
                <p>Select visited pages</p>    
                <input type="checkbox" id="activities" name="activities"> <label>Activities</label> 
                <input type="checkbox" id="dining" name="dining"><label>Best Dining</label> 
                <input type="checkbox" id="restArea" name="restArea"><label>Quality Comfort</label>  
                <input type="checkbox" id="schools" name="schools"><label>Academics</label>    
                <input type="checkbox" id="art" name="art"><label>Artist Endeavors</label>  
                <input type="checkbox" id="music" name="music"><label>Musical Magic</label>
                <input type="checkbox" id="sports" name="sports"><label>Sports Team</label>
                <input type="checkbox" id="demographics" name="demographics"><label>Learning-Demographics</label>
     
    <fieldset>
        <legend>Select your favorite content section</legend>
        <!-- add to adminer -->
        <input type="radio" id="culture" name="favPage" value="culture"><label for="culture">Culture</label> 
        <input type="radio" id="enjoyment" name="favPage" value="enjoyment"><label for="enjoyment">Enjoyment</label>
        <input type="radio" id= "learning" name="favPage" value="learning"><label for="learning">Learning</label>
    </fieldset>
    <div class="indent">
       <!-- possibly add css for slider probably not don't have time -->
       <label for="message">Leave feedback about your experience?</label>
       <input type="textarea" id="message" name="message"> 
    </div>
            <input type="submit" class="button" value="send">
    </form>
<hr>
<?php

$sql= "SELECT `Name`, `Message` FROM Survey";

//     if($result=$mysqli ->query($sql)){
//         while($row = $result -> fetch_assoc()){
//             include("assets/inc/survey.inc.php");
//         }
//         $result->free_result();
// }
include('./assets/inc/footer.inc.php');
?>