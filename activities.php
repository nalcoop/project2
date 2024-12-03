<?php
    include('./assets/inc/header.inc.php');
?>
<h2>How To Stay Busy</h2>
    <article>
        <p>In Baltimore, there’s a lot to keep you busy whether you are an introvert, extrovert, or ambivert. From daytime activities for kids to educational exhibits to learn some history or science, or even just to enjoy a night out on the town for the adult crowd; there's something for everyone to do. Even if you don't find your niche here, don't worry there's more to explore on throughout the site that'll your desires.</p>
        
        <h3>For Viewing (Over 40+ museums)</h3>
            <p>Baltimore, is home to over 40+ musuems. Ranging from art museums, to science, to sports and more. Featured here are some of the city's best, and most cost effective museums featuring Black artists and art history that represent the culture of the city.</p>

   
    <figure class="carousel" id="carousel-museum">
    <div class="carousel-img">   
        <div class="carousel-slide">
        <img class="museums active" src="assets/images/museum1.jpg" alt="Walters Art Museum exterior">
                <figure id="walters" class="caption" >
                    <figcaption> Walters Art Museum: 600 N Charles St. Focused on diversity, inclusion, equity, and accessibility.</figcaption>
                </figure>
        </div>
        <div class="carousel-slide">
            <img class="museums" src="assets/images/museum2.jpeg" alt="Baltimore Museum of Art exterior">
                <figure id="bma" class="caption" >
                    <figcaption> Baltimore Museum of Art: 10 Art Museum Drive. A free local art museum on Johns Hopkins University Campus.</figcaption>
                </figure>
        </div>
        <div class="carousel-slide">
            <img  class="museums" src="assets/images/museum3.jpeg" alt="Blacks in Wax exterior">
                <figure id="blacksInWaxs" class="caption">
                    <figcaption> The National Great Blacks in Wax: 1601-03 East North Ave. Learn about historical Black figures.</figcaption>
                </figure>
        </div>
        <div class="carousel-slide">
            <img class="museums" src="assets/images/museum4.jpg" alt="Reginald F Lewis Museum exterior">
                <figure id ="rfl" class="caption">
                    <figcaption> Reginald F. Lewis Museum: 830 E Pratt St. Highlights African American history and culture.</figcaption>
                </figure>
            </div>
        </div>
            <button class="previous" onclick="changeSlide(-1,'carousel-museum')">&#10094;</button>
            <button class="next" onclick="changeSlide(1,'carousel-museum')">&#10095;</button>

    </figure>

        <h3>For Doing</h3>
        <!-- Possibly google map pins -->
        <section> 
            <figure>
                <!-- find images for this section -->
                <figcaption>Amazing Glaze, located at 1340 Smith Ave. A creative space for pottery and canvas painting for all ages.<figcaption>
            </figure>
           
            <figure>
                <figcaption>McFadden Art Glass, located at 6802 Eastern Ave. Offers hands-on learning for all ages.</figcaption>
            </figure>

            <figure>
                <video class="twoStudio" width="400" height="320" controls muted>
                    <source src="assets/images/twoStudio.mp4" type="video/mp4">
                </video>
                <video class="twoStudio" width="400" height="320" controls muted>
                    <source src="assets/images/twoStudio2.mp4" type="video/mp4">
                </video>
                <figcaption>Two 7 Studio: A Black-owned gallery for guided art classes and events.</figcaption>
            </figure>       
        </section>
        
        <h3>Educational Fun</h3>
        <section class="educational">
        <p>Activities for those interested in science and marine life. Fun for all ages!</p>
        <figcaption>Videos of some animals featured at the National Aquarium</figcaption> 
            <figure id="aquarium">
                <video class="aquarium" width="360" height="280" controls muted>
                    <source src="assets/images/dolphins.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <video class="aquarium" width="360" height="280" controls muted>
                    <source src="assets/images/jellyfish.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
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
            <figcaption>National Aquarium</figcaption>

            <button class="previous" onclick="changeSlide(-1,'carousel-aquarium')">&#10094;</button>
            <button class="next" onclick="changeSlide(1,'carousel-aquarium')">&#10095;</button>
    </figure>  

    <figure class="carousel" id="carousel-science">
                <div class="carousel-img">
                    <img class="carousel-img active" src="assets/images/msc1.jpg" alt="T-Rex skeleton at Maryland Science Center"> 
                    <img class="carousel-img" src="assets/images/msc2.jpg" alt="Maryland Science Center exterior"> 
                </div>
                <figcaption>Maryland Science Center</figcaption>
                <button class="previous" onclick="changeSlide(-1,'carousel-science')">&#10094;</button>
                <button class="next" onclick="changeSlide(1,'carousel-science')">&#10095;</button>
            </figure>
        </section>

        <!-- <h3>Scenic Areas</h3>
        <section>
            <p>Relax at beautiful waterfronts or stroll through parks, many of which have amenities for kids.</p>
            
       
            <figure> 
                <img class="canton" src="assets/images/canton.jpg" alt="Canton Waterfront Park at sunset">
                <img class="canton" src="assets/images/cantonWater.jpg" alt="Canton Waterfront Park walkway">
                <figcaption>Canton Waterfront Park: Located within downtown Baltimore, featuring shops and restaurants.</figcaption>
            </figure>

   

        </section> -->
    </article>  
<?php
    include('./assets/inc/footer.inc.php');
?>