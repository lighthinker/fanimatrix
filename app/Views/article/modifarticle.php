<?php $this->layout('layout', ['title' => 'Rédaction d\'un article']) ?>

<?php $this->start('main_content') ?>
    <video autoplay loop poster="backvid.jpg" id="vid">
        <source src="backvid.webm" type="video/webm">
        <source src="backvid.mp4" type="video/mp4">
    </video>

        <!-- <div class="colorAll"> -->	

    <main>

            <section id="postArt">

                    <h2>Publie ton article</h2>
                    <?php var_dump('voici l\'id de l\'article: '.$article['id']); ?>
                    <?= $this->url('modification_article',['id'=>$article['id']])?>
                            
                        
                            <form action="<?= $this->url(('modification_article'), ['id'=>$article['id']]) ?>" method="POST" enctype="multipart/form-data">
                                    
                                    <p>
                                        <input type="hidden" name="id_user" id="id" value="<?= $w_user['id'] ?>"/>
                                    </p>
                                    
                                    <p>
                                        <label for="titre_article">image :</label> 
                                        <input type="file" name="image" id="inp" accept="image/*" >
                                    </p>


                                    <p>
                                        <label for="titre_article">Titre :</label>      
                                        <input type="text" name="titre" id="titre" <?php if (!empty($article)) {?>value="<?php echo $article['titre']?>"<?php }?>> 
                                    </p>

                                    <p>
                                        <label for="titre_article">contenu :</label>
                                        <label for="contenu_article"></label>
                                        <textarea rows="30" cols="70" id="textArea" placeholder="Je tape mon contenu ici !" name="contenu"><?php if (!empty($article)) { echo $article['contenu'];}?></textarea>
                                    </p>

                                    <p>
                                        <label for="titre_article">video :</label>
                                        <input type="file" id="inp2" name="video" accept="video/*">
                                    </p>

                                    <p>
                                        <input type="submit" class="button" value="Modifier" name="send"/>
                                    </p>

                            </form>

            </section>

    </main>

<?php $this->stop('main_content') ?>


               
<?php $this->start('link_href')?>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style_article.css') ?>">
<?php $this->stop('link_href')?>
 
                
  
                
<?php $this->start('script')?>
    <script>
    document.createElement('video');
    </script>
<?php $this->stop('script')?>
		


		
					


			

			

			



			


			
										
