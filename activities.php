<?php
$title= 'Activities';
    include('./assets/inc/header.inc.php');
?>
<h2>How To Stay Busy</h2>
    <article>
        <p>In Baltimore, there’s a lot to keep you busy whether you are an introvert, extrovert, or ambivert. From daytime activities for kids to educational exhibits to learn some history or science, or even just to enjoy a night out on the town for the adult crowd; there's something for everyone to do. Even if you don't find your niche here, don't worry there's more to explore on throughout the site that'll your desires.</p>
        
        <h2>For Viewing (Over 40+ museums)</h2>
            <p>Baltimore, is home to over 40+ musuems. Ranging from art museums, to science, to sports and more. Featured here are some of the city's best, and most cost effective museums featuring Black artists and art history that represent the culture of the city.</p>

   
    <figure class="carousel" id="carousel-museum">
    <div class="carousel-img">   
        <div class="carousel-slide">
        <img class="museums active" src="assets/images/museum1.jpg" alt="Walters Art Museum exterior">
                <figure  class="caption" >
                <h3>Walters Art Museum</h3>
                    <figcaption> Located at 600 N Charles St, Baltimore, MD 21201. Focused on diversity, inclusion, equity, and accessibility.</figcaption>
                </figure>
        </div>
        <div class="carousel-slide">
            <img class="museums" src="assets/images/museum2.jpeg" alt="Baltimore Museum of Art exterior">
                <figure  class="caption" >
                <h3>Baltimore Museum of Art</h3>
                    <figcaption> Located at 10 Art Museum Drive, Baltimore, MD 21218. A free local art museum on Johns Hopkins University Campus.</figcaption>
                </figure>
        </div>
        <div class="carousel-slide">
            <img  class="museums" src="assets/images/museum3.jpeg" alt="Blacks in Wax exterior">
                <figure  class="caption">
                <h3>The National Great Blacks in Wax</h3>
                    <figcaption>Located at 1601-03 East North Ave, Baltimore, MD 21213. Learn about the history of Black people from slavery to historical Black figures thorugh the visuals of wax figures.</figcaption>
                </figure>
        </div>
        <div class="carousel-slide">
            <img class="museums" src="assets/images/museum4.jpg" alt="Reginald F Lewis Museum exterior">
                <figure class="caption">
                <h3> Reginald F. Lewis Museum</h3>
                    <figcaption>Located at 830 E Pratt St, Baltimore, MD 21202. Highlights the history of African American Maryalnders.</figcaption>
                </figure>
            </div>
        </div>
            <button class="previous" onclick="changeSlide(-1,'carousel-museum')">&#10094;</button>
            <button class="next" onclick="changeSlide(1,'carousel-museum')">&#10095;</button>

    </figure>

        <h2>For Doing</h2>
        <!-- Possibly google map pins -->
        <section> 
            <figure>
            <figure id="twoStudio">
            
                <video class="twoStudio" width="400" height="320" controls muted>
                    <source src="assets/images/twoStudio.mp4" type="video/mp4">
                </video>
                <video class="twoStudio" width="400" height="320" controls muted>
                    <source src="assets/images/twoStudio2.mp4" type="video/mp4">
                </video>
                <h3>Two 7 Studio</h3>
                <figcaption>Located at 
                    A Black-owned gallery for guided art classes and events.</figcaption>
            </figure>       
        </section>

        <h2>Educational Fun</h2>
        <p>Visit two of the most educational yet fun muesums in Baltimore. Activities for those interested in science and marine life. Fun for all ages!</p>
        <section class="educational">
       
            <figure id="aquarium">
                <video class="aquarium" width="360" height="280" controls muted>
                    <source src="assets/images/dolphins.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <video class="aquarium" width="360" height="280" controls muted>
                    <source src="assets/images/jellyfish.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <figcaption>Enjoy a sneakpeek of some the animals featured at the National Aquarium.</figcaption> 
            </figure>        
    </section>

    <section class="educational2">
    <figure class="carousel" id="carousel-aquarium" >
                <div class="carousel-img">
                  <img class="carousel-img active" src="assets/images/aquarium1.jpg" alt="Aquarium fish tank" >
                  <img class="carousel-img" src="assets/images/aquarium2.jpg" alt="Birds in canopy">
                  <img class="carousel-img" src="assets/images/aquarium3.jpg" alt="Tortoises in habitat" >
                  <img class="carousel-img" src="assets/images/aquarium4.jpg" alt="Shark Alley">
                </div>
            <h3>National Aquarium</h3>

            <button class="previous" onclick="changeSlide(-1,'carousel-aquarium')">&#10094;</button>
            <button class="next" onclick="changeSlide(1,'carousel-aquarium')">&#10095;</button>
    </figure>  

    <figure class="carousel" id="carousel-science">
                <div class="carousel-img">
                    <img class="carousel-img active" src="assets/images/msc1.jpg" alt="T-Rex skeleton at Maryland Science Center"> 
                    <img class="carousel-img" src="assets/images/msc2.jpg" alt="Maryland Science Center exterior"> 
                </div>
                <h3>Maryland Science Center</h3>
                <button class="previous" onclick="changeSlide(-1,'carousel-science')">&#10094;</button>
                <button class="next" onclick="changeSlide(1,'carousel-science')">&#10095;</button>
            </figure>
        </section>


    </article>  
<?php
  include('./assets/inc/pagination.inc.php');
    include('./assets/inc/footer.inc.php');
?>