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
               
		$this->show('firstPage/choosePill');
	}
}