<?php

namespace Controller;

use Controller\BaseController;
use \Respect\Validation\Validator as v;
use \Respect\Validation\Exceptions\ValidationException;
use \Model\ArticleModel;

Class ArticleController extends BaseController {
    
    	public function ajoutArticle() {
		
		$user = $this->getUser();
		
		$datas = $user ? $user : array();
               
                
            if(!$user) {
				
                $this->redirectToRoute('login');

            } else{
				
		if( ! empty($_POST)) {
			
//			// on indique à respect validation que nos règles de validation
//			// seront accessibles depuis le namespace Validation\Rules
//			v::with("Validation\Rules");
//			
//		
//			// si l'utilisateur n'est pas connecté (mode insertion) 
//			// on ajoute les conditions "l'email ne doit pas déjà exister" et 
//			// "le nom d'utilisateur ne doit pas exister"
//			
//			
//			
//                            $validators = array(
//                                    'titre' => v::length(5,50)
//                                            ->alnum()
//                                            ->setName('Titre de l\'article'),
//
//
//
//                                    'contenu' => v::length(100,5000)
//                                            ->alnum()
//                                            ->setName('Mot de passe'),
//
//
//                                    'image' => v::optional(
//                                                    v::image()
//                                                    ->size('0', '1MB')
//                                                    ->uploaded()
//                                            ),
//                                            
//                                    'video' => v::optional(
//                                                    v::videoUrl()
//                                                    ->size('0', '1MB')
//                                                    ->uploaded()
//                                            )
//
//                            );

                            $datas = $_POST;
                            
                           
                            // on ajoute le chemin vers le fichier d'image qui a été uploadé
                            // (s'il y en a un)

                            if( !empty($_FILES['image']['tmp_name'])) {
                                    // je stocke en données à valider le chemin vers la localisation
                                    // temporaire de l'image
                                    $datas['image'] = $_FILES['image']['tmp_name'];
                            } else {
                                    // sinon je laisse ce champ vide
                                    $datas['image'] = '';
                            }

                            // localisation rapide de mes messages d'erreur (devrait être déclaré 
                            // dans un fichier à part)
//                            $trads = array(
//                                    'alnum' => '{{name}} ne doit contenir que des caractères alphanumériques',
//                                    'size' => '{{name}} doit avoir une taille comprise entre {{minSize}} et {{maxSize}}',
//                                    'upload' => '{{name}} n\'a pas été uploadé correctement',
//                                    'length' => '{{name}} doit avoir une longueur comprise entre {{minValue}} et {{maxValue}} caractères',
//                                    'noWhitespace' => '{{name}} ne doit pas contenir d\'espace vide',
//                                    'in' => '{{name}} doit être compris dans {{haystack}}',
//                                    'image' => '{{name}} doit être une image',
//                                    'usernameNotExists' => 'Votre {{name}} existe déjà',
//                                    'emailNotExists' => 'Votre {{name}} existe déjà'
//                            );
//                            // je parcours la liste de mes validateurs en récupérant aussi le
//                            // nom du champ en clé
//                            foreach ($validators as $field => $validator) {
//                                    // la méthode assert renvoie une exception de type NestedValidationException
//                                    // qui nous permet de récupérer le ou les messages d'erreur
//                                    // en cas d'erreur.
//                                    try{
//                                            // on essaye de valider la donnée
//                                            // si une exception se produit, c'est le bloc catch qui sera
//                                            // exécuté
//                                            $validator->check(isset($datas[$field]) ? $datas[$field] : '');
//                                    } catch (ValidationException $ex) {
//                                            $ex->setTemplate($trads[$ex->getId()]);
//                                            $mainMessage = $ex->getMainMessage();
//                                            $this->getFlashMessenger()->error($mainMessage);
//                                    }
//                            }
//
//                            if( ! $this->getFlashMessenger()->hasErrors()) {
//                                    // si on n'a pas rencontré d'erreur, on procède à l'insertion
//                                    // du nouvel utilisateur
//
//                                    // avant l'insertion, on doit faire 1 chose :
//                                    
                                    

                                                          
                                    // on déplace l'image vers le dossier image

                                    if( ! empty($_FILES['image']['tmp_name'])) {
                                            $initialImagePath = $_FILES['image']['tmp_name'];
                                            $imageNewName = md5(time() . uniqid());

                                            $targetPath = realpath('assets/uploads');

                                            move_uploaded_file($initialImagePath, $targetPath.'/'.$imageNewName);

                                            // on met à jour le nouveau nom de l'image dans $datas
                                            $datas['image'] = $imageNewName;
                                    } else {
                                            $datas['image'] = 'default_article.png';
                                    }
                                    
                                    // On passe dans l'insertion
                                    $articlesModel = new ArticleModel();

                                    unset($datas['send']);
                              
                             
                                    
                                    $this->getFlashMessenger()->success('Vous avez bien ajouter un article !');
                                    $articleInfos = $articlesModel->insert($datas);
                                    
                                    unset($_POST);
                                    $this->redirectToRoute('home');
                                    
//                            }
                        }
		}
		
		$this->show('article/article',  array('datas' => $datas));
        }
        
        public function supprimerArticle($id){
            
            $articleModel = New ArticleModel();
           
          $articleModel->delete($id);
           
           $this->redirectToRoute('home');
           
        }
               
        
        public function modifierArticle($id){
            
            
            if(!empty($_POST)){
                $datas = $_POST;
                $articleModel = New ArticleModel();
                // UPDATE utilisateurs SET ... WHERE id = ...
                $articleModel->update($datas, $user['id']);               
                unset($_POST);
            }else{
            /*$auth = new AuthentificationModel();
            $this->getFlashMessenger()->success('Vous avez bien mis à jour votre profil');
            if( ! $auth->refreshUser()) {
                    $this->getFlashMessenger()->warning('Nous n\'avons pas été en mesure de vous reconnecter');*/
            //}
            
                $articleModel = New ArticleModel();
                $article = $articleModel->find($id);
                
                $this->show('article/modifarticle', ['article' =>$article]);
            }
        }
                
        
}