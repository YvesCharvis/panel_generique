<?php
namespace App\Entity;
use Core\Entity\Entity;
/**
* 
*/
class MembreEntity extends Entity
{

	public function getAge()
	{
		return (int)((time()-strtotime($this->first_day))/(60*60*24*365));
	}
	
}