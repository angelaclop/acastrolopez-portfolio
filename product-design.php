<?php
$title = "Angela Castro - Product Design"; 
require('includes/header.php');
 ?>
     <body>
     <?php
$title = "Angela Castro - Portfolio"; 
require('includes/nav.php');
 ?>
        <main class='workGallery'>
            <div class="subheader">
                <h1 class='sectionTitle'>Work</h1>
                <a href="javascript:history.back()" class="backArrow"><svg xmlns="http://www.w3.org/2000/svg" width="17.27" height="13" viewBox="0 0 23.3 19.19">
                    <g id="Group_6" data-name="Group 6" transform="translate(-1568.55 -285.166)">
                      <path id="Path_17" class="arrow" data-name="Path 17" d="M7670.6,298.8h-20.8l7.8-7.867" transform="translate(-6080 -4)" fill="none" stroke="#474747" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                      <path id="Path_18" class="arrow" data-name="Path 18" d="M7652.762,293.875l3.775,3.712" transform="translate(-6079 5)" fill="none" stroke="#474747" stroke-linecap="round" stroke-width="2.5"/>
                    </g>
                  </svg> <span>back</span></a>
            </div><p></p>
            <section>
                <div class="boxPD" style="grid-area: header1"><h2>product <br>design</h2></div>
                <figure style="grid-area: item1PD"><a href="project-pd.php"><img src="images/camera.jpg" alt=""></a><figcaption>This interesting project, 
                    please click to see it</figcaption></figure>
                <div class= "colorBoxPD" style="grid-area: item2PD"></div>
                <figure style="grid-area: item3PD"><a href=""><img src="images/phone.jpg" alt=""></a><figcaption>This interesting project, 
                    please click to see it</figcaption></figure>
                <figure style="grid-area: item4PD"><a href=""><img src="images/umbrella.jpg" alt=""></a><figcaption>This interesting project, 
                    please click to see it</figcaption></figure>
                <div class= "colorBoxPD" style="grid-area: item5PD"></div>
                <div class="toogleVisible" style="grid-area: item6PD"></div>
                <div class="toogleVisible" style="grid-area: item7PD"></div>
                <!-- filter applied to images -->
                <svg id="svg-filter">
                    <filter id="svg-color">
                      <feColorMatrix in="SourceGraphic" type="matrix" 
                      values="0.56 0 0 0 0
                            0 0.68 0 0 0
                            0 0 0.73 0 0
                            0 0 0 0.9 0"/>
                     </filter>
                </svg>
                <!-- filter applied to images on hover -->
                <svg id="svg-filter-hover">
                    <filter id="svg-color-hover">
                      <feColorMatrix type="matrix" values="0.56 0 0 -0.2 0
                            0 0.68 0 -0.2 0
                            0 0 0.73 -0.2 0
                            0 0 0 1 0"/>
                     </filter>
              </svg>
            </section>
        </main>
        <?php
require('includes/footer.php');
 ?>