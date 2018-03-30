 <!-- Main Div -->
  <div id="plain-background">

    <!-- Column 1 (left side)-->
    <div id="container">

      <!-- Current location within heiarchy -->
      <p>Home > Eiteljorg Museum</p>
      <!-- Going to have to specify class for this -->

      <!-- Attraction Title -->
      <h1>Things to do at the Eiteljorg Museum</h1>

      <!-- Left Column -->
      <div id="left">

        <iframe width="874" height="490" src="https://www.youtube.com/embed/8gfpw-tVNYI"
        allowfullscreen></iframe>

        <!-- This is going to have to be PHP since the text dynamically changes -->
        <span id="description">Eiteljorg Museum - ranked #2 in the nation</span>

        <!-- Attraction Description -->
        <h3>Location</h3>
         <p>The Eiteljorg Museum of American Indians and Western Art is located
            in  heart of Indianapolis'downtown. The museum has the finest
            collection of Native contemporary art in the world. We are proud to
            offer engaging exibitions to promote our founder, Harrison Eiteljorg's
            vision to acknowledge art and culture of Native American and American
            west.</p>
        <h3>Jingle Rails: The Great Western</h3>
         <p>Take a Journey to the Great American West with Jingle Rails exibit.
            There are 9 working train model trains that passes through downtown
            Indianapolis, including the Eiteljorg Museum, Monument Circle, Union
            Station and Lucas Oil Stadium, where you will hear veteran Colts
            radio announcer Bob Lamey call a game. Visitors will get a photo op
            opportunity with model trains and historic Indiana sites.</p>
        <h3>Harry Fonseca: The art of living</h3>
         <p>Harry Fonseca is one of the greatest artist of contemporary Native
            art. He is known for his creativity and his paintings, ledger art
            and sketches will be displayed in the exibit. Some of his finest
            works include Cyote series and his focus of Gold Rush on Native
            American people in California.</p>
        <h3>The Reel West</h3>
         <p>Have you ever watched old Western movies? The Reel West exibit is
            for movie fans.The exibit will show how Hollywood has potrayed
            Native American culture throughout history. Visitors will be old
            silent movie posters and understand how Native American culture is
            different than one in movies and televisons.</p>
          <p>  <?php echo Asset::img('bambole.jpg', array('id' => 'bambole')); ?></p>
         <!-- <p><img src="images/bambole.jpg" alt="" height=385 width=874></p> -->
         <span class="acknowledgement">Image from <a href="https://www.eiteljorg.org/">eiteljorg.org</a></span><br>
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
        <p>Eiteljorg Museum       <br>
           500 W Washington St    <br>
           Indianapolis, IN 46204 <br>
           <a href="#map" class="link">See map</a></p>
        <p>317-636-9378</p>
        <h4>Hours of Operation</h4>
        <ul>
          <li>Sun</li>
          <li>Mon</li>
          <li>Tues</li>
          <li>Wed</li>
          <li>Thurs</li>
          <li>Fri</li>
          <li>Sat</li>
          <li>12pm-5pm</li>
          <li>10am-5pm</li>
          <li>10am-5pm</li>
          <li>10am-5pm</li>
          <li>10am-5pm</li>
          <li>10am-5pm</li>
          <li>10am-5pm</li>
        </ul>
        <p>Closed during major holidays</p>
        <p>Admission:<br>
           Adults: $15<br>
           Seniors: $12<br>
           Youth: $8<br>
           Children Under 4: Free</p><br>
          
        <p><a href="https://www.eiteljorg.org/" class="button">Visit Website</a></p>
      </div>
    </div>
  </div>

  <!-- Map Section -->
  <div id="location">
    <div id="map"></div>
        <a href="https://www.google.com/maps/@39.7685791,-86.1699859,17z">
        <!-- <p> <?php echo Asset::img('map.png', array('class' => 'maps'))?></p> -->
          <!-- <img src="images/map.png" alt="" height=350 width=1147 class="maps"> -->
        </a>
        <span class="acknowledgement">Image from <a href="https://maps.google.com/">maps.google.com</a></span>
  </div>

