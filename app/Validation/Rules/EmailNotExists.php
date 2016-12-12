<?php
namespace Validation\Rules;
/**
 * Description of UsernameNotExists
 * Cette classe sert à étendre les fonctionnalités de la bibliothèque respect/validation
 * en y ajoutant un nouveau validateur
 * @author Admin
 */

use Respect\Validation\Rules\AbstractRule;
use \Model\UtilisateursModel;

class EmailNotExists extends AbstractRule {
	
	public function validate($email) {
		$userModel = new UtilisateursModel();
		return ! $userModel->emailExists($email);
	}
}
