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



  echo <<<EOT
    <!DOCTYPE html>
    <link rel="stylesheet" href="styling.css">
    <title>$title</title>
    <div class="topcontainer">
    <header class="header">
    <img class="imgheader" src="cat_logo.png" alt="CAT Logo">
    </header>
    <nav class="nav">
      <a class="navbar" href="index.php">Home</a>
      <a class="navbar" href="aboutus.php">About</a>
      <a class="navbar" href="services.php">Services</a>
      <a class="navbar" href="jobs.php">Careers</a>
      <a class="navbar" href="contactus.php">Contact Us</a>
    </nav>
    </div>
    <body class="body">
    <div id="top">
    
    </div>
    <div class="xm xm--generic-style">
      <div class="xm__outer">
        <div class="xm__inner">
          <div class="xm__close-btn">
            <span>
            ::before
            ::after
            </span>
          </div>
          <div id="modal" class="xm__inner-block">
            <div class="xm__decorations xm__decorations--upper"></div>
              <h2 class="xm__headline">Covid-19 Update</h2>
              <div class="xm__text-content">
                <p>We are delighted to announce both our Helston and Penzance offices are open.</p>
                <p></p><p>&nbsp;</p>
                <p>We have put in place social distancing measures and PPE for your safety and protection.</p>
                <p>&nbsp;</p>
                <p>We aim to make all transactions as easy as possible and keep contact to a minimum in terms of time spent with us,this will not reduce the excellent customer care we deliver.</p>
                <p>&nbsp;</p>
                <p>We look forward to interacting with you be it in person on the phone by email or video call.</p>
                <p>&nbsp;</p>
                <p>All of us here hope you are safe and well.</p>
                <p>&nbsp;</p>
                <p>Best wishes from us all at Chris Nicholls Motors</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>            
                </div>
            <div class="xm__bg-img">
            </div>
            <div class="xm__bells-icon">
            </div>
            <div class="xm__decorations xm__decorations--lower">
            </div>
          </div>
        </div>
      </div>
      <div class="xm__shortcut xm__shortcut--active" style="color:">Covid-19 Update</div>
    </div>
    <main>
      <article>
        <h2>7 Water-Ma-Trout, Helston Cornwall TR13 0LW</h2>
        <p>Tel: 01326 554063</p>
      </article>
      <aside>
               
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
    
</body><footer class="footer">
    
	<?= template_header('Contact Us') ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10234.11845083172!2d-5.2693913!3d50.1138109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x656537ff3a72993b!2sCornwall%20Auto%20Technics%20Ltd!5e0!3m2!1sen!2suk!4v1644421880679!5m2!1sen!2suk" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<p>Copyright &#169; $year <a href="/">Cornwall Auto Technics</a></p>
<p id="time"></p> 
</footer>
</html>
EOT;
}
?>