<?php
    include('./assets/inc/header.inc.php');
?>
<!-- Extras: Update my google map to have about 5-7 revelant pins from my site -->
 <!-- Make sure that google map is showing up cause wtf -->
  <!-- Update the graphs make them interactive on page load, if possible, hover effect maybe i could use the techniques he showed us for the lightbox and just have the numbers pop up -->
    <!-- Page Header -->
    <header>
    <script>
  (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
    key: "YOUR_API_KEY",
    v: "weekly",
    // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
    // Add other bootstrap parameters as needed, using camel case.
  });
</script>
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