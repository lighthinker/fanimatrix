<?php

namespace Model;

use W\Model\Model;
use W\Model\ConnectionModel;


class ArticleModel Extends Model
{
    public function  getArticlesByUser($id_user = 1){
      
        $app = getApp();

		$sql = 'SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user';
			  

		$dbh = ConnectionModel::getDbh();
		$sth = $dbh->prepare($sql);
		$sth->bindValue(':id_user', $id_user);
		
		
		if($sth->execute()){
			$foundArticles = $sth->fetchAll();
			if($foundArticles){
				return $foundArticles;
			}
		}

		return false;
   }
   
        public function getValidatedArticle(){
         
       		$sql = 'SELECT * FROM ' . $this->table . ' WHERE statut= :statut';
			  

		$dbh = ConnectionModel::getDbh();
		$sth = $dbh->prepare($sql);
		$sth->bindValue(':statut', 'valide');
		
		
		if($sth->execute()){
			$foundArticles = $sth->fetchAll();
			if($foundArticles){
				return $foundArticles;
			}
		}

		return false;
   }
   
}
