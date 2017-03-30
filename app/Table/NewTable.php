<?php
namespace App\Table;
use Core\Table\Table;
/**
* 
*/
class NewTable extends Table
{
	public function newsaff()
	{
		return $this->query(" SELECT *
								categories.titre as categories
								FROM news
								LEFT JOIN categories
									ON category_id = categories.id
								ORDER BY news.date DESC
							");
	}
	public function find($id)
	{
		return $this->query(" SELECT *
									categories.titre as categories
								FROM articles
								LEFT JOIN categories
									ON category_id = categories.id
								WHERE news.id = ?
							", [$id], true);
	}
	public function lastByCategory($category_id, $one=false)
	{
		return $this->query(" SELECT *
									categories.titre as categories
								FROM news
								LEFT JOIN categories
									ON category_id = categories.id
								WHERE categories.id = ?
								ORDER BY news.id DESC
							", [$category_id], $one);
	}
}
	