<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="eventstyling2.css">

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
                <img src="images/upang.png" alt="">
            </div>
            <div class="img-overlay"></div>
        </div>
        <div class="img-content">
            <h2>E V E N T S</h2>
            <span>Get acquainted with the upcoming events that you can attend, plan,<br>
                and share with others.</span>
        </div>
      </div>

      <!-- EVENT SECTION-->

      <section class="grid">
        <div class="events-section">
        <h2>UPCOMING EVENTS</h2>
        </div>
    </section>
    <main class="grid">
        <div class="date">
            <h2>FEBRUARY <br>14<br> 2024</h2>
        </div>
        <img src="images/massblood.jpg" class="img-detail" alt="massblood">
        <div class="welcome">
            <h2>Mass Blood Donation</h2><p>PHINMA University of Pangasinan Gymnasium, Dagupan City, Pangasinan</p><br>
           
                <a href="eventdetails1_beta1.html">View Event Details →</a> 
        </div>
        <div class="date">
            <h2>FEBRUARY <br>26<br> 2024</h2>
        </div>
        <img src="images/fdc99.jpg" class="img-detail" alt="fdc99">
        <div class="welcome">
            <h2>Cup of Joe and Sunkissed Lola concert to be held during PHINMA University of Pangasinan 99th FDC</h2><p>NRSCC, Lingayen, Pangasinan</p><br>
           
                <a href="eventdetails2_beta1.html">View Event Details →</a>    
        </div>
        <div class="date">
            <h2>JANUARY <br>13<br> 2024</h2>
        </div>
        <img src="images/john_weak.jpg" class="img-detail" alt="Komsayahan">
        <div class="welcome">
            <h2>CITEFEST 2024 — Komsayahan Ctrl + Z Rewind ft. DEXTY MN from Team Payaman and John Weak</h2><p>PHINMA University of Pangasinan Main Campus, Dagupan City, Pangasinan</p><br>
           
                <a href="eventdetails3_beta1.html">View Event Details →</a> 
        </div>
        <?php
        $conn= mysqli_connect('localhost','root','','events') or die("Connection failed: " .mysqli_connect_error());
        $sql = "SELECT * FROM `event_add`";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='date'>";
                echo "<h2>" . $row['event_date'] . "</h2>";
                echo "</div>";
                echo "<img src='" . $row['event_img'] . "' class='img-detail' alt='" . $row['event_name'] . "'>";
                echo "<div class='welcome'>";
                echo "<h2>" . $row['event_name'] . "</h2>";
                echo "<p>" . $row['event_location'] . "</p>";
                echo "<br>";
                echo "<a href='eventdetails1_beta1.html'>View Event Details →</a>";
                echo "</div>";
            }
        }
        ?>
        <h2>RELATED ARTICLES</h2>
        
        <div class="card">
            <a href="article1.html"><img src="images/polsci.jpg"  alt="polsci"></a>
            <h3>PolSci Students Learns Legal Writing, Drafting of Legal Forms</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti natus laboriosam error molestiae quis animi corporis quae, hic culpa provident doloribus enim repellendus dolorum, ab sed veritatis, eum quaerat magnam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore odit itaque magni autem fuga, repellat corporis, incidunt modi delectus soluta reprehenderit illum architecto, assumenda veritatis esse officiis recusandae aut!</p>
        </div>
      
        <div class="card">
            <a href="article2.html"><img src="images/cma1.jpg"  alt="cma"></a>
            <h3>CMA Palakasan Returns Strongee Than Ever as Brightest Stars Collide</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti natus laboriosam error molestiae quis animi corporis quae, hic culpa provident doloribus enim repellendus dolorum, ab sed veritatis, eum quaerat magnam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore odit itaque magni autem fuga, repellat corporis, incidunt modi delectus soluta reprehenderit illum architecto, assumenda veritatis esse officiis recusandae aut!</p>
        </div>
        
        <div class="card">
            <a href="article3.html"><img src="images/govern.jpg"  alt="govern"></a>
            <h3>Good Governance Caravan Underscores Importance of Youth Empowerment</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti natus laboriosam error molestiae quis animi corporis quae, hic culpa provident doloribus enim repellendus dolorum, ab sed veritatis, eum quaerat magnam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore odit itaque magni autem fuga, repellat corporis, incidunt modi delectus soluta reprehenderit illum architecto, assumenda veritatis esse officiis recusandae aut!</p>
        </div>
        <!--then fetch and display the infos from database to here-->
        
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
      </div>
  </body>
</html>