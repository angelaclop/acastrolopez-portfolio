<?php
$title = "Angela Castro - Portfolio"; 
require('includes/header.php');
 ?>
 <body class='homeBody'>
        <header class="standard-header">
            <a href="index.php" id='logo'><img src="images/ac-logo.svg" alt="Angela Castro Logo"></a>
            <nav><a href="index.php">home</a>
            <a href="work.php">work</a>
            <a href="contact.php">contact</a>
            <a href="about.php">about</a></nav>
        </header>
        <main>
            <!-- <span>hello</span> -->
            <div id="designSections">
                <a href="product-design.php">PD <span>Product Design</span></a><hr>
                <a href="visual-design.php">VD <span>Visual Design</span></a>
            </div>
            <section id='recentWork'>
                <h1>recent work</h1>
                <div>
                <figure><a href=""><img src="images/camera.jpg" alt=""></a><figcaption><a href="" class='projectTitle'>Name of the project</a></figcaption></figure>
                <figure><a href=""><img src="images/phone.jpg" alt=""></a><figcaption><a href="" class='projectTitle'>Name of the project</a></figcaption></figure>
                <figure><a href=""><img src="images/umbrella.jpg" alt=""></a><figcaption><a href="" class='projectTitle'>Name of the project</a></figcaption></figure>
                </div>
            </section>
        </main>
        <?php
require('includes/footer.php');
 ?>