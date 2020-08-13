<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-info">
        <h3>Sobre <span>gdlWebCamp</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum. Fusce condimentum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum. Fusce condimentum.
        </p>
      </div>
      <div class="ultimos-tweets">
        <h3>Últimos <span>Tweets</span></h3>
        <ul>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum.</li>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum.</li>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum.</li>
        </ul>
      </div>
      <div class="menu">
        <h3>Redes <span>Sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-twitter-square"></i></a>
          <a href="#"><i class="fab fa-pinterest-square"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram-square"></i></a>
        </nav>
      </div>
    </div>
    <p class="copyright">Todos los derechos reservados GDLWEBCAMP 2020</p>
    <!-- Begin Mailchimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:100%;}
      /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    <div style="display:none;">
      <div id="mc_embed_signup">
      <form action="https://hotmail.us17.list-manage.com/subscribe/post?u=e8c53326f4a18ed7463da1cc0&amp;id=5795499250" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
        <h2>¡Subscribete para no perderte de ningún evento!</h2>
      <div class="indicates-required"><span class="asterisk">*</span> obligatorio</div>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Email  <span class="asterisk">*</span>
      </label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e8c53326f4a18ed7463da1cc0_5795499250" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribirse!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->
    </div>
  </footer>

    
    <script src="js/plugins.js"></script>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    
    <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if ($pagina == 'invitados' || $pagina == 'index'){
      echo '<script src="js/jquery.colorbox-min.js"></script>';
    }else if ($pagina == 'conferencia'){
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>
    <script src="js/main.js"></script>    


    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>