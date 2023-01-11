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

<section id="about_us">
<h1>About Us</h1>   
<p>Welcome to the new and improved Lunardo Cinema!</br></br>
Lunardo cinema is your local home of Hollywood delivering you a unique take on the cinema experience that the big guys can't compete with. Come on in to your home away from home and enjoy our new and improved cinema, open now after extensive renovations.</br></br>
The improved Lunardo Cinema delivers a selection of standard seats and reclinable first class seats which you can read more about in our <a href="#seats+prices">seats and prices</a> section of the page.</br></br>
Our cinemas have also been upgraded to include superior projection and sound systems from Dolby, including <a href="https://professional.dolby.com/cinema/">3D Dolby Vision projection</a> and <a href="https://professional.dolby.com/cinema/dolby-atmos">Dolby Atmos sound</a>.</br>
</p>
</section>

<section id="seats+prices" >
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
