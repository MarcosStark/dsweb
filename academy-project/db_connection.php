<?php

class db {

	//host
	private $host = 'localhost';

	//usuario
	private $usuario = 'root';

	//senha
	private $senha = '';

	//banco de dados
	private $database = 'academy_bd';

	public function conecta_mysql(){

		//criar a conexao
   		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utf8');

		//verficar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
<<<<<<< HEAD
		}
=======
		} 
>>>>>>> c154d83bccfce98c03242df30c566c65589571e7

		return $con;
	}

}

?>

