<?php
namespace App\Entity;
use Core\Entity\Entity;
/**
* 
*/
class MembreEntity extends Entity
{

		public function getUrl()
	{
		return 'membre.php?p=profil&id='.$this->id;
	}


	public function getAge()
	{
		return (int)((time()-strtotime($this->first_day))/(60*60*24*365));
	}
	
}