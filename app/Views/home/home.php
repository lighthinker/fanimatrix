<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


 	</div>
            
		<div class="">	

			<main>
                            <?php foreach ($articles as $article) : ?>
				<section id="articles">

					<h2><?php echo $this->e($article['titre']); ?></h2
				
					<article id="listing_articles" class="black_background"><a href="<?php $this->url('default_home', array('id' => $article['id'])) ?>">
                                                
						<img src="<?php echo $this->e($article['image']); ?>"></a>
						<p><?php echo $this->e($article['contenu']); ?>
						</p>
					</article>
                            <?php endforeach; ?>
    
       
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
                    <a class="button" href="<?php echo $this->url('add_article') ?>">
                            Rédiger un article
                    </a>
            </li>	
            <?php endif; ?> </aside>

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
                                    <a class="button" href="<?php echo $this->url('add_article') ?>">
                                            Rédiger un article
                                    </a>
                            </li>	
                    <?php endif; ?> 

                    <li>
                </ul>
            </aside>

 <?php $this->stop('side_bar') ?>      
    
    
    
