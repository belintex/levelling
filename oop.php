<?php 
// class 1 ==============
class oop
{
	public $koneksi;

	function __construct()
	{
		$this->koneksi = new mysqli("localhost","root","","leveling");
	}

	public function tampil($apogitu,$user=null){
		$sql  = "SELECT * FROM $apogitu";
		if ($user != null) {
			$sql .= " WHERE $user";
		}

		$q   = $this->koneksi->query($sql);
		return $q->fetch_all(MYSQLI_BOTH); 
	}

	public function insert($table, $rows = null) {
		$sql = "INSERT INTO $table";
		$row = "";
		$value = "";
		foreach ($rows as $key => $nilai) {
			$row .= ",".$key;
			$value .= ",'".$nilai."'";
		}
		$sql .= "(".substr($row, 1).")";
		$sql .= " VALUES(".substr($value, 1).")";
		
		$query = $this->koneksi->prepare($sql) or die ($this->koneksi->error);
		$query->execute();
		// return $sql;
	}

	public function update($table, $fild = null, $where = null) {
		$sql = "UPDATE $table SET ";
		$set = null;
		foreach ($fild as $key => $values) {
			$set .= ", ".$key." = '".$values."'";
		}
		$sql .= substr($set, 1)." WHERE $where";

		// echo $sql;
		$query = $this->connection->prepare($sql) or die ($this->connection->error);
		$query->execute();
	}

	public function delete($table, $where = null){
		$sql = "DELETE FROM $table WHERE $where";

		$this->connection->query($sql) or die ($this->connection->error);
	}
}
// $tes = new oop();
// == delete data ==
// $tes->delete("buku","id='1'");

// == update data ==
// $data = array('nama' => "buku catatan", 'user_id' => 3);
// $tes->update("buku",$data,"id='1'");

// == tambah data ==
// $data = array('nama' => "buku catatan", 'user_id' => 3);
// $tes->insert("buku",$data);

// == menampilkan data ==
// $row = $tes->tampil("buku", "id='3'");

// foreach ($row as $show) {
// 	echo $show['nama']."<br>";
// }
?>