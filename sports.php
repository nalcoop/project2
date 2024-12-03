<?php
    include('./assets/inc/header.inc.php');
?>
    <main id="sports">
        <header>
            <h2>Sports</h2>
        </header>
       <article>
        <p>For the sports fans out there, Baltimore is home to two major sports teams; Baltimore Ravens & Baltimore Orioles. Both located in the heart of downtown Baltimore. </p>
       <section class="sports">
            <figure class="carousel" id="carousel-ravens">
            <div class="carousel-img">  
                <img class="carousel-img active"src="assets/images/ravenstunnel.jpg" alt="Photo of the entrance tunnel into the ravens lockerroom.">
                <img class="carousel-img " src="assets/images/baltimoreravens.jpg" alt="Photo of baltimore ravens sign">
                <img class="carousel-img " src="assets/images/m&t.jpg" alt="Photo of aerial view of M&T Stadium">
            </div>
            <h3>Baltimore Ravens</h3>
            <figcaption id="ravens-caption">
                    <ul>
                    <li>Football:Currently 2nd in AFC North</li>
                    <li>Head Coach:John Harbaugh</li>
                    <li>Super Bowl Champions:2001 & 2013</li>
                    </ul> 
                </figcaption> 
                <button class="previous" onclick="changeSlide(-1,'carousel-ravens')">&#10094;</button>
                <button class="next" onclick="changeSlide(1,'carousel-ravens')">&#10095;</button>
            </figure>
            <figure class="carousel" id="carousel-orioles">
            <div class="carousel-img">  
                <img class="carousel-img active" src="assets/images/baseballfield.jpg" alt="Photo of the baseball field"> 
                <img class="carousel-img " src="assets/images/baseballfield2.jpg" alt="Photo of the orioles baseball field, with a diamond view">
                <img class="carousel-img " src="assets/images/baseballfield4.jpg" alt="Photo of the bleachers view with a sunset view"> 
            </div>
            <h3>Baltimore Ravens</h3>
                <figcaption id="orioles-caption">
                    <ul>
                        <li>Baseball: Currently 2nd in American League East</li>
                        <li>Manager: Brandon Hyde</li>
                        <li>MLB World Series: 1983,1970,1966</li>
                        <li>AL East Division Titles: 1969,1970,1971,1973,1974,1979,1983,1997,2014,2023</li>
                    </ul>    
                </figcaption>
                <button class="previous" onclick="changeSlide(-1,'carousel-orioles')">&#10094;</button>
                <button class="next" onclick="changeSlide(1,'carousel-orioles')">&#10095;</button>
            </figure>
                
    </section>
       </article>
        
    </main>
<?php
 include('./assets/inc/pagination.inc.php');
    include('./assets/inc/footer.inc.php');
?>