<section>
<!--FOOTER-->
 <footer class="footer-wp">
    <div class="row container-footer-wp">
        <div class="col-lg-4 col-md-6 my-2">
            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center">
                <a href="https://www.economia.gob.cl/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-MinEconomia_blanco.png" class="m-2 img-fluid" width="150" height="137" alt="Logo Ministerio de Economía, Fomento y Turismo" title="Logo Ministerio de Economía, Fomento y Turismo"></a>
                <ul class="list-footer">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Quiénes Somos</a></li>
                    <li><a href="#">Programas y Servicios</a></li>
                    <li><a href="#">Explorador Territorial</a></li>
                    <li><a href="#">Contáctanos OIRS</a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-2 d-flex justify-content-center">
            <div class="d-flex flex-row align-items-center">
                <a href="https://www.selloee.cl" target="_blank"><img class="mx-2 my-1" src="<?php echo get_template_directory_uri(); ?>/img/icon-sello-excelencia-energetica.png" width="164"  height="51" alt="Sello de Excelencia Energética" title="Sello de Excelencia Energética"></a>
                <a href="https://plataforma-indice.lab.gob.cl" target="_blank"><img class="mx-2 my-1" src="<?php echo get_template_directory_uri(); ?>/img/icon-sello-compromiso-innovacion.png" width="90" height="90" alt="Sello Compromiso con la Innovación" title="Sello Compromiso con la Innovación"></a>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 my-2">
        <h1> Quiero subscribirme al newsletter</h1> 
          <div class="d-flex flex-md-row flex-column">                   
            <div class="m-1"><input type="email" class="input-footer" id="subscripcion" placeholder="Correo electrónico"></div>
            <div class="m-1"><button type="submit" class="btn-red-wp rounded-pill">Subscribirme</button> </div>
          </div>
            <div class="d-flex gap-20 my-4">
                <div>
                    <a href="https://www.facebook.com/sercotec" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.svg" width="34" height="34" alt="Sercotec Facebook" title="Sercotec Facebook">
                    </a>
                </div>
                <div>
                    <a href="https://www.instagram.com/sercotec_cl" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram.svg" width="34" height="34" alt="Sercotec Instagram" title="Sercotec Instagram">
                    </a>
                </div>
                <div>
                    <a href="https://twitter.com/Sercotec_Chile" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.svg" width="32" height="32" alt="Sercotec Twitter" title="Sercotec Twitter">
                    </a>
                </div>
                <div>
                    <a href="https://www.youtube.com/user/CanalSERCOTEC" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_youtube.svg" width="40" height="40" alt="Sercotec Youtube" title="Sercotec Youtube">
                     </a>
                </div>
                <div>
                    <a href="https://cl.linkedin.com/company/sercotecchile" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_linkedin.svg" width="34" height="34" alt="Sercotec Linkedin" title="Sercotec Linkedin">
                    </a> 
                </div>
                <div class="box-cont-footer">
                    <a href="https://www.sercotec.cl/contacto" target="_self">
                        <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon-contactanos.svg" width="26" height="20" alt="Contáctanos" title="Contáctanos">Contáctanos
                    </a>                     
                </div>                                                    
            </div>
            <div class="box-cont-footer2"> 
                <a href="https://www.sercotec.cl/contacto" target="_self">
                    <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon-contactanos.svg" width="26" height="20" alt="Contáctanos" title="Contáctanos">Contáctanos
                </a> 
           </div>

        </div>
  </div>
  <div><p class="text-center pb-3 small-text"> <a href="#">  Términos de uso</a> &#9679; <a href="#">Política de privacidad</a> &#9679; Todos los derechos reservados Sercotec <?php echo date('Y'); ?></p> </div>
 </footer>   
<!--FOOTER-->
</section>

<?php 
wp_footer()
?>

</body>
</html>