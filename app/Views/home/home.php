<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>



 	<section id="articles">

                                    <h2>Articles</h2>
                                        
                                      <?php foreach ($articles as $article) : ?>
                                            <article class="black_background"><a href="#">                                   
                                                <img src="<?php echo $this->assetUrl($this->e('uploads/'.$article['image'])); ?>"></a>
                                                <a href="#"><h3><?php echo $this->e($article['titre']); ?></h3></a>
                                                <p><?php echo $this->e($article['contenu']); ?>
                                                </p>
                                            </article>
                                        <?php endforeach; ?>
    
				
					<article class="black_background"><a href="article_sony.html">
						<img src="img/matrixselfie.jpg"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. 
						</p>
					</article>

					<article class="black_background"><a href="">
						<img src="img/matrix1.jpg"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.
						</p>
					</article>

					<article class="black_background"><a href="">
						<img src="img/matrix2.jpg"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. 
						</p>
					</article>

					<article class="black_background"><a href="">
						<img src="img/matrix3.jpg"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.
						</p>
					</article>

					<article class="black_background"><a href="">
						<img src="img/trinity.png"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. 
						</p>
					</article>

					<article class="black_background"><a href="">
						<img src="img/choixpilule.png"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.
						</p>
					</article>                                  

				</section>
			
                 
       
        <?php if($w_user): ?>
        <li>
                <a class="button" href="<?php echo $this->url('add_article') ?>">
                        Rédiger un article
                </a>
        </li>	
        <?php endif; ?>
        
           </aside>
            
<?php $this->stop('main_content') ?>

        
               
 <?php $this->start('side_bar') ?>      
        <aside>    
            <ul id="recentComments">
            <!-- On parcourre les titres , contenues et les avatars des articles pour afficher dans la page home -->
            <?php foreach ($commentaires as $commentaire) : ?>
                    <!-- ici $articles est équivalent à $articles[$i] dans la boucle for -->
                    <!-- mon href va pointer vers une nouvelle page (article.php)
                       dans laquelle je vais pouvoir récupérer ma variable "id" 
                            grâce à $_GET['id']
                    -->
                    <li> 
                            <a href="<?php echo $this->url('default_home', array('id' => $commentaire['id'])) ?>">
                                    <?php echo $this->e($commentaire['contenu']); ?></a> 
                    </li>
            <?php endforeach; ?>

            <?php if($w_user): ?>
            <li>
                    <!--<a class="button" href="<?php echo $this->url('add_article') ?>">-->
                            <!--Rédiger un article-->
                    <!--</a>-->
            </li>	
            <?php endif; ?>
        </aside>

            <li>    
            </ul>
            </aside>
                
            <aside>    
                <ul id="recentArticlesListing">
                    <!-- On parcourre les titres , contenues et les avatars des articles pour afficher dans la page home -->
                    <?php foreach ($articles as $article) : ?>
                            <!-- ici $articles est équivalent à $articles[$i] dans la boucle for -->
                            <!-- mon href va pointer vers une nouvelle page (article.php)
                               dans laquelle je vais pouvoir récupérer ma variable "id" 
                                    grâce à $_GET['id']
                            -->
                            <li> 
                                    <a href="<?php echo $this->url('default_home', array('id' => $article['id'])) ?>">
                                            <?php echo $this->e($article['titre']); ?></a> 
                            </li>
                    <?php endforeach; ?>

                    <?php if($w_user): ?>
                            <li>
<!--                                    <a class="button" href="<?php// echo $this->url('add_article') ?>">
                                            Rédiger un article
                                    </a>
                            </li>	-->
                    <?php endif; ?> 

                    <li>
                </ul>
            </aside>

 <?php $this->stop('side_bar') ?>      
    
    
    
