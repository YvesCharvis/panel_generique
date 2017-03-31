<?php
namespace Core\Auth;
use Core\Database\Database;
/**
* classe pour la connexion au site via une base de donné
*/
class DBMembre 
{


	function __construct(Database $db)
	{
		$this->db = $db;
	}

	public function loginM($username, $password)
	{
		$user = $this->db->prepare("SELECT * 
									FROM membres 
									WHERE name = ?",
									[$username], null, true);



		
		if($user){
			if ($user->password === sha1($password)) {
				$_SESSION['Mbr'] = $user->id;
				return true;
			}
		}


		return false;
	}


	public function connectM()
	{
		return isset($_SESSION['Mbr']);
	}

	public function getUserId()
	{
		if ($this->connectM()) {
			return $_SESSION['Mbr'];
		}else{
			return false;
		}

	}
}