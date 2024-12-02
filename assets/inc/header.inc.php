<?php
    require_once('/home/MAIN/nic4340/connection.db.php');
    require_once('assets/inc/tools.inc.php');
    require_once('assets/inc/validation.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/scripts/scripts.js" defer></script>
    <script>
  (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
    key: "AIzaSyBQRDlqUjx3DSj5uw24sPtYIA6TBMm3FTE",
    v: "weekly",
    // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
    // Add other bootstrap parameters as needed, using camel case.
  });</script>
   
    
    <title><?php echo "Travel Site | " . htmlspecialchars($title ?? ''); ?></title>
</head>

<body>
    <h1 class="header">Explore 410</h1>
 

    <button id="hamburger">
            <i class="fa-solid fa-bars fa-2xl"></i>
    </button>
    <nav class="layeredNav">
        <a href="index.php">Home</a>
        
        <div class="secondLayer">
            <button class="layeredButton" type="button" onclick="window.location.href='enjoyment.php'">
                How To Enjoy Your Stay <i class="fa fa-caret-down"></i>
            </button>
            <div class="layerContent">
                <a href="activities.php">Activities</a>
                <a href="dining.php">Best Dining</a>
                <a href="restarea.php">Quality Comfort</a>
            </div>
        </div>
        
        <div class="secondLayer">
            <button class="layeredButton" type="button" onclick="window.location.href='culture.php'">
                Embracing The True Baltimore <i class="fa fa-caret-down"></i>
            </button>
            <div class="layerContent">
                <a href="schools.php">Academics</a>
                <a href="art.php">Artist Endeavors</a>
                <a href="music.php">Musical Magic</a>
                <a href="sports.php">Sports Team</a>
            </div>
        </div>
        
        <div class="secondLayer">
            <button class="layeredButton" type="button" onclick="window.location.href='learning.php'">
                Learning Content <i class="fa fa-caret-down"></i>
            </button>
            <div class="layerContent">
                <a href="demographics.php">Learning-Demographic</a>
                <a href="survey.php">Survey</a>
            </div>
        </div>
        
        <div class="secondLayer">
            <button class="layeredButton" type="button" onclick="window.location.href='other.php'">
                Other <i class="fa fa-caret-down"></i>
            </button>
            <div class="layerContent">
                <a href="grading.php">Grading Page</a>
                <a href="references.php">References</a>
            </div>
        </div>
    </nav>



    