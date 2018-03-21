

  <!-- Wallpaper Section -->
  <div id="background">
    <p>Explore Things To Do</p>
  </div>


  <!-- Entire div below Wallpaper (Excl. Footer) -->
  <div id="bottom">
    <span class="acknowledgement">Image from <a href="http://zyzixun.net/">zyzixun.net</a></span>
    <!-- Welcome Message Section -->
    <div class="welcome">
      <h1>Indiana</h1>
      <p>There are so many things to do during an Honest-to-Goodness Indiana getaway, so come for a day, a weekend or longer.
        If you're looking for family travel, you'll love our museums, zoos, dunes, and more. Planning a
        visit? Check out our unique Indiana Dunes National Park. Got kids? Head on over to the Fort Wayne Children's Zoo.
        If history and art is your thing, visit the Eiteljorg Museum of American Indians and Western Art.
        Start planning your trip here!</p>
    </div>

    <!-- Featured Section -->
    <div id="featured-section">

      <div id="featured-position1">
        <p>Featured Content</p>
        <div class="featured-content">
          <div class="attraction-caption">
            <?php echo Asset::img('indiana.png', array('class' => 'attraction-image')) ?>
            <!-- <img src="images/indiana.png" class="attraction-image" alt="Indiana symbol"> -->
            <span class="acknowledgement">Image from <a href="https://www.iconfinder.com/">iconfinder.com</a></span>
          </div>
          <div class="top-border"></div>
            <h3>About Us</h3>
            <p>Each year, Indiana welcomes more than 77 million people to its many tourists attractions and events. Our site works
            to coordinate efforts to promote travel throughout Indiana. Addtionally, we assist to enhance the visitor experience
            by providing up-to-date travel information and travel guides for pre-planning activities. These free publications
            include an Indiana Travel Map which highlights tourists locations</p>
            <p><?php echo Html::anchor('ct310/about', 'Visit Page');?></p>
            <!-- <p><a href="About-Us.php">Visit Page</a></p> -->
        </div>
      </div>

      <div id="featured-position2">
        <p>Featured Content</p>
        <div class="featured-content">
          <div class="attraction-caption">
          <?php echo Asset::img('indianadunes.jpg', array('class' => 'attraction-image')) ?>
            <!-- <img src="images/indianadunes.jpg" class="attraction-image" alt="Indiana dunes"> -->
            <span class="acknowledgement">Image from
              <a href="https://en.wikipedia.org/wiki/Indiana_Dunes_National_Lakeshore">wikipedia.org</a></span>
          </div>
          <div class="top-border"></div>
            <h3>Indiana Dunes</h3>
            <p>Indiana Dunes National Lakeshore is a unit of the National Park System designated as a U.S. National Lakeshore
            located in northwest Indiana and managed by the National Park Service. It was authorized by Congress in 1966.
            The national lakeshore runs for nearly 25 miles (40 km) along the southern shore of Lake Michigan, in Chesterton,
            Indiana.</p>
            <p><?php echo Html::anchor('ct310/indiana_dunes', 'Visit Page');?></p>
          <!-- <p><a href="Indiana-Dunes.php">Visit Page</a></p> -->
        </div>
      </div>

      <div id="featured-position3">
        <p>Featured Content</p>
        <div class="featured-content">
          <div class="attraction-caption">
          <?php echo Asset::img('eiteljorg.jpg', array('class' => 'attraction-image')) ?>
            <!-- <img src="images/eiteljorg.jpg" class="attraction-image" alt="Eiteljorg Museum" title="Image from eiteljorg.org"> -->
            <span class="acknowledgement">Image from
              <a href="https://en.wikipedia.org/wiki/Eiteljorg_Museum_of_American_Indians_and_Western_Art">wikipedia.org</a></span>
          </div>
          <div class="top-border"></div>
            <h3>Eiteljorg Museum</h3>
            <p>The Eiteljorg Museum of American Indians and Western Art is located in downtown Indianapolis, Indiana and houses
            an extensive collection of visual arts by indigenous peoples of the Americas, as well as Western American paintings
            and sculptures collected by businessman and philanthropist Harrison Eiteljorg (1903–1997). The museum houses
            one of the finest collections of Native contemporary art in the world</p>
            <p><?php echo Html::anchor('ct310/eiteljorg_museum', 'Visit Page');?></p>
            <!-- <p><a href="Eiteljorg-Museum-Of-American-Indians-And-Western-Art.php">Visit Page</a></p> -->
        </div>
      </div>

      <div id="featured-position4">
        <p>Featured Content</p>
        <div class="featured-content">
          <div class="attraction-caption">
          <?php echo Asset::img('zoo.jpg', array('class' => 'attraction-image')) ?>
            <!-- <img src="images/zoo.jpg" class="attraction-image" alt="Fort Wayne Zoo"> -->
            <span class="acknowledgement">&nbsp;Image from &nbsp;<a href="https://www.kidszoo.org/">kidszoo.org</a></span>
          </div>
          <div class="top-border"></div>
          <h3>Fort Wayne Childrens Zoo</h3>
          <p>The Fort Wayne Children's Zoo is a zoo in Fort Wayne, Indiana, United States. It is accredited by the Association
            of Zoos and Aquariums. Since opening in 1965, the 1,000-animal zoo has been located on 40 acres (16 ha) in Fort
            Wayne's Franke Park.</p>
            
            <p><?php echo Html::anchor('ct310/fort_wayne_zoo', 'Visit Page');?></p>
          <!-- <p><a href="Fort-Wayne-Childrens-Zoo.php">Visit Page</a></p> -->
        </div>
      </div>
    </div>
  </div>


