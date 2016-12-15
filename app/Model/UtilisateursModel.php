<?php

/**
 * Description of UsersModel
 *
 * @author Admin
 */

namespace Model;
use W\Model\UsersModel ;
use W\Model\ConnectionModel;

class UtilisateursModel extends UsersModel{
	
    public function getRole($id){
        
             $app = getApp();

		$sql = 'SELECT role FROM ' . $this->table . ' WHERE id = :id_user';
			  

		$dbh = ConnectionModel::getDbh();
		$sth = $dbh->prepare($sql);
		$sth->bindValue(':id_user', $id);
		
		
		if($sth->execute()){
			$foundArticles = $sth->fetch();
			if($foundArticles){
				return $foundArticles;
			}
		}

		return false;
    }
    
}
