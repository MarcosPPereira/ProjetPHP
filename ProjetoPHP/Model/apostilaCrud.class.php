<?
	require_once "apostila.class.php";
	/**
	* 
	*/
	class ApostilaCRUD
	{
		private $pdo;

		function __construct()
		{
			$this->pdo = new PDO('mysql:dbname=cursos;host=127.0.0.1;port=3306','root','123456');
        }

		public function create($apostila)
		{
			$this->pdo->query("INSERT INTO `apostila` VALUES (null, '{$apostila->getApostila()}', '{$apostila->getSynopsis()}', '{$apostila->getYear()}', '{$apostila->getPrice()}', now())");
		}

		public function readAll()
		{
			$pdoStmt = $this->pdo->query("SELECT * FROM `apostila`");
			$pdoStmt->execute();
			$apostilasArray = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);
			$apostilas = array();
			foreach ($apostilasArray as $apostilaArray) {
				extract($apostilaArray);
				 $apostilas[] = new Apostila($idApostila, $apostila, $synopsis, $year, $price, $registryDate);
			}
			return $apostilas;
		}

		public function readById($id)
		{
			$pdoStmt = $this->pdo->query("SELECT * FROM `apostila` WHERE `idApostila` = $id");
			$pdoStmt->execute();
			$apostilasArray = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);
			$apostilas = array();
			foreach ($apostilasArray as $apostilaArray) {
			   extract($apostilaArray);
   			   $apostilas[] = new Apostila($idApostila, $apostila, $synopsis, $year, $price, $registryDate);
			}
			return $apostilas;
		}

		public function delete($id)
		{
	        $pdoStmt = $this->pdo->query("DELETE FROM apostila WHERE idApostila = '$id'");
	        $pdoStmt->execute();
			$apostilaArray = $pdoStmt->fetch(PDO::FETCH_ASSOC);
			extract($apostilaArray);
			return new Apostila($idApostila, $apostila, $synopsis, $year, $price, $registryDate);
		}

	}
?>