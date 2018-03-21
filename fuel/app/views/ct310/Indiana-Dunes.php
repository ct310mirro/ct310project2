

  <!-- Main Div -->
  <div id="plain-background">

    <!-- Column 1 (left side)-->
    <div id="container">

      <!-- Current location within heiarchy -->
      <p>Home > Indiana Dunes</p>
      <!-- Going to have to specify class for this -->

      <!-- Attraction Title -->
      <h1>Things to do at the Indiana Dunes</h1>

      <!-- Left Column -->
      <div id="left">
        <iframe width="874" height="490" src="https://www.youtube.com/embed/85uLjU8r7l0?rel=0"
        allowfullscreen></iframe>

        <!-- This is going to have to be PHP since the text dynamically changes -->
        <span id="description">Indiana Dunes - Top 10 best state parks</span>

        <!-- Attraction Description -->

        <h3>Nature and Beauty</h3>
         <p>Explore the beautfiful nature of Indiana Dunes. Relax on the beach
            or take a calm walk in the Indiana Dunes State Park. People are often
            suprised by the majestic offering of the Indiana Dunes.</p>
        <h3>Indiana Dunes State Park</h3>
         <p>Indiana Dunes State Park has beach, marshes, swamps, forests and dunes
            to help you relax. This is a spot to spend time with your family as it
            is great place for camping, picnicking and hiking. The state park is
            also home to Mt. Tom, a sand which towers 192 feet above Lake Michigan. </p>
        <h3>Porter Beach area</h3>
         <p>Porter Beach Area is a great place to play beach sports, bask in sun and
            have fun splashing the waters. No life guard</p>
        <h3>Tolleston Dunes Trail</h3>
         <p>If you are a hiker, you are going to love Tolleston Dunes Trail. You will
            get to see rare black oak savanna tree and endangered Karner blue
            butterfly.</p>
        <?php echo Asset::img('dunes.png', array('id' => 'dunes'))?>
         <!-- <p><img src="images/dunes.png" alt="" height="385" width="874"></p> -->
         <span class="acknowledgement">Image from <a href="http://www.indianadunes.com/">indianadunes.com</a></span><br>
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
        <p>Indiana Dunes                    <br>
           1215 North Indiana State Road 49 <br>
           Porter, IN 46304                 <br>
           <a href="#map" class="link">See map</a>
         </p>
           <p>219-395-1882</p>
           <h4>Hours of Operation</h4>
           <ul>
             <li>Sun</li>
             <li>Mon</li>
             <li>Tues</li>
             <li>Wed</li>
             <li>Thurs</li>
             <li>Fri</li>
             <li>Sat</li>

             <li>8am-6pm</li>
             <li>8am-6pm</li>
             <li>8am-6pm</li>
             <li>8am-6pm</li>
             <li>8am-6pm</li>
             <li>8am-6pm</li>
             <li>8am-6pm</li>
           </ul>
           <p>Closed during major holidays</p><br>
           <p><a href="https://www.nps.gov/indu/index.htm" class="button">Visit Website</a></p>
      </div>
    </div>
  </div>

  <!-- Map Section -->
  <div id="location">
    <div id="map"></div>
        <a href="https://www.google.com/maps/@41.633353,-87.055956,17z">

       <?php echo Asset::img('map.png', array('class' => 'maps'));?>
          <!-- <img src="images/map.png" alt="google maps" height=350 width=1147 class="maps"> -->
        </a>
        <span class="acknowledgement">Image from <a href="https://maps.google.com/">maps.google.com</a></span>
  </div>

