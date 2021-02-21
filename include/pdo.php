<?php 
class Users{ 	
	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}	
	public function login($username, $password) {

		$query = $this->db->prepare("SELECT password, id_user FROM user WHERE username = ?");
		$query->bindValue(1, $username);
		
		try{
			
			$query->execute();
			$data 				= $query->fetch();
			$stored_pass 		= $data['password'];
			$id_user				= $data['id_user'];
			
			if($stored_pass === $password){
				return $id_user;	
			}else{
				return false;	
			}

		}catch(PDOException $e){
			die($e->getMessage());
		}
	
	}
	public function verify($hak, $page){

		$query = $this->db->prepare("SELECT user_group.namagroup, user_role.aksesibilitas FROM user_group, user_role WHERE user_group.namagroup = user_role.usergroup and user_group.id_user_group=? and user_role.aksesibilitas LIKE '%$page%'");
		$query->bindValue(1, $hak);
		
		try{
			
			$query->execute();
			$data 				= $query->rowCount();
			
			return $data;	


		}catch(PDOException $e){
			die($e->getMessage());
		}		
	}	
	public function userdata($id_user) {

		$query = $this->db->prepare("SELECT * FROM user WHERE id_user = ?");
		$query->bindValue(1, $id_user);
		
		try{			
			$query->execute();
			$data = $query->fetch();
			
			return $data;

		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function count_data($tbl) {

		$query = $this->db->prepare("SELECT * FROM ".$tbl." ");
		
		try{
			
			$query->execute();
			$data 				= $query->rowCount();
			
			return $data;	


		}catch(PDOException $e){
			die($e->getMessage());
		}
	
	}
	public function count_filter($tbl, $flt) {

		$query = $this->db->prepare("SELECT * FROM ".$tbl." ".$flt);
		try{
			
			$query->execute();
			$data 				= $query->rowCount();
			
			return $data;	


		}catch(PDOException $e){
			die($e->getMessage());
		}
	
	}
	public function cek_t_potensi($temuan, $ket){
		$temuans = explode(" ", $temuan);
		$kets = explode(" ", str_replace(","," ",$ket));
		$qtm1 = "Ket_Baku LIKE '$temuans[0]%' OR Ket_Baku LIKE '$kets[0]%'";
		$qtm2 = "Ket_Baku LIKE '%$temuans[0]' OR Ket_Baku LIKE '%$kets[0]'";
		$qtm3 = "Ket_Baku LIKE '%$temuans[0]%' OR Ket_Baku LIKE '%$kets[0]%'";
		
		
		$query = $this->db->prepare("select * from kode_jrsca where $qtm1");
		try{
			
			$query->execute();
			$dq = $query->fetch();
			$rq = $query->rowCount();
			
			if($rq > 0){
				return strtoupper($dq["Kode_JRSCA"]);
			}else{
				$query2 = $this->db->prepare("select * from kode_jrsca where $qtm2");
				try{
					
					$query2->execute();
					$dq = $query2->fetch();
					$rq = $query2->rowCount();
					
					if($rq > 0){
						return strtoupper($dq["Kode_JRSCA"]);
					}else{
						$query3 = $this->db->prepare("select * from kode_jrsca where $qtm3");
						try{
							
							$query3->execute();
							$dq = $query3->fetch();
							$rq = $query3->rowCount();
							
							if($rq > 0){
								return strtoupper($dq["Kode_JRSCA"]);
							}else{
								return "-";
							}


						}catch(PDOException $e){
							die($e->getMessage());
						}
					}


				}catch(PDOException $e){
					die($e->getMessage());
				}
			}


		}catch(PDOException $e){
			die($e->getMessage());
		}
		
	}
	public function update_potensi($ptns, $idptn) {

		$query = $this->db->prepare("UPDATE tabel_potensi set tabel_potensi = '".$ptns."' where id_tabel_potensi = '".$idptn."'");
		try{
			
			$query->execute();
			

		}catch(PDOException $e){
			die($e->getMessage());
		}
	
	}
	public function list_tables()
	{
		$query = 'SHOW TABLES';
		if($this->is_connected)
		{
			$query = $this->pdo->query($sql);
			return $query->fetchAll(PDO::FETCH_COLUMN);
		}
		return FALSE;
	}
	public function task_potensial($sptn){
		$query1 = $this->db->prepare("select * from tabel_potensi where tabel_potensi = ' ' or tabel_potensi = '-' and sptn='$sptn'");
		$query2 = $this->db->prepare("select * from tabel_potensi where sptn='$sptn'");
		try{
			
			$query1->execute();
			$query2->execute();
			$data1 				= $query1->rowCount();
			$data2 				= $query2->rowCount();
			
			if($data2 > 0){
				$presentase = (($data2-$data1) / $data2)*100;
				return round($presentase, 0)."%";	
			}else{
				return "0%";
			}


		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function task_anveg($sptn){
		$q1 =  $this->db->prepare("select pu, grid from anveg where sptn='$sptn' group by pu, grid"); 
		$q1->execute();
		$rq1 = $q1->rowCount();
		$dq1=$q1->fetchAll();
		$c = [];
		for($i=0;$i<$rq1;$i++){
			$file= $dq1[$i]['grid']."".$dq1[$i]['pu'];
			$q2 = $this->db->prepare("select * from dok_anveg where nama_file = '$file' group by nama_file");
			$q2->execute();
			$rq2=$q2->rowCount();
			array_push($c, $rq2);
		}
		
		if($rq1 > 0){
			return round(((array_sum($c) / $rq1) * 100), 0)."%";
		}else{
			return "0%";
		}
		
	}
	public function presentase_anveg($sptn){
		$q1 =  $this->db->prepare("select pu, grid from anveg where sptn='$sptn' group by pu, grid"); 
		$q1->execute();
		$rq1 = $q1->rowCount();
		$dq1=$q1->fetchAll();
		$c = [];
		for($i=0;$i<$rq1;$i++){
			$file= $dq1[$i]['grid']."".$dq1[$i]['pu'];
			$q2 = $this->db->prepare("select * from dok_anveg where nama_file = '$file' group by nama_file");
			$q2->execute();
			$rq2=$q2->rowCount();
			if($rq2<1){
				array_push($c, $file);
			}
		}
		return $c;	
		
	}
	public function cek_preview_anveg($jenis, $grid, $pu){
		$q1= $this->db->prepare("select * from anveg where grid='$grid' and pu='$pu' and jenis='$jenis'");
		try{
			
			$q1->execute();
			$rq1=$q1->rowCount();
			
			return $rq1;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function get_grid_code($kx, $ky){
		$q= $this->db->prepare("SELECT t_maxmin.grid_code from ( SELECT `grid_code`, min(`x`) as 'minX', max(`x`) as 'maxX', min(`y`) as 'minY', max(`y`) as 'maxY' FROM `grid` group by `grid_code` ) as t_maxmin where t_maxmin.minX < ? and t_maxmin.maxX > ? and t_maxmin.minY < ? and t_maxmin.maxY > ?");
		
		$q->bindValue(1, $kx);
		$q->bindValue(2, $kx);
		$q->bindValue(3, $ky);
		$q->bindValue(4, $ky);
		try{
			
			$q->execute();
			$rq=$q->rowCount();
			$dq=$q->fetch();
			if($rq > 0){
				return $dq["grid_code"];
			}else{
				return "";
			}
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
		 
}