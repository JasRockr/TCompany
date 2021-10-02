<!-- SECCION FOOTER -->
<footer class="site-footer">
    <div class="contenedor clearfix">
      
      <!-- ACERCA DE T-COMPANY® -->
      <div class="footer-informacion">
        <h3>Sobre <span>T-Company</span></h3>
        <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
      </div> <!-- .footer-informacion -->

      <!-- ULTIMOS TWEETS -->
      <div class="ultimos-tweets">
        <h3>Últimos <span>tweets</span></h3>
        <ul>
          <li> Integer ultricies justo nec ipsum finibus, eu interdum quam vulputate. <span>#Pellentesque</span> nec justo non est eleifend pulvinar.</li>
          <li> Integer ultricies <span>#justo</span> nec ipsum finibus, eu interdum quam vulputate. Pellentesque nec justo non est eleifend pulvinar.</li>
          <li> Integer ultricies justo nec ipsum finibus, eu interdum quam vulputate. #Pellentesque nec <span>@justo</span> non est eleifend pulvinar.</li>
        </ul>
      </div> <!-- .ultimos-tweets -->

      <!-- ENLACES A REDES SOCIALES -->
      <div class="menu">
        <h3>Redes <span>sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
          <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
          <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
        </nav>
      </div> <!-- .menu -->
    </div> <!-- .contenedor clearfix -->

    <!-- PIE DE PAGINA - COPYRIGHT © -->
    <p class="copyright">
    © Copyright 2021 T-COMPANY ®. Todos los derechos Reservados.
    <br> Powered By: JsonRivera
    </p>

  </footer> <!-- .site-footer -->

  <!-- LLAMADA A ARCHIVOS JAVASCRIPT -->
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  
  <!-- Lightbox, Colorbox -->
  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'index') {
      // Lightbox - Colorbox
      echo '<script src="js/lightbox.js"></script>
            <script src="js/jquery.colorbox-min.js"></script>';
    } else if ($pagina == 'galerias'){
        //Colorbox
        echo '<script src="js/lightbox.js"></script>';
      }
  ?>
  
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  



<!-- MailerLite Universal -->
<script>
(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

var ml_account = ml('accounts', '3458363', 'd9f6w3a5c2', 'load');
</script>
<!-- End MailerLite Universal -->

<!-- MailerLite Event Pop Up -->
<script>
    var ml_webform_4745678 = ml_account('webforms', '4745678', 'b7y7a1', 'load');
    ml_webform_4745678('animation', 'fadeIn');
</script>

  </body>

</html>