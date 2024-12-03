<?php
  $title= 'Learning Content';
    include('./assets/inc/header.inc.php');
?>
    <h3>Learning Content</h3>
    <main id="learning">
        <div id="learning-structure">
            <p><strong>Select a section below to explore.</strong></p>
            <div class="learning-grid">
                <button class="section" type="button" onclick="window.location.href='demographics.php'" value="Demographics">Demographics</button>
                <button class="section" type="button" onclick="window.location.href='survey.php'" value="Location">Survey</button>
            </div>
        </div>
    </main>
<?php
 include('./assets/inc/pagination.inc.php');
    include('./assets/inc/footer.inc.php');
?>