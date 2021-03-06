<?php
namespace System\DB;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

/*Method construct of Database*/
abstract class Database
{

	private function __construct()
	{

	}

	/*Evita que a classe seja clonada*/
	private function __clone()
	{

	}

	/*Método que destroi a conexão com banco de dados e remove da memória todas as variáveis setadas*/
	public function __destruct() {
		$this->disconnect();
		foreach ($this as $key => $value) {
			unset($this->$key);
		}
	}

	private static $dbtype   = "mysql";
	private static $host     = "localhost";
	private static $port     = "";
	private static $user     = "sistema_c";
	private static $password = "cl159ss";
	private static $db       = "sistema_c";

	/*Metodos que trazem o conteudo da variavel desejada
	@return   $xxx = conteudo da variavel solicitada*/
	private function getDBType() {return self::$dbtype;}
	private function getHost() {return self::$host;}
	private function getPort() {return self::$port;}
	private function getUser() {return self::$user;}
	private function getPassword() {return self::$password;}
	private function getDB() {return self::$db;}

	private function connect() {

		$stream  = new StreamHandler(__DIR__.'/logger_app.log', Logger::DEBUG);
		$firephp = new FirePHPHandler();
		$logger  = new Logger('loggers');

		$logger->pushHandler($stream);
		$logger->pushHandler($firephp);

		try
		{
			$this->conexao = new \PDO($this->getDBType().":host=".$this->getHost().";port=".$this->getPort().";dbname=".$this->getDB(), $this->getUser(), $this->getPassword());
			$this->conexao->exec("set names utf8");
		}
		catch (PDOException $i) {
			//se houver exceção, exibe
			$logger->error( $i->getMessage() );
			die("Erro: <code>".$i->getMessage()."</code>");
		}

		return ($this->conexao);
	}

	private function disconnect() {
		$this->conexao = null;
	}

	/*Método select que retorna um VO ou um array de objetos*/
	public function selectDB($sql, $params = null, $class = null) {

		$stream  = new StreamHandler(__DIR__.'/logger_app.log', Logger::DEBUG);
		$firephp = new FirePHPHandler();
		$logger  = new Logger('loggers');

		$logger->pushHandler($stream);
		$logger->pushHandler($firephp);
		$msn = 'O método Select gerou uma excessão ao acessar a base de dados';


		$query = $this->connect()->prepare($sql);

		if (!$query->execute($params)) {
			$GETerror = $query->errorInfo();
			for ($i=0; $i < count($GETerror) ; $i++) {
				$logger->error($msn."::".$GETerror[$i]);
			}
			throw new \Exception($msn." - ".$query->errorInfo());
		}else{
			$logger->info('O script SQL '.$sql.' Foi executado pelo Usuário X');
		}


		$query->execute($params);

		if (isset($class)) {
			$rs = $query->fetchAll(\PDO::FETCH_CLASS, $class) or die(print_r($query->errorInfo(), true));
		} else {
			$rs = $query->fetchAll(\PDO::FETCH_OBJ)  ;
		}
		self::__destruct();
		return $rs;
	}

	/*Método insert que insere valores no banco de dados e retorna o último id inserido*/
	public function insertDB($sql, $params = null) {

		$stream  = new StreamHandler(__DIR__.'/logger_app.log', Logger::DEBUG);
		$firephp = new FirePHPHandler();
		$logger  = new Logger('loggers');

		$logger->pushHandler($stream);
		$logger->pushHandler($firephp);
		$msn = 'O método insertDB gerou uma excessão ao tentar inserir na base de Dados';

		$conexao = $this->connect();
		$query   = $conexao->prepare($sql);
		if (!$query->execute($params)) {
			$GETerror = $query->errorInfo();

			for ($i=0; $i < count($GETerror) ; $i++) {
				$logger->error($msn."::".$GETerror[$i]);
			}
			throw new \Exception($msn." - ".$query->errorInfo());
		}else{
			$logger->info('O script SQL '.$sql.' Foi executado pelo Usuário X');
		}

		$rs = $conexao->lastInsertId() or die(print_r($query->errorInfo(), true));

		self::__destruct();
		return $rs;
	}

	/*Método update que altera valores do banco de dados e retorna o número de linhas afetadas*/
	public function updateDB($sql, $params = null) {

		$stream  = new StreamHandler(__DIR__.'/logger_app.log', Logger::DEBUG);
		$firephp = new FirePHPHandler();
		$logger  = new Logger('loggers');

		$logger->pushHandler($stream);
		$logger->pushHandler($firephp);
		$msn = 'O método updateDB gerou uma excessão ao tentar modificar um registro na base de Dados';

		$query = $this->connect()->prepare($sql);
		$query->execute($params);
		if (!$query->execute($params)) {
			$GETerror = $query->errorInfo();
			$logger->error($msn. " - ".$GETerror[2]);

			throw new \Exception($msn);
		}else{
			$logger->info('O script SQL '.$sql.' Foi executado pelo Usuário X');
		}

		$rs = $query->rowCount();
		self::__destruct();
		return $rs;
	}

	/*Método delete que excluí valores do banco de dados retorna o número de linhas afetadas*/
	public function deleteDB($sql, $params = null) {

		$stream  = new StreamHandler(__DIR__.'/logger_app.log', Logger::DEBUG);
		$firephp = new FirePHPHandler();
		$logger  = new Logger('loggers');

		$logger->pushHandler($stream);
		$logger->pushHandler($firephp);
		$msn = 'O método deleteDB gerou uma excessão ao tentar excluir um registro na base de Dados';

		$query = $this->connect()->prepare($sql);
		$query->execute($params);
		if (!$query->execute($params)) {
			$GETerror = $query->errorInfo();
			$logger->error($msn. " - ".$GETerror[2]);

			throw new \Exception($msn);
		}else{
			$logger->info('O script SQL '.$sql.' Foi executado pelo Usuário X');
		}

		$rs = $query->rowCount() or die(print_r($query->errorInfo(), true));
		self::__destruct();
		return $rs;
	}

}//final class
