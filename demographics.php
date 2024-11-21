<?php
    include('./assets/inc/header.inc.php');
?>
<!-- Extras: Update my google map to have about 5-7 revelant pins from my site -->
 <!-- Make sure that google map is showing up cause wtf -->
  <!-- Update the graphs make them interactive on page load, if possible, hover effect maybe i could use the techniques he showed us for the lightbox and just have the numbers pop up -->
    <!-- Page Header -->
    <header>
        <h2>Demographics</h2>
    </header>
    
    <main id="learning-demographics">
        <article>
            <h3>Race/Population Demographics</h3>
            <figure>
                <img class="demographics" src="assets/images/BaltimoreRaceDemographics.png"
                    alt="Graph depicting the race demographics of the city">
                <img class="demographics" src="assets/images/EthnicDemographics.png"
                    alt="Graph depicting the ethnicity makeup of the city by population">
                <figcaption>
                    <ul>
                        <li>Black/African-American: 61.25%</li>
                        <li>White: 28.42%</li>
                        <li>Two or more races: 4.42%</li>
                        <li>Other race: 3.02%</li>
                        <li>Hispanic or Latino: 45,927 (regardless of race)</li>
                        <li>Total Population (circa 2022): est 569,931</li>
                    </ul>
                </figcaption>
            </figure>
        </article>

        <hr>
        
        <article>
            <h3>Geographic Location</h3>
            <figure>
            <iframe class="map" src="https://www.google.com/maps/d/embed?mid=1mfdSrTvd70q1aW4aw1jc5_CozGELvD0&hl=en&ehbc=2E312F" width="640" height="480"></iframe>
                <figcaption>
                    <strong>Location Details:</strong>
                    <ul>
                        <li>Northernmost southern state</li>
                        <li>Along the east coast</li>
                        <li>Longitude/Latitude/Elevation</li>
                        <li>Latitude: 39.2904° N</li>
                        <li>Longitude: 76.6122° W</li>
                        <li>Elevation: 0-480 ft (0-150 m)</li>
                        <li>80.9 square miles of land area</li>
                    </ul>
                </figcaption>
            </figure>
        </article>
    </main>
<?php
    include('./assets/inc/footer.inc.php');
?>