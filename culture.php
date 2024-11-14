<?php
    include('./assets/inc/header.inc.php');
?>

    <main id="culture">
        <h2>Embracing The True Baltimore</h2>
        <!-- Grid layout for culture sections -->
        <div id="culture-structure">
            <aside><strong>Select a section below to explore.</strong></aside>
            <div class="culture-grid">
                <button class="section" type="button" onclick="window.location.href='schools.php'">Academics</button>
                <button class="section" type="button" onclick="window.location.href='art.php'">Artist Endeavors</button>
                <button class="section" type="button" onclick="window.location.href='music.php'">Musical Magic</button>
                <button class="section" type="button" onclick="window.location.href='sports.php'">Sports Team</button>
            </div>
        </div>
    </main>
    
<?php
    include('./assets/inc/footer.inc.php');
?>