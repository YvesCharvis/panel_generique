<?php
namespace App\Table;
use Core\Table\Table;
/**
* 
*/
class MembreTable extends Table
{
	
	public function last()
	{
		return $this->query("SELECT membres.first_name,
									membres.last_name,
									membres.first_day,
									membres.adress_mail,
									membres.password,
									membres.phone,
									membres.id									
							   FROM membres");
	}


}

