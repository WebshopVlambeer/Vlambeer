<?php
	class Database {
		// Properties:
		private $host;
		private $dbname;
		private $user;
		private $pass;

		private $error;
		private $stmt;
		private $con;

		// Methods:
		public function __construct($host, $dbname, $user, $pass) {
			$this->host = $host;
			$this->dbname = $dbname;
			$this->user = $user;
			$this->pass = $pass;

			try {
				$this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
				$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				$this->error = $e->getMessage();
				return $this->error;
			}
		} // end "__construct".

		public function query($query, $bind = null) {
			$this->stmt = $this->con->prepare($query);
			
			if ($bind) {
				$this->stmt->execute($bind);
			} else {
				$this->stmt->execute();
			}
			
			$check = explode(" ", $query);

			if ($check[0] == "SELECT") {
				$result = $this->stmt->fetchAll(PDO::FETCH_OBJ);
				
				if (isset($result[0])) {
					return $result;
				} else {
					return false;
				}
			} else {
				return true;
			}
		} // end "query".
	} // end class.
?>