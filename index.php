<!DOCTYPE html>
<html lang="en">
    <?php include_once('header.php')?>
    <style>
        @media (max-width: 1100px) and (max-height: 625px) {
          #save-the-date {
              padding-top: 35px;
              margin-bottom: 10px;
          }  

          #save, #the-date {
            font-size: 45px;
          }

          #date {
            font-size: 25px;
          }

          #hour {
            padding-top: 0px;
            font-size: 17px;
          }

          #save-the-date .banner-text {
            margin-top: 2px;
            margin-bottom: 2px;
          }

          #countdown {
            font-size: 6px;
            margin-top: 7px;
          }

          #heart-divider {
            margin-bottom: 5px;
            padding-top: 5px;
          }

          .banner-text {
            margin-top: 5px;
            margin-bottom: 5px;
          }
        }    
    </style>
    
    <body>
    <?php include_once('body-head.php')?>   
        <!-- SLIDEBAR CONTENT WRAPPER -->
        <div id="sb-site">
            <?php include_once('body-header.php')?>   
          
            <!-- MAIN SLIDER -->
            <section id="main-slider" class="flexslider fullscreen">        
                
                <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
                <div class="slide-title-outter-wrapper">
                        
                    <!-- MAIN SLIDER TITLE INNER WRAPPER -->
                    <div class="slide-title-inner-wrapper">
                            
                        <!-- TITLE -->
                        <div class="slide-title align-middle">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-6 animation delay1 fadeInUp">
                        
                                        <div id="save-the-date">

                                            <div id="save">Bianca</div>
                                            <div id="the-date">& Rafael</div>
                                            <div id="date">
                                                - 14<span class="pink-dot">.</span>06<span class="pink-dot">.</span>2020 -
                                            </div>
                                            <div id="hour">
                                                17h                                                
                                            </div>
                                        </div>

                                        <div class="banner-text light medium" style="letter-spacing:3px">
                                            <h4>*** WE ARE GETTING MARRIED ***</h4>
                                        </div>    

                                        <div id="countdown" class="simple-countdown animation fadeInUp"></div>

                                        <div id="heart-divider" class="heart-divider">
                                            <span class="white-line" style="width:10px"></span>
                                            <i class="de-icon-heart pink-heart"></i>
                                            <i class="de-icon-heart white-heart"></i>
                                            <span class="white-line" style="width:10px"></span>
                                        </div>
                                        <div id="link-home-list">
                                          <a class="de-icon-gift" href="https://sites.icasei.com.br/bianca_e_rafael_2020/store" target="_blank">
                                          Lista de Presentes
                                          </a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                            
                    </div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->
                </div> <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->
                                 
                <!-- MAIN SLIDER IMAGES -->     
                <ul class="slides">  
                    <li>
                          <!-- SLIDE IMAGE -->
                        <div data-stellar-ratio="0.5" class="slide-image" 
                            style="background-image:url(images/nossas/2227_edit.jpg);">
                        </div>
                    
                        <!-- SLIDE OVERLAY -->
                        <div class="slide-overlay" style="opacity:0.2"> </div>
                    </li> 
                    <li>
                        <!-- SLIDE IMAGE -->
                        <div data-stellar-ratio="0.5" class="slide-image" 
                            style="background-image:url(images/nossas/IMG_20170806_142129.jpg);">
                        </div>
                          
                        <!-- SLIDE OVERLAY -->
                        <div class="slide-overlay" style="opacity:0.2"> </div>                                           
                    </li>    
                    <li>
                        <!-- SLIDE IMAGE -->
                        <div data-stellar-ratio="0.5" class="slide-image" 
                            style="background-image:url(images/nossas/biblia.jpeg);"></div>
                              
                        <!-- SLIDE OVERLAY -->
                        <div class="slide-overlay" style="opacity:0.2"> </div>
                    </li>
                    <li>
                        <!-- SLIDE IMAGE -->
                        <div data-stellar-ratio="0.5" class="slide-image" 
                            style="background-image:url(images/nossas/1003.jpg);">
                        </div>
                    
                        <!-- SLIDE OVERLAY -->
                        <div class="slide-overlay" style="opacity:0.2"> </div>
                    </li>  
                    <li>
                        <!-- SLIDE IMAGE -->
                        <div data-stellar-ratio="0.5" class="slide-image" 
                            style="background-image:url(images/nossas/cristais1_edit.jpeg);">
                        </div>
                    
                        <!-- SLIDE OVERLAY -->
                        <div class="slide-overlay" style="opacity:0.2"> </div>
                    </li>  
                    <li>
                        <!-- SLIDE IMAGE -->
                        <div data-stellar-ratio="0.5" class="slide-image" 
                            style="background-image:url(images/nossas/924.jpg);">
                        </div>
                    
                        <!-- SLIDE OVERLAY -->
                        <div class="slide-overlay" style="opacity:0.2"> </div>
                    </li> 
                    <li>
                        <!-- SLIDE IMAGE -->
                        <div data-stellar-ratio="0.5" class="slide-image" 
                            style="background-image:url(images/nossas/2250_edit.jpg);">
                        </div>
                    
                        <!-- SLIDE OVERLAY -->
                        <div class="slide-overlay" style="opacity:0.2"> </div>
                    </li> 

                  
                </ul><!-- END of MAIN SLIDER IMAGES -->                 
            </section><!-- ENF of MAIN SLIDER -->
            <?php
                $frases = array(
                    [
                        'text' => 'Nós amamos porque ele nos amou primeiro.', 
                        'author' => '1 João 4:19',
                        'active' => 'active'
                    ],
                    [
                        'text' => 'Quando penso em você, não posso deixar de sorrir, sabendo que você me completa.', 
                        'author' => 'Querido John',
                        'active' => ''
                    ],
                    [
                        'text' => 'O Amor é um ato de fé', 
                        'author' => 'Um amor para recordar',
                        'active' => ''
                    ],
                    [
                        'text' => 'Eu sinto o espanto, a beleza a alegria, o amor!', 
                        'author' => 'Um amor para recordar',
                        'active' => ''
                    ],
                    [
                        'text' => 'O Nosso amor é como o vento. Não posso ver, mas posso sentir.', 
                        'author' => 'Um amor para recordar',
                        'active' => ''
                    ],
                    [
                        'text' => 'Assim, eles já não são dois, mas sim uma só carne. Portanto, o que Deus uniu, ninguém separa.', 
                        'author' => 'Mateus 19:16',
                        'active' => ''
                    ],
                    [
                        'text' => 'Um cordão de três dobras não se rompe com facilidade.', 
                        'author' => 'Eclesiastes 4:12',
                        'active' => ''
                    ]
                );
            ?>

            <!--CONTENT SECTION-->
            <section id="content">
                    <div id="frases">
                        <div class="container content-page">
                            <div class="row">
                                <div class="col-md-12" data-wow-delay="0.2s">
                                    
                                    <div class="heart-divider">
                                        <span class="grey-line"></span>
                                        <i class="de-icon-heart red-heart"></i>
                                        <i class="de-icon-heart pink-heart"></i>
                                        <span class="grey-line"></span>
                                    </div>

                                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                        <!-- Bottom Carousel Indicators -->
                                        <ol class="carousel-indicators">
                                             <?php foreach ($frases as $i => $frase): ?>
                                            <li 
                                            data-target="#quote-carousel" 
                                            data-slide-to="<?= $i ?>" class="<?= $frase['active']?>">
                                            </li>
                                            <?php endforeach; ?>

                                        </ol>

                                        <!-- Carousel Slides / Quotes -->
                                        <div class="carousel-inner text-center">

                                            <!-- Quote 1 -->

                                            <?php foreach ($frases as $i => $frase): ?>
                                            <div class="item <?= $frase['active'] ?>">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">

                                                            <p><?=$frase['text']?></p>
                                                            <small><?=$frase['author']?></small>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <?php endforeach; ?>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include_once('localizacao.php') ?> 
            </section>
            
            <?php include_once('body-footer.php') ?> 
        </div>  <!-- END of SLIDEBAR CONTENT WRAPPER -->        
        <?php include_once('footer.php')?>   
    </body>
</html>