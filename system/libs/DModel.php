<?php 
class DModel{

	protected $db = array();

	public function __construct(){
		$connect = 'mysql:dbname=dacs; host=localhost; charset=utf8';
		$user = 'trunghieu';
		$pass = '261102';
		$this -> db = new Database($connect , $user,$pass);
	}

}
?>