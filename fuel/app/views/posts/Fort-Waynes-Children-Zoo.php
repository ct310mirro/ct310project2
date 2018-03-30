<?php/* $status = "success";*/?>
  <!-- Main Div -->
  <div id="plain-background">

    <!-- Column 1 (left side)-->
    <div id="container">

      <!-- Current location within heiarchy -->
      <p>Home > Fort Wayne Zoo</p>
      <!-- Going to have to specify class for this -->

      <!-- Attraction Title -->
      <h1>Things to do at Fort Wayne's Children Zoo</h1>

      <!-- Left Column -->
      <div id="left">
        <iframe width="874" height="490" src="https://www.youtube.com/embed/L4CUToUHtHE"
        allowfullscreen></iframe>

        <!-- This is going to have to be PHP since the text dynamically changes -->
        <span id="description">Fort Wayne's Children Zoo - ranked top 10 Zoo's in the nation</span>

        <!-- Attraction Description -->

        <h3>African Journey</h3>
         <p>Be ready to be involved with the experience of a lifetime with
            African continent's animal.If your kids love Disney Movie "The
            Lion King", they will love this exibit. Some of the Animals include
            lions, hyenas and honey badger etc. We also have fun Safari ride
            that gives your aerial view of the beautiful African Animals.</p>
        <h3>Australian Adventure</h3>
         <p>The Australian Adventure has the vast range of animals from the
            Austrlain continent. We have 20,000 gallon aquarium that has
            clownfish, blue tang and pufffer fish etc. There is also a huge
            50,000 gallon tank that has blacktip reef sharks, zebra shark and
            schooling fish. You will see kangaroos hoping around and dingoes
            peeking through the tall grass. River Ride is located in Australian
            Adventure exibit and can explore the Outback. NO paddling required!</p>
        <h3>Indonesian Rain Forest</h3>
         <p>Experience jungle life as you trek through the Indonesian Rain
           Forest! When you travel through you will see colorful birds,
           Orangutan and beautiful waterfall. The exibit also has Javan Gibbons,
           18 foot python and Komodo Dragon.</p>
        <h3>Feed the Animals</h3>
         <p>Get up close to the friendly giraffe and goat for only $1.
           Visitor are able to buy food for the animal and pet the animals.</p>
           <p>  <?php echo Asset::img('childrenzoo.jpg', array('id' => 'childrenZoo')); ?></p>
         <!-- <p><img src="images/childrenzoo.jpg" alt="children zoo" height="385" width="874"></p> -->
         <span class="acknowledgement">Image from <a href="https://www.kidszoo.org/">kidszoo.org</a></span><br>
         <?php
        if(null !== Session::get('userid')) {

          include 'comment.php';
        }
         ?>
      </div>

      <!-- Right Column -->
      <div id="right">
        <h3>Plan Your Trip</h3>

        <!-- Address/ph#/weblink information -->
        <p>Fort Wayne Children's Zoo <br>
           3411 Sherman Boulevard    <br>
           Fort Wayne, IN 46808      <br>
           <a href="#map" class="link">See map</a>
         </p>
           <p>260-427-6800</p>
           <h4>Hours of Operation</h4>
           <ul>
             <li>Sun</li>
             <li>Mon</li>
             <li>Tues</li>
             <li>Wed</li>
             <li>Thurs</li>
             <li>Fri</li>
             <li>Sat</li>
             <li>9am-6pm</li>
             <li>9am-6pm</li>
             <li>9am-6pm</li>
             <li>9am-6pm</li>
             <li>9am-6pm</li>
             <li>9am-6pm</li>
             <li>9am-6pm</li>
           </ul>
           <p>First day of the 2018 season: </p>
           <p><b><u>April 21st</u></b></p>
           <p>Closed during the winter</p>
           <p>Closed on major holidays</p><br>
           <p><a href="http://kidszoo.org/" class="button">Visit Website</a></p>
      </div>
    </div>
  </div>


  <!-- Map Section -->
  <div id="location">
    <div id="map"></div>
        <a href="https://www.google.com/maps/@41.105573,-85.1564437,17z">
        <p> <?php echo Asset::img('map.png', array('class' => 'maps'))?></p>
          <!-- <img src="images/map.png" alt="google map" height=350 width=1147 class="maps"> -->
        </a>
        <span class="acknowledgement">Image from <a href="https://maps.google.com/">maps.google.com</a></span>
  </div>

