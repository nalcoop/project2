<?php
    include('./assets/inc/header.inc.php');
?>
<!-- Switch it over to the database -->
 <!-- sanitize every since piece of open access where someone can write in information -->
  <!-- google or check my courses for javascript validation code/ lesson -->
   <!-- updates the form to match the site content -->
    <!-- update the form to match the site css (once css is finalized) -->

   <main id="survey">
    <form action="submitSurvey.php" method="POST" class="blue">
        <h1>Travel Form</h1>
            <hr>Please tell us about your visit:
                <p>Please fill in all required fields.</p>
    
            <label for="userName">Your Name:</label>
            <input type="text" id="userName" name="userName" required>
    
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email">

            <input type="hidden" name="pageId" value="<?php echo $pageId; ?>">
    
            <label for="visitation">When did you visit?</label>
            <input type="date" id="visitation" name="visitation" required>

            <label for="groupNumber">How many in your group?</label>
            <input type="number" id="groupNumber" name="groupNumber" min="1" required>
            
            
      
                <p>Select visited pages</p>    
                <input type="checkbox" id="culture" name="culture"> <label>Activities</label> 
                <input type="checkbox" id="travelHub" name="travelHub"><label>Best Dining</label> 
                <input type="checkbox" id="demographics" name="demographics"><label>Quality Comfort</label>  
                <input type="checkbox" id="schools" name="schools"><label>Academics</label>    
                <input type="checkbox" id="sports" name="sports"><label>Artist Endeavors</label>  
                <input type="checkbox" id="location" name="location"><label>Musical Magic</label>
                <input type="checkbox" id="nature" name="nature"><label>Sports Team</label>
                <input type="checkbox" id="nature" name="nature"><label>Learning-Demographics</label>
                <input type="checkbox" id="nature" name="nature"><label>Rate Your Stay Survey</label>
                <input type="checkbox" id="nature" name="nature"><label>Grading Page</label>
                <input type="checkbox" id="nature" name="nature"><label>References</label>
     
    <fieldset>
        <legend>Select your favorite content section</legend>
        <input type="radio" id="majorLandmarks" name="favPage" value="majorLandmarks"><label for="majorLandmarks">Major Landmarks</label> 
        <input type="radio" id="learningContent" name="favPage" value="learningContent"><label for="learningContent">Learning Content</label>
        <input type="radio" id= "cityCulture" name="favPage" value="cityCulture"><label for="cityCulture">City Culture</label>
        <input type="radio" id="rest" name="favPage" value="rest"><label for="rest">Rest</label>
    </fieldset>
    <div class="indent">
        <label for="experience">Rate your experience?</label>    
       <span>0</span><input type="range" id="experience" name="experience" min="0" max="5" step="1"><span>5</span>

       <label for="message">Leave feedback about your experience?</label>
       <input type="textarea" id="message"
    </div>
       
            <input type="submit" class="button" value="send">
    </form>
   </main>
    
<?php
    include('./assets/inc/footer.inc.php');
?>