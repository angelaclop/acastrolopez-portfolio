<?php
$title = "Angela Castro - Contact"; 
require('includes/header.php');
 ?>
	<body class='homeBody'>
        <a href="" id="anchor-header"></a>
        <?php
$title = "Angela Castro - Portfolio"; 
require('includes/nav.php');
 ?>
        <main class="mainContactPage">
          <section id="contact">
              <div class="subheader"><h1>contact</h1><a href="javascript:history.back()" class="backArrow"><svg xmlns="http://www.w3.org/2000/svg" width="17.27" height="13" viewBox="0 0 23.3 19.19">
                  <g id="Group_6" data-name="Group 6" transform="translate(-1568.55 -285.166)">
                    <path id="Path_17" class="arrow" data-name="Path 17" d="M7670.6,298.8h-20.8l7.8-7.867" transform="translate(-6080 -4)" fill="none" stroke="#474747" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                    <path id="Path_18" class="arrow" data-name="Path 18" d="M7652.762,293.875l3.775,3.712" transform="translate(-6079 5)" fill="none" stroke="#474747" stroke-linecap="round" stroke-width="2.5"/>
                  </g>
                </svg> <span>back</span></a></div>
                <div>
                <img src="images/icons/contact-icon.svg" alt="Pen illustration"> 
                <div class="biggerSizes">
                  <h1>contact</h1>
                  <div>
                  <a href="https://www.instagram.com/angela_clop/" target="_blank"><img src="images/icons/i_icon-1.svg" alt="Instagram Icon"style="width:30px; height: 30px;"></a>
                  <a href="https://www.linkedin.com/in/angela-castro-90ab66a4/" target="_blank"><img src="images/icons/link-icon-1.svg" alt="LinkedIn Icon"style="width:30px; height: 30px;"></a></div>
                </div> 
              <form action="contact-2.php" method="POST">
                  <label for="name">Name*</label>
                  <input type="text" name="name" id="name" required accesskey="n" maxlength="50">
                  <label for="email">Email*</label>
                  <input type="text" name="email" id="email" required accesskey="e">
                  <label for="message">Message*</label>
                  <textarea name="message" id="message" cols="40" rows="6" maxlength="250" accesskey="m"></textarea>
                  <div class="submit">
                  <input type="submit" value="Send" id="submit" name="send">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17.27" height="13" viewBox="0 0 19.273 15.828">
                      <g id="Group_4ß" data-name="Group 4ß" transform="translate(1 1.414)">
                        <path id="Path_12" data-name="Path 12" d="M7649.8,297.466h17.273l-6.478-6.533" transform="translate(-7649.801 -290.933)" fill="none" stroke="#474747" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        <path id="Path_13" data-name="Path 13" d="M7655.9,293.875l-3.135,3.083" transform="translate(-7641.914 -283.958)" fill="none" stroke="#474747" stroke-linecap="round" stroke-width="2"/>
                      </g>
                    </svg> </div>
              </form>
              <div class="socialMedia-links"><a href="https://www.linkedin.com/in/angela-castro-90ab66a4/" target="_blank">linkedin</a><a href="https://www.instagram.com/angela_clop/" target="_blank">instagram</a></div>
            </div>
          </section>
      </main>
      <?php
require('includes/footer.php');
 ?>