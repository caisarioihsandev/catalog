<?php
/**
 * 
 */
class Database
{
	
	public function db_connect()
	{
		try {
			$string = "mysql:host=localhost;dbname=catalog_db;";
			$db = new PDO($string, 'admin', 'admin1234');

			return $db;

		} catch (PDOException $e) {
			die($e->getMessage(""));
		}

	}

	public function read($query, $data = [])
	{
		$db = $this->db_connect();
		$stmt = $db->prepare($query);
		
		if (count($data) > 0) {
			$check = $stmt->execute($data);	
		} else{
			$stmt = $db->query($query);
			$check = 0;
			if ($stmt) {
				$check = 1;
			}
		}

		if ($check) {
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		return false;
	}

	public function write($query, $data = [])
	{
		$db = $this->db_connect();
		$stmt = $db->prepare($query);

		if (count($data) > 0) {
			$check = $stmt->execute($data);	
		} else{
			$stmt = $db->query($query);
			$check = 0;
			if ($stmt) {
				$check = 1;
			}
		}


		if ($check) {
			return true;
		}

		return false;
	}
}