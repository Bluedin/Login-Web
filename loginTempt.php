<?php
	require_once 'config.php';

 if(!empty($_POST)){
 	if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])){
 		$member = new member;
 		$member->_username = $_POST['user'];
 		$member->_password = $_POST['pass'];
 	}
 }
 	

 	class member{
 		private $_username;
 		private $_password;
 		private $_mail;

 		public function register(){
 			try{
	 			$stmt = singleton::getInstance()->prepare(<<<SQL 
	 				INSERT INTO member (username, password, mail) 
	 				VALUES (:_username, :_password, :_mail)
SQL
	 			);
	 			$stmt->bindValue(':_username', 		this::$_username, 		PDO::PARAM_STR;
			    $stmt->bindValue(':_password',      this::$_password,       PDO::PARAM_STR);
			    $stmt->bindValue(':_mail',        	this::$_mail,        	PDO::PARAM_STR);

			    $stmt->execute();
	 		}
	 		catch(PDOException $e){
		    	printf("Erreur %d : %s\n", $e->getCode(), $e->getMessage());
		    }
		}
 		public function check(){
 			try{
 				$stmt = singleton::getInstance()->prepare(<<<SQL
 					SELECT username, password
 					FROM member
 					WHERE username = :_username
SQL
				);
 				$stmt->bindValue(':_username', this:$username, PDO::PARAM_STR);

 				$stmt->execute();

 				if($row['password'] == this::$_password){
 					header('Connected.html');
 					exit();
 				}
 			}
 			catch(PDOException $e){
				printf("Erreur %d : %s\n", $e->getCode(), $e->getMessage());
			}
 		}
 	}