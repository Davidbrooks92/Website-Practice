<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
  var timestamp = '<?= time(); ?>';

  function updateTime() {
    $('#time').html(Date(timestamp));
    timestamp++;
  }
  $(function() {
    setInterval(updateTime, 1000);
  });
</script>
<?php
function template_header($title)
{
  date_default_timezone_set('Europe/London');
  $date = date('m/d/Y h:i:s', time());

  $weekday = date('l');

  if ($weekday == "Saturday") {
    $open_from = "09:00";
    $open_to = "12:00";
  } elseif ($weekday == "Sunday") {
    $open_from = "Closed";
    $open_to = "Closed";
  } else {
    $open_from = "09:00";
    $open_to = "17:00";
  }
  $runningTime = date('h:i:s');

  $openclosed = "";


  echo <<<EOT
    <!DOCTYPE html>
    <link rel="stylesheet" href="styling.css">
    <title>$title</title>
    <body>
    <div id="top">
    <header>
    <img src="cat_logo.png" alt="CAT Logo" width="300" height="100">
    </header>
    <nav>
      <a href="index.php">Home</a>
      <a href="aboutus.php">About</a>
      <a href="services.php">Services</a>
      <a href="jobs.php">Careers</a>
      <a href="contactus.php">Contact Us</a>
    </nav>
    </div>
    <main>
      <article>
        <h2>7 Water-Ma-Trout, Helston Cornwall TR13 0LW</h2>
        <p>Tel: 01326 554063</p>
      </article>
      <aside>
        <p id="time"></p>
        <p>$weekday\nOpen from: $open_from\nTil: $open_to</p>
        
      </aside>
    </main>
    
EOT;
}
?>
<?php
// Template Footer
function template_footer()
{
  $year = date('Y');

  echo <<<EOT
    <footer>
    
	<?= template_header('Contact Us') ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10234.11845083172!2d-5.2693913!3d50.1138109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x656537ff3a72993b!2sCornwall%20Auto%20Technics%20Ltd!5e0!3m2!1sen!2suk!4v1644421880679!5m2!1sen!2suk" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<p>Copyright &#169; $year <a href="/">Cornwall Auto Technics</a></p>
</footer>
</body>
</html>
EOT;
}
?>