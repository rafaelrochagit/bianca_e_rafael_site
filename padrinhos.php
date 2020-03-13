<!DOCTYPE html>
<html lang="en">
	<?php include_once('header.php')?>

  <?php
    $config['audioOpen'] = '';
    $config['audioIcon'] = 'fa fa-music';
  ?>
	<body class="slider-title-page">
    <?php include_once('body-head.php')?>  	
    <style>
      .photo-item {
          height: 225px;
      }

      .photo-item img {
        margin-top: 30px;
      }

      @media (max-width: 500px) {
        .page-title {
          padding-top: 70px;
        }

      }  

      #menu-icon.white a i {
          color: #333;
          font-size: 24px;
      }
    </style>
    
    <!-- SLIDEBAR CONTENT WRAPPER -->
  	<div id="sb-site">
      <?php include_once('body-header.php')?>   
          
      <!--CONTENT SECTION-->
      <section id="content">
          
          <!-- CONTAINER-1 -->
          <div class="container">            
              
            <!-- TITLE -->
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                
                    <div class="page-title">
                      <h1>Padrinhos & Madrinhas</h1>
                                                   
                      <div class="heart-divider">
                          <span class="grey-line"></span>
                          <i class="de-icon-heart pink-heart"></i>
                          <i class="de-icon-heart grey-heart"></i>
                          <span class="grey-line"></span>
                      </div>
                      <p>
                        Obrigado a cada padrinho e madrinha por somarem em nossas vidas como namorados, noivos e futuramente como casados. Vocês merecem esse lugar de honra e destaque em nosso grande dia. Vocês são muitos &#128514;, mas acreditem, foram escolhidos a dedo.
                      </p>
                      <p>
                        &#128525; Amamos cada um de vocês! &#128525; 
                      </p>
                      <p>
                       “Em todo o tempo ama o amigo e para a hora da angústia nasce o irmão.” <br> Pv 17:17
                      </p>
                      <p>
                        Todos os nossos padrinhos e madrinhas são importantes para nós, logo, eles não estão apresentados aqui por ordem de importância ou qualquer coisa do tipo, pelo contrário, toda vez que você atualizar essa página a ordem das fotos serão modificadas aleatoriamente, aparte F5 e comprove &#128514; &#128514; &#128514;.
                      </p>
                    </div>
                    
                </div>
            </div><!-- END of TITLE -->                
                
          </div><!-- END of CONTAINER-1 -->
           
            
          <!-- CONTAINER-2 -->
          <div class="container">
                <div class="row">                                            
                  <div class="col-md-offset-1 col-md-10">
                        
                      <!-- CONTAINER-FLUID -->
                      <div class="container-fluid">
                          <?php
                            $padrinhos = array(
                              ['img' => 'kleberson-e-rebeka.jpeg', 'nome' => 'Kleberson e Rebeka'],
                              ['img' => 'danneyf-e-lulu.jpeg', 'nome' => 'Danneyf e Heloísa'],
                              ['img' => 'diego.jpeg', 'nome' => 'Diego'],
                              ['img' => 'erick-e-ana.jpeg', 'nome' => 'Erick e Ana'],
                              ['img' => 'esdras-e-leticia.jpeg', 'nome' => 'Esdras e Letícia'],
                              ['img' => 'kalebe-e-fran.jpeg', 'nome' => 'Kalebe e Francielle'],
                              ['img' => 'manasses-e-vania.jpeg', 'nome' => 'Manassés e Vânia'],
                              ['img' => 'marcus-e-larissa.jpeg', 'nome' => 'Marcus e Larissa'],
                              ['img' => 'matheus-e-gaby.jpeg', 'nome' => 'Matheus e Gabriella'],
                              ['img' => 'paulo.jpeg', 'nome' => 'Paulo'],
                              ['img' => 'thiago-e-mirian.jpeg', 'nome' => 'Thiago e Mirian'],
                              ['img' => 'tito-e-elisa.jpeg', 'nome' => 'Tio Francisco e Tia Elisa'],
                              ['img' => 'ze.jpeg', 'nome' => 'Thiago'],
                              ['img' => 'issara.jpeg', 'nome' => 'Issara'],
                              ['img' => 'milton-e-thais.jpeg', 'nome' => 'Tio Milton e Tia Thaís'],
                              ['img' => 'jessyca.jpeg', 'nome' => 'Jéssyca'],
                              ['img' => 'milena.jpeg', 'nome' => 'Milena'],
                              ['img' => 'carol.jpeg', 'nome' => 'Carol'],
                              ['img' => 'rafael.jpeg', 'nome' => 'Rafael'],
                              ['img' => 'samura.jpeg', 'nome' => 'Samura'],
                              ['img' => 'luciano-e-juliana.jpeg', 'nome' => 'Luciano e Juliana'],
                              ['img' => 'gabriel-e-daniele.jpeg', 'nome' => 'Gabriel e Daniele'],
                              ['img' => 'anderson.jpeg', 'nome' => 'Anderson'],
                              ['img' => 'pedro-e-camilla.jpeg', 'nome' => 'Pedro e Camilla'],
                              ['img' => 'pericles.jpeg', 'nome' => 'Péricles'],
                              ['img' => 'marco-e-gloria.jpeg', 'nome' => 'Tio Marco e Prima Glória'],
                              ['img' => 'beatriz.jpeg', 'nome' => 'Beatriz'],
                              ['img' => 'elaine-e-guga.jpeg', 'nome' => 'Tia Elaine e Guga'],
                              ['img' => 'vinicius-e-taiana.jpeg', 'nome' => 'Vinícius e Taiana'],
                              ['img' => 'jessica.jpeg', 'nome' => 'Jéssica'],
                              ['img' => 'fernanda.jpeg', 'nome' => 'Fernanda'],
                              ['img' => 'jonathas.jpeg', 'nome' => 'Jonathas'],
                            );

                           shuffle($padrinhos);
                           shuffle($padrinhos);
                          ?>
                          <!-- BRIDESMAID -->
                            <div class="row">
                              
                              <?php foreach($padrinhos as $p) : ?>
                                <div class="bridesmaid-wrapper col-md-4 col-sm-4">
                                    
                                  <!--PHOTO-ITEM-->
                                  <div class="photo-item animation fadeIn">
                  
                                      <!--PHOTO-->
                                        <img src="images\padrinhos\<?=$p['img']?>" alt="" class="hover-animation image-zoom-in">
                                              
                                        <!--PHOTO OVERLAY-->
                                      <div class="layer wh100 hidden-black-overlay hover-animation fade-in">
                                      </div><!--END of PHOTO OVERLAY-->
                                                                              
                                      <!--ICON LINK-->
                                      <div class="layer wh100 hidden-link hover-animation delay1 fade-in">
                                        <div class="alignment">
                                          <div class="v-align center-middle">
                                                    
                                                <span class="de-button outline medium">
                                                    <?= $p['nome'] ?>
                                                </span>
                                                      
                                            </div>
                                          </div>
                                      </div><!--END of ICON LINK-->
                
                                  </div><!--END of PHOTO-ITEM--> 
                                          
                                  <!-- TITLE & EXCERPT -->
                                  <div class="title-excerpt animation fadeIn text-center">
                                    <div class="de-icon circle very-small-size custom-heart-icon">
                                      <i class="de-icon-heart"></i>
                                    </div>
                                    <h4><a href="#">- <?= $p['nome'] ?> -</a></h4>
                                      <p></p>
                                  </div>
                                  <!-- END of TITLE & EXCERPT -->
                                </div>
                              <?php endforeach; ?>

                            </div> <!-- END of BRIDESMAID -->
                          
                      </div><!-- END of CONTAINER FLUID -->
                    
                  </div>                     
                </div>                  
          </div><!-- END OF CONTAINER-2 -->
            
      </section><!-- END OF CONTENT SECTION -->
          
      <?php include_once('body-footer.php') ?>    
   	</div>  
    <!-- END of SLIDEBAR CONTENT WRAPPER -->         
        
            
	<?php include_once('footer.php')?>   
        
	</body>
</html>