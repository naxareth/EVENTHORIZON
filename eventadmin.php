<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">

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
       

        <section class="grid">
          <div class="add-section">
            
            <h1>ADD EVENTS</h1>
            <form action="connect.php" method="POST">
      <label for="event_date">Event Date:</label>
      <input type="date" id="event_date" name="event_date" required>
      <br>
      <br>
      <label for="event_img">Event Image:</label>
      <input type="file" id="event_img" name="event_img" required>
      <br>
      <br>
      <label for="event_name">Event Name:</label>
      <input type="text" id="event_name" name="event_name" required>
      <br>
      <br>
      <label for="event_location">Event Location:</label>
      <input type="text" id="event_location" name="event_location" required>
      <br>
      <br>
      <input type="submit" value="Add Event" name="submit">
    </form>
      
          
      
          </div>
          </section>
      
        
      


      </div>

     

      <!-- EVENT SECTION-->

      <section class="grid">
        <div class="events-section">
        <h2></h2>
        </div>
    </section>

    
   
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
    <script src="eventjs.js"></script>
   
      </div>
  </body>
</html>