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

                                        <form action="<?= $this->url($w_current_route) ?>" method="POST" enctype="multipart/form-data">

                                                <p>
                                                        <input type="file" name="pic" id="inp" accept="image/*">
                                                </p>

                                                <p>
                                                <label for="titre_article">Titre :</label>
                                                <input type="text" name="titre_article" id="mot_de_passe" />
                                                </p>

                                                <p>
                                                <label for="contenu_article"></label>
                                                <textarea rows="4" cols="50" id="textArea" placeholder="Je tape mon contenu ici !"></textarea>
                                                </p>

                                                <p>
                                                <input type="file" id="inp2" name="pic" accept="video/*">
                                                </p>

                                                <p>
                                                <input type="submit" class="button" value="Valider"/>
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
		


		
					


			

			

			



			


			
										
