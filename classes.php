</<?php 

	class user{
		private $UserId, $UserName, $UserMail, $UserPassword;

		public function getUserId(){
			return $this->UserId;
		}
		public function setUserId($UserId){
			$this->UserId=$UserId;
		}

		public function getUserName(){
			return $this->UserName;
		}
		public function setUserName($UserName){
			$this->UserName=$UserName;
		}

		public function getUserMail(){
			return $this->UserMail;
		}
		public function setUserMail($UserMail){
			$this->UserMail=$UserMail;
		}

		public function getUserPassword(){
			return $this->UserPassword;
		}
		public function setUserPassword($UserPassword){
			$this->UserPassword=$UserPassword;
		}

		public function InsertUser(){
			include "conn.php";
			$req=$bdd->prepare("INSERT INTO users(UserName,UserMail,UserPassword) VALUES (:UserName,:UserMail,:UserPassword)");

			$req->execute(array(
				'UserName'=>$this->getUserName(),
				'UserMail'=>$this->getUserMail(),
				'UserPassword'=>$this->getUserPassword()
			));
		}
		public function UserLogin(){
			include "conn.php";
			$req=$bdd->prepare("SELECT * FROM users WHERE UserMail=:UserMail AND UserPassword=:UserPassword");

			$req->execute(array(
				'UserMail'=>$this->getUserMail(),
				'UserPassword'=>$this->getUserPassword()
			));
			if($req->rowCount()==0){
				header("Location:index.php?error=1");
				return false;
			}else{
				while($data=$req->fetch()){
					$this->setUserId($data['UserId']);
					$this->setUserName($data['UserName']);
					$this->setUserMail($data['UserMail']);
					$this->setUserPassword($data['UserPassword']);
					header("Location:Home.php");
					return true;
				}
			}
		}
	}

 ?>