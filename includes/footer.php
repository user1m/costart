<!--contact start-->
<section class="contactDetails" id="contact">
  <div class="container">
    <div class="heading">
      <h2>Get In Touch</h2>
      <p>Please feel free to reach out.</p>
    </div>
    <!--contact info start-->
    <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
      <h4>Contact details</h4>
      <p> <i class="fa fa-map-marker fa-lg"></i>Technology Commercialization
        Knowledge Transfer <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1524 North High Street
        Columbus, Ohio 43201</p>
        <p> <i class="fa fa-envelope-o "></i> <a href="mailto:co.start.now@gmail.com">co.start.now@gmail.com</a></p>
        <p> <i class="fa fa-link "></i> www.costart.osu.edu</p>
      </div>
      <!--contact info end-->
      <!--contact form start-->
      <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 conForm">
        <h4>Shoot us a message!</h4>
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 noMarr" placeholder="Your email..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send message">
          <div id="simple-msg"></div>
        </form>
      </div>
      <!--contact form end-->
    </div>
  </section>
  <!--contact end-->
  <!--footer start-->
  <section class="footer" id="footer">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <ul>
          <li><a href="https://twitter.com/CoStartNow" target="blank"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li><a href="https://www.facebook.com/CoStartNow" target="blank"><i class="fa fa-facebook fa-2x"></i></a></li>
          <li><a href="https://www.linkedin.com/pub/costart-osu/59/53a/b93" target="blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
          <li><a href="http://costart.osu.edu/?feed=rss2" target="blank"><i class="fa fa-rss fa-2x"></i></a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h3>Sign up for our newsletter</h3>
        <p>Join our mailing list for access to great entrepreneurial events and resources!</p>
        <form class="mailList">
          <fieldset>
            <input type="text" placeholder="john@doe.com"><input type="submit" class="submitBnt">
          </fieldset>
        </form>
      </div>
    </div>
  </section>
  <!--footer end-->
</div>
<!--wrapper end-->
<!--modernizr js-->
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
<!--for custom jquary-->
<script src="js/custom.js"></script>
<!--for placeholder jquary-->
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<!--for menu jquary-->
<script type="text/javascript" src="js/stickUp.js"></script>
<script type="text/javascript">
jQuery(function($) {
  $(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
  $('.navbar-wrapper').stickUp({
    parts: {
      0: 'banner',
      1: 'calendar',
      3: 'contact'
    },
    itemClass: 'menuItem',
    itemHover: 'active',
    topMargin: 'auto'
  });
});

  $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
    $( ".navbar-collapse" ).addClass( "hideClass" );
  });


  $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
    $( ".navbar-collapse" ).addClass( "collapse" );
  });


  $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
    $( ".navbar-collapse" ).removeClass( "in" );
  });

  $( ".navbar-toggle" ).click(function() {
    $( ".navbar-collapse" ).removeClass( "hideClass" );
  });


});
</script>
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script>
<script src="js/jquery.easypiechart.js"></script>
<!--contact form js-->
<script type="text/javascript" src="js/jquery.contact.js"></script>
<!-- TODO: Google analytics here -->
</body>
</html>
