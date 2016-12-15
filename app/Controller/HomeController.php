<?php

namespace Controller;

use Model\ArticleModel;
use Model\CommentaireModel;
use Controller\BaseController;
use \Model\UtilisateursModel;


class HomeController extends BaseController
{
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
                $articlesModel = new ArticleModel();
                            
                $commentairesModel = new CommentaireModel();
                
                $commentaires = $commentairesModel->findAll();
                
                $role_utilisateur = new UtilisateursModel;
                
                $myUser = $this->getUser();
                
                $userRole = $role_utilisateur->getRole($myUser['id']);
                
                
                if( $userRole['role'] == 'architecte'){
                    $articles = $articlesModel->findAll();
                } else{
                    $articles = $articlesModel->getValidatedArticle();
                }
                
		$this->show('home/home', ['articles' => $articles, 'commentaires' => $commentaires]);
	}
}