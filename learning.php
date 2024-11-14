<?php
    include('./assets/inc/header.inc.php');
?>
    <h2>Learning Content</h2>
    <main id="learning">
        <div id="learning-structure">
            <aside><strong>Select a section below to explore.</strong></aside>
            <div class="learning-grid">
                <button class="section" type="button" onclick="window.location.href='demographics.php'" value="Demographics">Demographics</button>
                <button class="section" type="button" onclick="window.location.href='survey.php'" value="Location">Survey</button>
            </div>
        </div>
    </main>
<?php
    include('./assets/inc/footer.inc.php');
?>