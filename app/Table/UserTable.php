<?php
namespace App\Table;
use Core\Table\Table;
/**
* 
*/
class UserTable extends Table
{
	
	public function AllAdmin()
	{
		return $this->query("SELECT * FROM users");
	}


}

