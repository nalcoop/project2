<?php
    include('./assets/inc/header.inc.php');
?>
<h2>How To Stay Busy</h2>
    <article>
        <p>In Baltimore, there’s a lot to keep you busy whether you are an introvert, extrovert, or ambivert. From daytime activities for kids to nightlife for adults, there's something for everyone.</p>
        
        <h3>For Viewing (Over 40+ museums)</h3>
       
            <p>Explore some of the city's best museums featuring Black artists and art history.</p>

    <div id="museums"> 
        <section id="table">
            <img onclick="changeMe(this)" class="museums" src="assets/images/museum1.jpg" alt="Walters Art Museum exterior">
            <img onclick="changeMe(this)" class="museums" src="assets/images/museum2.jpeg" alt="Baltimore Museum of Art exterior">
            <img onclick="changeMe(this)" class="museums" src="assets/images/museum3.jpeg" alt="Blacks in Wax exterior">
            <img onclick="changeMe(this)" class="museums" src="assets/images/museum4.jpg" alt="Reginald F Lewis Museum exterior">
    </section>
            <!-- Walters Art Museum -->
            <figure id="walters" class="caption" >
            <figcaption> Walters Art Museum: 600 N Charles St. Focused on diversity, inclusion, equity, and accessibility.</figcaption>
            </figure>
               

            <!-- Baltimore Museum of Art -->
               
                <figure id="bma" class="caption" >
                <figcaption> Baltimore Museum of Art: 10 Art Museum Drive. A free local art museum on Johns Hopkins University Campus.</figcaption>
            </figure>
             
            <!-- National Great Blacks in Wax Museum -->
        
                <figure id="blacksInWaxs" class="caption">
                <figcaption> The National Great Blacks in Wax: 1601-03 East North Ave. Learn about historical Black figures.</figcaption>
            </figure>

            <!-- Reginald F. Lewis Museum -->
               
            <figure id ="rfl" class="caption">
                <figcaption> Reginald F. Lewis Museum: 830 E Pratt St. Highlights African American history and culture.</figcaption>
            </figure>
    </div>

        <h3>For Doing</h3>
        <section> 
            <figure>
                <figcaption>Amazing Glaze, located at 1340 Smith Ave. A creative space for pottery and canvas painting for all ages.</figcaption>
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
        <p>Activities for those interested in science and marine life. Fun for all ages!</p>
        <section class="educational">
           
            <figure id="aquarium">
                <video class="aquarium" width="400" height="320" controls muted>
                    <source src="assets/images/dolphins.mp4" type="video/mp4">
                </video>
                <video class="aquarium" width="400" height="320" controls muted>
                    <source src="assets/images/jellyfish.mp4" type="video/mp4">
                </video>
            </figure>
        
            <figure class="carousel" id="carousel-aquarium" >
                <div class="carousel-img">
                  <img class="aquarium-img" src="assets/images/aquarium1.jpg" alt="Aquarium fish tank" class="active">
                  <img class="aquarium-img" src="assets/images/aquarium2.jpg" alt="Birds in canopy">
                  <img class="aquarium-img" src="assets/images/aquarium3.jpg" alt="Tortoises in habitat" >
                  <img class="aquarium-img" src="assets/images/aquarium4.jpg" alt="Shark Alley">
                </div>
            <figcaption>National Aquarium</figcaption>

            <button class="previous" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
              </figure>
            

            <figure class="carousel" id="carousel-science">
                <div class="carousel-img">
                    <img class="scienceCenter" src="assets/images/msc1.jpg" alt="T-Rex skeleton at Maryland Science Center"> 
                    <img class="scienceCenter" src="assets/images/msc2.jpg" alt="Maryland Science Center exterior"> 
                </div>
                <figcaption>Maryland Science Center</figcaption>
                <button class="previous" onclick="changeSlide(-1)">&#10094;</button>
                <button class="next" onclick="changeSlide(1)">&#10095;</button>
            </figure>
        </section>

        <h3>Scenic Areas</h3>
        <section>
            <p>Relax at beautiful waterfronts or stroll through parks, many of which have amenities for kids.</p>
            
            <!-- Canton Waterfront Park -->
            <figure> 
                <img class="canton" src="assets/images/canton.jpg" alt="Canton Waterfront Park at sunset">
                <img class="canton" src="assets/images/cantonWater.jpg" alt="Canton Waterfront Park walkway">
                <figcaption>Canton Waterfront Park: Located within downtown Baltimore, featuring shops and restaurants.</figcaption>
            </figure>

            <!-- Additional scenic areas can be added here -->

        </section>
    </article>  
<?php
    include('./assets/inc/footer.inc.php');
?>