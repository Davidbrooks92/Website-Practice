<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
  var timestamp = '<?= time(); ?>';

  function updateTime() {
    $('#time').html(Date(timestamp));
    timestamp++;
  }
  $(function() {
    setInterval(updateTime, 1000);
  });

  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>
<?php
function template_header($title)


{



  echo <<<EOT
    <!DOCTYPE html>
    <head>
      <link rel="stylesheet" href="styling.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <script src="script.js"></script>
      <title>$title</title>
      <nav>
        <ul class="menu">
          <li class="logo"><a><img src="cat_logo.png" alt="CAT Logo" style="height:50px;"></a></li>
          <li class="item"><a href="index.php">Home</a></li>
          <li class="item"><a href="aboutus.php">About</a></li>
          <li class="item"><a href="jobs.php">Careers</a></li>
          <li class="item"><a href="contactus.php">Contact Us</a></li>
          <li class="item has-submenu">
            <a tabindex="0">Services</a>
            <ul class="submenu">
              <li class"subitem"><a href="services.php">Services</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </head>
    <body class="body">

EOT;
}
?>
<?php
// Template Footer
function template_footer()
{
  $year = date('Y');

  echo <<<EOT

</body>
<footer class="footer">
  <iframe id="copy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10234.11845083172!2d-5.2693913!3d50.1138109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x656537ff3a72993b!2sCornwall%20Auto%20Technics%20Ltd!5e0!3m2!1sen!2suk!4v1644421880679!5m2!1sen!2suk" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
    <p id="copy">7 Water-Ma-Trout, Helston Cornwall TR13 0LW</p>
    <p id="copy">Tel: 01326 554063</p>     
    <p id="copy">Copyright &#169; $year <a id="copy" href="/">Cornwall Auto Technics</a></p>
    <p id="time"></p> 
</footer>
</html>
EOT;
}
?>