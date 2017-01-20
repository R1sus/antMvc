<?


class GeneralModel
{

		protected function getConnection()
		{
			$paramsPath = ROOT . '/config/config_db.php';
			$params = include($paramsPath);


			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			try {
			$db = new PDO($dsn, $params['user'], $params['password']); //constructor(params)
			}  
			catch(PDOException $e) {
   				 echo "Нет соединения с базой данных";
			}
			
			return $db;
		}
}

?>