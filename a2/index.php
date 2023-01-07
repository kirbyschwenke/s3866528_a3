<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Home Page</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
<link rel="icon" href='../../media/L.png' type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Poiret+One&display=swap" rel="stylesheet">  </head>

  <body>

    <header>
      <div class="header"><img src='../../media/LunardoReverse.png' alt='Lunardo Cinema logo' height=150px/><br>Where the comfort of your home meets the big screen</div>
    </header>

    <nav>
          <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#about_us">About Us</a></li>
     <li><a href="#seats+prices">Seats and Prices</a></li>
     <li><a href="#now_showing" target="">Now Showing</a></li>
     <li><a href="booking.php">Book Now</a></li>
    </ul>
    </nav>

    <main>

      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>

<section id="about_us">
<h2>About Us</h2>   
<p> sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br> </p>
</section>

<section id="seats+prices">
<h2>Seats and Prices</h2>   
<p> sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br> </p>
</section>

<section id="now_showing">
<h2>Now Showing</h2>  
<p> sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br>sd </br> </p> 
</section>

 </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Kirby Schwenke, s3866528. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
