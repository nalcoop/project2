<?php
    $title= 'Home';
    include("./assets/inc/header.inc.php");
?>

    <main id="home">
        <section>
            <p>Welcome to Baltimore City, Charm City, the greatest city in America! Take a tour and explore Baltimore through the lens of a native. Enjoy the experience.</p>
           
</section>
        <h3>Content Sections</h3>
        <div id="home-structure">
            <p><strong>Select a section below to begin your adventure</strong></p>
            <div class="home-grid">
                <button class="section" type="button" onclick="window.location.href='enjoyment.php'">Enjoy The Stay</button>
                <button class="section" type="button" onclick="window.location.href='culture.php'">Embracing 
                    Baltimore</button>
                <button class="section" type="button" onclick="window.location.href='learning.php'">Learning
                    Content</button>
                <button class="section" type="button" onclick="window.location.href='other.php'">Other</button>
            </div>
        </div>
    </main>
<?php
 include('./assets/inc/pagination.inc.php');
    include('./assets/inc/footer.inc.php');
?>
