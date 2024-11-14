<?php
    $title= 'Index';
    require_once("./assets/inc/header.inc.php");
?>

    <main id="home">
        <article>
            <p>Welcome to Baltimore City, the greatest city in America. I will take you on a tour through the eyes of a
                native, someone who was born and raised in the heart of the city.</p>
            <p>Leave all judgment and preconceived notions at the door; enjoy the tour.</p>
        </article>
        <h3>Content Sections</h3>
        <div id="home-structure">
            <aside><strong>Select a section below to begin your adventure</strong></aside>
            <div class="home-grid">
                <button class="section" type="button" onclick="window.location.href='enjoyment.php'">How To Enjoy Your
                    Stay</button>
                <button class="section" type="button" onclick="window.location.href='culture.php'">Embracing The True
                    Baltimore</button>
                <button class="section" type="button" onclick="window.location.href='learning.php'">Learning
                    Content</button>
                <button class="section" type="button" onclick="window.location.href='other.php'">Other</button>
            </div>
        </div>
    </main>
<?php
    include('./assets/inc/footer.inc.php');
?>
