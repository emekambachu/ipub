<?php

class Category extends dbObject{
	
	protected static $db_table = "categories";
	protected static $db_table_fields = array('name');
	
	public $id;
	public $name;
	
}

?>