<!DOCTYPE html>
<html lang="en">
	<?php include_once('header.php')?>

	<body class="slider-title-page">
    <?php include_once('body-head.php')?>  	
        
    
    <!-- SLIDEBAR CONTENT WRAPPER -->
  	<div id="sb-site">
      <?php include_once('body-header.php')?>   
      <?php include_once('historiaContent.php')?>   

        <style>
          
        </style>
     	<!-- MAIN SLIDER -->
    	<section id="main-slider" class="" style="height:700px">      	
          <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
        	<div class="slide-title-outter-wrapper">
            	
          	<!-- MAIN SLIDER TITLE INNER WRAPPER -->
    				<div class="slide-title-inner-wrapper">
                                	
    					<!-- TITLE 1  -->
    					<div class="slide-title align-bottom">
                                    	
    						<div class="container">
                  	<div class="row">
                      
                  		<div class="col-md-offset-2 col-md-8">                                
                          	<div class="page-title">
                              
                            	<div class="de-icon circle outline light large-size aligncenter animation fadeInUp">
              								  <i class="de-icon-heart"></i>
        							        </div>
                              
                          		<h1 class="animation fadeInUp"><?=$comoSeConheceram['title']?></h1>
                              
                          		<div class="heart-divider animation fadeInUp">
                              		<span class="white-line"></span>
                                  	<i class="de-icon-heart pink-heart"></i>
                                  	<i class="de-icon-heart white-heart"></i>
                                  	<span class="white-line"></span>
                           		</div>
                             
                              	<p class="animation delay1 fadeInUp">
                              		<?=$comoSeConheceram['text']?>
                              	</p>
                                  
                            </div>                                    
      		            </div>
                                    
    						    </div>
    						</div>
                                        
    					</div>
                                    
    				</div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->
    			</div> 
          <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->
                         
          <!-- MAIN SLIDER IMAGES -->
    			<div class="slides">
      				<!-- SLIDE IMAGE -->
            	<div data-stellar-ratio="0.5" class="slide-image" 
              style="background-image:url(images/nossas/2227_edit.jpg); background-position:top">
              </div>
                      
              <!-- SLIDE OVERLAY -->
              <div class="slide-overlay" style="opacity:0.25"> </div>                               
      		</div>	
          <!-- END of MAIN SLIDER IMAGES -->
  	  </section>
      <!-- ENF of MAIN SLIDER -->
          
      <!--CONTENT SECTION-->
      <section id="content">
  			
              <!-- CONTAINER-1 -->
		        <div class="container">
              
                  <div class="row">
                        <div class="col-md-12 text-center">
                      	
                          <div class="page-subtitle animation fadeIn">
            				        <h2><?=$namoro['title']?></h2>
                        		<div class="heart-divider">
                       			  <span class="grey-line"></span>
                           		 <i class="de-icon-heart pink-heart"></i>
                            	 <i class="de-icon-heart grey-heart"></i>
                            	 <span class="grey-line"></span>
                      		  </div>
                          </div>
                          
  			                </div>
                  </div>
                      
                  
                  <div class="row">
                  	   <div class="col-md-offset-1 col-md-5 animation fadeIn text-justify">
                          <p>
                          	<?= $namoro['text1']?>
  						            </p>
                          <p>
                          	<?= $namoro['text2']?> 
  						            </p>                            
                        </div>
                        <div class="col-md-5 animation fadeIn text-justify">
                        	<p>
                            <?= $namoro['text3']?> 
  						            </p>
                          <p>
                            <?= $namoro['text4']?>
  						            </p>                            
                        </div>
                 	</div>

            </div> <!-- END of CONTAINER-1 -->

            <!-- PARALLAX  -->
            <div class="divider-wrapper">
            	<div class="image-divider fixed-height" 
              style="background-image:url(images/nossas/bjo.jpg); 
              height:760px" data-stellar-background-ratio="0.5">
                	<div class="divider-overlay" style="background:grey;opacity:0.7"></div>
                
                    <!-- Use Center Middle Alignment to align middle the content for fixed-height parallax -->
                    <div class="alignment"> 
                    	<div class="v-align center-middle">                  	
                    	
                      	<!-- CONTAINER -->	
                    		<div class="container">        
                                     	 
                          <!--TITLE & TEXT-->           
                    			<div class="row">
                      			<div class="col-md-offset-2 col-md-8">                                        
                            				
              								<div class="de-icon circle outline light large-size aligncenter animation fadeInUp">
                  								<i class="de-icon-quote-1"></i>
                							</div>
                                              
                              <h2 class="animation fadeInUp"><?=$pedido['title'] ?></h2>
                                              
                              <div class="heart-divider animation fadeInUp">
                            		<span class="white-line"></span>
                                	<i class="de-icon-heart pink-heart"></i>
                                	<i class="de-icon-heart white-heart"></i>
                                	<span class="white-line"></span>
                            	</div>    
                                              
                              <p class="animation delay1 fadeInUp">
                            		<?= $pedido['text']?> 
                            	</p>
                         
                     				</div>
                     			</div>
                          <!-- END of TITLE & TEXT--> 
                                
                     		</div> 
                        <!-- END of CONTAINER -->
                     
                     	</div>
                   	</div><!-- END of Center Middle Alignment -->
                    
              </div>
            </div><!-- END of PARALLAX -->
              
           
              <!-- CONTAINER-2 -->
              <div class="container">
              
                  <div class="row">
                      <div class="col-md-12 text-center">
                			
                	        <div class="page-subtitle animation fadeIn">	
                  			     <h2><?=$casamento['title']?></h2>
                        		<div class="heart-divider">
                       			<span class="grey-line"></span>
                           		<i class="de-icon-heart pink-heart"></i>
                              	<i class="de-icon-heart grey-heart"></i>
                              	<span class="grey-line"></span>
                      		</div>
                     		</div>
                          
                    	</div>
                 	</div>
                          
                  <div class="row">
                  	<div class="col-md-12 text-center animation fadeIn">
                      	<p>
                          <?=$casamento['text']?>
  						          </p>                        
                    </div>
                	</div>
                  
                  <div class="row">                        
                  	<div class="" style="
                    background: grey; opacity:0.4; padding:0px; width: 330px; margin: 0 auto;">
                      	<img src="images\nossas\abraco1.jpg" alt="" class="fullwidth animation fadeIn">
                    </div>
                  </div>
                  
                  <!-- <div class="row">                        
                      <div class="col-md-12 text-center" style="margin:100px 0 0 0">
                      	<h2 class="animation fadeIn">Amor de <span style="color:#f0394d">Deus</span></h2>
                      </div>
                  </div>  -->
              </div><!-- END of CONTAINER-2 -->               
      </section>
          
      <?php include_once('body-footer.php') ?>    
   	</div>  
    <!-- END of SLIDEBAR CONTENT WRAPPER -->         
        
            
	<?php include_once('footer.php')?>   
        
	</body>
</html>