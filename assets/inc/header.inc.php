<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/scripts/scripts.js" defer></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    
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



    