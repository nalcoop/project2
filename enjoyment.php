<?php
  $title= 'Enjoy The Stay';
    include('./assets/inc/header.inc.php');
?>

    <main id="enjoyment">
        <!-- copy grid layout from index -->
        <div id="culture-structure">
            <h3>Enjoy The Stay</h3>
            <p><strong>Select a section below to explore.</strong></p>
            <div class="culture-grid">
                <button class="section" type="button" onclick="window.location.href='activities.php'" value="Activities">Activities </button>
    
                <button class="section" type="button" onclick="window.location.href='dining.php'" value="Dining">Best Dining</button>
    
                <button class="section" type="button" onclick="window.location.href='restarea.php'" value="Rest">Quality Comfort</button>
            </div>
        </div>
    </main>
    
<?php
    include('./assets/inc/footer.inc.php');
?>