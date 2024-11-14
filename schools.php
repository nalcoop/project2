<?php
    include('./assets/inc/header.inc.php');
?>
    <header>
        <h2>Baltimore's Academics</h2>
    </header>
    <main id="schools">
        <article>
            <p>Baltimore has a plethora of excellent high schools ranging from public, public charter,
                private-independent to private-catholic.
            </p>
            <p>To shape the best and the brightest minds, the top public schools have some of the best programs schools
                can offer ranging from the arts to stem. Some of the programs are as follows: the Ingenuity Project,
                Project Lead The Way (PLTW): engineering and bio-medical, International Baccalaureate diploma program,
                various AP programs offered through Collegeboard, and many more honors related programs.
            </p>
        </article>
        <section>
            <h3>Baltimore City Public Schools</h3>
            <!-- image with text as the caption -->
            <!-- Ideas to expand,css structure possible flex because its a simple smooth design implement java to make it a photo carousel under the article text -->
            <ol>
                <figure>
                    <video class="poly" width="400" height="320" alt="Video poly's aquaponics lab" controls muted>
                        <source src="assets/images/Aquaponics.mp4" type="video/mp4">
                        <source src="Aquaponics.ogg" type="video/ogg">
                    </video>
                    <img class="poly-img" src="assets/images/poly.jpg" alt="Photo of the Poly's building.">
                    <figcaption>
                        <li>Baltimore Polytechnic Institute: 1400 West ColdSpring Lane, Baltimore, Maryland
                            #26 best in MD</li>
                        Baltimore Polytechnic Institute, ranked number one Baltimore City Public School, located onthe
                        west side of the city. Poly is known for having the Ingenuity Program, PLTW:Engineering, AP
                        Capstone, National Honor Society and many more. A STEM based school with many of clubs,such as
                        aquaponics, VEX robotics,Maryland Science Olymplaid and more to cater to all students interest.
                        A course (honors + AP) students who graduate with 28 credits will be able to receive two
                        diplomas.
                    </figcaption>
                </figure>
                <figure>
                    <img class="BCC" src="assets/images/BCC.jpg" alt="Photo of the City's building.">
                    <figcaption>
                        <li>Baltimore City College:3220 The Alameda, Baltimore, Maryland
                            #69 best in MD</li>
                        Baltimore City College, ranked second in Baltimore City Public highschoool in city, located on
                        the east side of Baltimore. Known for having the International Baccalaureate program, National
                        Honor Society and AP classes, City takes a more literature based approach with their circulum.
                        Student have access to over 30 clubs fit to all students backgrounds. IB students who graduate
                        with 31 credits will be able to receive three diplomas.
                    </figcaption>
                </figure>
                <aside>
                    <!-- Putting this in a popup so this may have to change from an aside -->
                    <p>The top two Baltimore City Public Schools, Baltimore Polytechnic Institute and Baltimore City
                        College
                        have had the longest highschool football rivalry in Maryland history, and the second longest US
                        history.
                        Beginning in 1889, the two schools have met up 134 times.</p>
                </aside>
                <figure>
                    <img class="BSA" src="assets/images/bsa.jpg" alt="Photo of the BSA's building.">
                    <figcaption>
                        <li>Baltimore School for the Arts:712 Cathedral Street, Baltimore, MD 21201
                            #72 best in MD</li>
                        Baltimore School for Arts, ranked third in Baltimore City Public highschool is located in
                        midtown Baltimore. Known for their outstanding arts program, where students have to audition for
                        entry. With access to outside programs such as TWIGS, a free arts after school program where
                        students grades 2nd-8th can audition a spot to grow their talents.
                    </figcaption>
                </figure>

                <figure>
                    <img class="bard" src="assets/images/Bard.jpg" alt="Photo of the BARD's building.">
                    <figcaption>
                        <li>BARD High School Early College:2801 N DUKELAND ST, BALTIMORE, MD</li>
                        BARD High School Early College, located on the west side of Baltimore. BARD is a school known
                        for their alternative circulum allowing students to take up to 60 BARD college credits and
                        graduate with an associates degree.</p>
                    </figcaption>
                </figure>

                <figure>
                    <figcaption>
                        <img class="western" src="assets/images/western.jpeg" alt="Photo of the Western's building.">
                        <li>Western High School: 4600 Falls Road, Baltimore, Maryland </li>
                        Western High School, located on the west side of Baltimore, connected to Poly. Western formally
                        is an all-girls, that is known for having PLTW:Biomedical and IT through CICSO.
                    </figcaption>
                </figure>

            </ol>

        </section>
    </main>
<?php
    include('./assets/inc/footer.inc.php');
?>