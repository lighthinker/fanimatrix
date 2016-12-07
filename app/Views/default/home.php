<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <h2>Page accueil</h2>
    <a href='<?php echo $this->url('utilisateur_connexion'); ?>'>Connexion</a>
    <a href='<?php echo $this->url('utilisateur_inscription'); ?>'>Inscription</a>
<?php $this->stop('main_content') ?>

<?php $this->start('liste_articles') ?>
   <ul id="listing_articles">
        <!-- On parcourre les titres , contenues et les avatars des articles pour afficher dans la page home -->
        <?php foreach ($articles as $article) : ?>
                <!-- ici $articles est équivalent à $articles[$i] dans la boucle for -->
                <!-- mon href va pointer vers une nouvelle page (article.php)
                   dans laquelle je vais pouvoir récupérer ma variable "id" 
                        grâce à $_GET['id']
                -->
                <li> 
                        <a href="<?php echo $this->url('see_article', array('id' => $article['id'])) ?>">
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
<?php $this->stop('liste_articles') ?>
