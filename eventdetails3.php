<?php
$conn = mysqli_connect("localhost", "root", "", "data");

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $date = date('F d Y, h:i:s A');
  $reply_id = $_POST["reply_id"];

  $query = "INSERT INTO tb_data3 VALUES('', '$name', '$comment', '$date', '$reply_id')";
  mysqli_query($conn, $query);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="eventdetailstyling.css">

    <title>document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="eventmain_beta1.html" class="navbar-brand">EVENT<span>HORIZON</span></a>
        <div>
          <ul class="navbar-nav">
            <li class="nav-item"><a href="eventmain_beta1.html" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="aboutus.html" class="nav-link">ABOUT</a></li>
            <li class="nav-item"><a href="resources.html" class="nav-link">RESOURCES</a></li>
            <li class="nav-item"><a href="contacts.html" class="nav-link">CONTACTS</a></li>
          </ul>
        </div>
      </nav>

      <div class="header">
        <div class="img-parent">
            <div class="img">
                <img src="images/john_weak.jpg" alt="">
            </div>
            <div class="img-overlay"></div>
        </div>

        <div class="img-content">
          <h2>KOMSAYAHAN</h2>
          <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci perferendis fuga voluptate, velit sint quos deserunt? Nulla suscipit fugiat doloribus exercitationem, consequuntur, neque facilis aut quam, architecto possimus molestiae explicabo!<br>
             </span>
        </div>

        <section class="grid">
          <div class="countdown-section">
            
            <h1>EVENT COUNTDOWN</h1>
      
            <div id="countdown" class="countdown">
      
            <div class="time">
              <h2 id="days">00</h2>
              <small>DAYS</small>
            </div>
      
            <div class="time">
              <h2 id="hours">00</h2>
              <small>HOURS</small>
            </div>
      
            <div class="time">
              <h2 id="minutes">00</h2>
              <small>MINUTES</small>
            </div>
      
            <div class="time">
              <h2 id="seconds">00</h2>
              <small>SECONDS</small>
            </div>
      
          </div>
          </section>
      
        
      


      </div>

     

      <!-- EVENT SECTION-->

      <section class="grid">
        <div class="events-section">
        <h2></h2>
        </div>
    </section>

    
   
    <main class="grid">
        
      <img src="images/john_weak.jpg" class="img-detail" alt="Komsayahan">
      <div class="welcome">
          <h2>CITEFEST 2024 — Komsayahan Ctrl + Z Rewind ft. DEXTY MN from Team Payaman and John Weak</h2>PHINMA University of Pangasinan Main Campus, Dagupan City, Pangasinan</h2><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quas harum. Quos suscipit perspiciatis corporis odit, commodi voluptatem nam magni harum distinctio, architecto necessitatibus similique, quam sapiente rem animi consectetur.</p>
        </div>
        <div class="date">
          <h2>EVENT STARTS AT 3:00PM</h2>
      </div>
    
    <div class="commentsection">
      <?php
      $datas = mysqli_query($conn, "SELECT * FROM tb_data3 WHERE reply_id = 0"); // only select comment and not select reply
      foreach($datas as $data) {
        require 'comment3.php';
      }
      ?>
      <form action = "" method = "post">
        <h3 id = "title">Leave a Comment</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" placeholder="Your name" required>
        <textarea name="comment" placeholder="Your comment" required></textarea>
        <button class = "submit" type="submit" name="submit">Submit</button>
      </form>
    </div>

    <script>
      function reply(id, name){
        title = document.getElementById('title');
        title.innerHTML = "Reply to " + name;
        document.getElementById('reply_id').value = id;
      }
    </script>
        
        <h2>RELATED ARTICLES</h2>
     
      
        <div class="card">
            <a href="article1.html"><img src="images/polsci.jpg"  alt="polsci"></a>
            <h3>PolSci Students Learns Legal Writing, Drafting of Legal Forms</h3>
            <p>The Association of Political Science Students (APSS) at PHINMA University of Pangasinan held its second Paralegal Training on September 29, 2022, focusing on legal writing and drafting of legal forms. The training aimed to prepare Political Science students, particularly those aspiring to pursue law, with essential skills for the legal profession. Led by Atty. Danielle D. Bunquin, an alumna and litigation lawyer, the event included discussions on legal writing and workshops where participants practiced drafting demand letters. (click on the article to read more) </p>

        </div>
      
        <div class="card">
            <a href="article2.html"><img src="images/cma1.jpg"  alt="cma"></a>
            <h3>CMA Palakasan Returns Strongee Than Ever as Brightest Stars Collide</h3>
            <p>The College of Management and Accountancy (CMA) organized the CMA Palakasan, themed "Collision of Stars," featuring competitions and activities from October 6-8, 2022. Five teams represented different stars, engaging in various contests including digital art, quiz bees, and e-sports tournaments. JMA emerged as the Overall Champion, with ISHTM's Anton Macapallag and Quennie Pearl Cubol winning Mr. and Ms. CMA Icons 2022. The event showcased teamwork, talent, and unity within the CMA community, setting a tone for future successes. (click on the article to read more)</p>
        </div>
        
        <div class="card">
            <a href="article3.html"><img src="images/govern.jpg"  alt="govern"></a>
            <h3>Good Governance Caravan Underscores Importance of Youth Empowerment</h3>
            <p>
                The Kaya Natin! Movement organized a seminar-workshop titled "Juan for Good Governance Caravan" at PHINMA-UPang's Banquet Hall on September 19, 2022. Led by Malabon City Mayor Antolin Oreta III and Alaminos City Councilor Carol Dizon-Sison, the event aimed to empower young leaders in championing good governance. Discussions focused on youth empowerment projects and the importance of community engagement. Attendees participated in workshops to express their visions for the future of the Philippines. The caravan intends to spread the organization's goals to more cities and provinces. (click on the article to read more)</p>
        </div>
      </main>

<!--FOOTER  aaaaaaaaa-->
<footer class="grid">
  <h1>© NEXUS COLLECTIVE 2024, ALL RIGHTS RESERVED</h1>
  <nav>
      <a href="" class="foot-link">HOME</a></li>
      <a href="" class="foot-link">ABOUT</a></li>
      <a href="" class="foot-link">RESOURCES</a></li>
      <a href="" class="foot-link">CONTACTS</a></li>
      
  </nav>
</footer>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <!--JAVASCRIPT-->
    <script>
      $(document).scroll(function() {
        $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
      });
    </script>
    <script src="eventjs3.js"></script>
   
      </div>
  </body>
</html>