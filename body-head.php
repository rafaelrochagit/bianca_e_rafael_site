<audio id="demo" src="audio/voce-me-faz-tao-bem.mp3"></audio>
<?php 
    
    $config['audioOpen'] = isset($config['audioOpen']) ? $config['audioOpen'] : 'move-right'; 
    $config['audioIcon'] = isset($config['audioIcon']) ? $config['audioIcon'] : 'de-icon-cancel-3'; 

?>
<div id="options-setting" class="<?= $config['audioOpen'] ?>"> 
    <div id="setting-button-wrapper">
        <a id="music-button" href="#">
            <div class="de-icon square light small-size inline" style="border:1px solid #CCC;">
                <i class="<?= $config['audioIcon'] ?>"></i>
            </div>
        </a>
    </div>
     <div id="player">
          <h4>Tocar música do casal?</h4>
          <button onclick="document.getElementById('demo').play()" 
          class="btn btn-default control-music"> <i class="fa fa-play"> </i> Reproduzir</button>
          <button onclick="document.getElementById('demo').pause()" 
          class="btn btn-default control-music"> <i class="fa fa-pause"> </i> Pausar</button>
    </div> 
</div>



<!--PRELOADER-->
<div id="preloader" class="background_image" style="background-image:url(images/nossas/2227_edit.jpg)">
        
    <!-- BLACK OVERLAY -->
    <div class="black-overlay">
    </div>
          
        <!-- COUPLE NAME -->
    <div class="alignment">
        <div class="v-align center-middle">
                
            <div class="spinner-animation">
                  <i class="de-icon-heart-1 top-heart"></i>
              </div>
              <div class="his-name">
                BIANCA &amp;
              </div>
              <div class="her-name">
                RAFAEL
              </div>
               
                  
            </div>
    </div>  
</div><!--END of PRELOADER-->


<!-- SIDE NAVBAR -->
<nav class="sb-slidebar sb-right sb-style-push">
    
    <div id="side-navbar-header">
        
            <div id="logo-inner-wrapper">
                <!-- LOGO -->
                <div class="logo-wrapper">
                    <!-- CSS LOGO --> 
                    <a href="index.html">
                        <div class="css-logo rounded">
                            <div class="css-logo-text">
                                <strong>B</strong><i class="de-icon-heart-1"></i><strong>R</strong>
                            </div>
                        </div>
                    </a>
                
                    <!-- IMG LOGO 
                    <a href="index.html">
                        <div class="img-logo">
                            <img src="images/slide1.jpg">
                        </div>
                    </a>
                    -->
            </div>
            <!-- END of LOGO -->
            </div>
            
            <div id="close-inner-wrapper">
                <a href="#" id="close-button"><i class="de-icon-cancel-2"></i></a>
            </div>
            
      </div>
    
      <?php include_once('menu.php') ?>
</nav> <!-- END of SIDE NAVBAR -->