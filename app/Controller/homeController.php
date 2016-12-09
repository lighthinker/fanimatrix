<?php

namespace Controller;

use Model\ArticleModel;
use Model\CommentaireModel;


class DefaultController extends BaseController
{
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
                $articlesModel = new ArticleModel();
             
                
                $commentairesModel = new CommentaireModel();
                
                $commentaires = $commentairesModel->findAll();
                $articles = $articlesModel->findAll();
                
		$this->show('home/home', ['articles' => $articles, 'commentaires' => $commentaires]);
	}
}