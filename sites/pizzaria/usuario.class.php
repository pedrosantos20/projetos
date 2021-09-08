<?php

    class usuario{
        public function login($email, $senha){
            global $pdo;

            $sql = "SELECT * FROM cliente WHERE email = :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                $int = (int)$dado['CPF'];
                $_SESSION['user'] = $int;

                return true;
            } else {
                return false;
            }
						
        }
		public function logged($id){
			global $pdo;
			$array = array();
			
			$sql = "SELECT Nome FROM cliente WHERE CPF = :CPF";
			$sql = $pdo->prepare($sql);
			$sql->bindValue("CPF",$id);
			$sql->execute();
			if($sql->rowCount() > 0){
				
				$array = $sql->Fetch();
			}
			return $array;
		}
		
    }

?>