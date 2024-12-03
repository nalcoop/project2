<?php
  $title= 'Other Content';
    include('./assets/inc/header.inc.php');
?>
    <h3>Other</h3>
    <main id="other">
        <!-- copy grid layout from index -->
        <div id="other-structure">
            <aside><strong>Select a section below to explore.</strong></aside>
            <div class="other-grid">
                <button class="section" type="button" onclick="window.location.href='grading.php'"
                    value="Grading">Grading</button>

                <button class="section" type="button" onclick="window.location.href='refernces.php'"
                    value="References">References</button>
            </div>
        </div>
    </main>

    <?php
    include('./assets/inc/footer.inc.php');
?>