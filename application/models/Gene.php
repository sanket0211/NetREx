<?php
Class Gene extends CI_Model {
	public function __construct()
	{   
		$this->load->database();
		// TODO: Remove this line, and move user from unverified_user to user using controller
		
	} 
	
	

	public function getAllGenes(){
		

		$sql = "select Genes.os_id from Genes limit 1000";
		$query = $this->db->query($sql);

		return $query->result();
	}

	public function getSpecificGene($genes){
		$this->db->select('os_id');
		$this->db->from('Genes');
		$this->db->where_in('os_id', $genes);

		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getDroughtMainRoot($gene, $limit){
		$this->db->select('source,destination,hash,PCC');
		$this->db->from('DroughtRoot');
		$this->db->where('source', $gene);
		$this->db->limit($limit);												
		//$this->db->where_in('destination', $genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		
		return $result;
	}

	public function getDroughtMainRootRank($genes){
		
		$sql = "select RootRanks.rank,DroughtRoot.source, DroughtRoot.destination from DroughtRoot, RootRanks where DroughtRoot.source in ? and DroughtRoot.destination not in ? and DroughtRoot.destination=RootRanks.os_id group by RootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes,$genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getNCBIosIds($genes){
		$sql = "select distinct ncbi_id, os_id from NCBIosidMapping where os_id =?";
		$query = $this->db->query($sql, array($genes));
		
		if($query==FALSE){
			return NULL;
		}
		$result=$query->result();

		if($result==NULL){
			return NULL;
		}
		
		return $result[0];
	}

	public function getColdMainRootRank($genes){
		
		$sql = "select distinct ColdRoot.source, ColdRoot.destination, RootRanks.rank from ColdRoot, RootRanks where ColdRoot.source in ? and ColdRoot.destination=RootRanks.os_id group by RootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getABAMainRootRank($genes){
		
		$sql = "select distinct ABARoot.source, ABARoot.destination, RootRanks.rank from ABARoot, RootRanks where ABARoot.source in ? and ABARoot.destination=RootRanks.os_id group by RootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getJAMainRootRank($genes){
		
		$sql = "select distinct JARoot.source, JARoot.destination, RootRanks.rank from JARoot, RootRanks where JARoot.source in ? and JARoot.destination=RootRanks.os_id group by RootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getOsmoticMainRootRank($genes){
		
		$sql = "select distinct OsmoticRoot.source, OsmoticRoot.destination, RootRanks.rank from OsmoticRoot, RootRanks where OsmoticRoot.source in ? and OsmoticRoot.destination=RootRanks.os_id group by RootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getFloodMainRootRank($genes){
		
		$sql = "select distinct FloodRoot.source, FloodRoot.destination, RootRanks.rank from FloodRoot, RootRanks where FloodRoot.source in ? and FloodRoot.destination=RootRanks.os_id group by RootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	##############shoot network#######

	public function getDroughtMainShootRank($genes){
		
		$sql = "select distinct DroughtShoot.source, DroughtShoot.destination, ShootRanks.rank from DroughtShoot, ShootRanks where DroughtShoot.source in ? and DroughtShoot.destination=ShootRanks.os_id group by ShootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getColdMainShootRank($genes){
		
		$sql = "select distinct ColdShoot.source, ColdShoot.destination, ShootRanks.rank from ColdShoot, ShootRanks where ColdShoot.source in ? and ColdShoot.destination=ShootRanks.os_id group by ShootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getABAMainShootRank($genes){
		
		$sql = "select distinct ABAShoot.source, ABAShoot.destination, ShootRanks.rank from ABAShoot, ShootRanks where ABAShoot.source in ? and ABAShoot.destination=ShootRanks.os_id group by ShootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getJAMainShootRank($genes){
		
		$sql = "select distinct JAShoot.source, JAShoot.destination, ShootRanks.rank from JAShoot, ShootRanks where JAShoot.source in ? and JAShoot.destination=ShootRanks.os_id group by ShootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getOsmoticMainShootRank($genes){
		
		$sql = "select distinct OsmoticShoot.source, OsmoticShoot.destination, ShootRanks.rank from OsmoticShoot, ShootRanks where OsmoticShoot.source in ? and OsmoticShoot.destination=ShootRanks.os_id group by ShootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	public function getFloodMainShootRank($genes){
		
		$sql = "select distinct FloodShoot.source, FloodShoot.destination, ShootRanks.rank from FloodShoot, ShootRanks where FloodShoot.source in ? and FloodShoot.destination=ShootRanks.os_id group by ShootRanks.rank ASC limit 100";
		$query = $this->db->query($sql, array($genes));
		
		
		$result=$query->result();
		
		return $result;
		return $result;
	}

	###########################
	

	public function getColdMainRoot($gene, $limit){
		$this->db->select('source,destination,hash,PCC');
		$this->db->from('ColdRoot');
		$this->db->where('source', $gene);
		$this->db->limit($limit);												
		//$this->db->where_in('destination', $genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		
		return $result;
	}
	public function getABAMainRoot($gene, $limit){
		$this->db->select('source,destination,hash,PCC');
		$this->db->from('ABARoot');
		$this->db->where('source', $gene);
		$this->db->limit($limit);												
		//$this->db->where_in('destination', $genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		
		return $result;
	}

	public function getJAMainRoot($gene, $limit){
		$this->db->select('source,destination,hash,PCC');
		$this->db->from('JARoot');
		$this->db->where('source', $gene);
		$this->db->limit($limit);												
		//$this->db->where_in('destination', $genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		
		return $result;
	}

	public function getOsmoticMainRoot($gene, $limit){
		$this->db->select('source,destination,hash,PCC');
		$this->db->from('OsmoticRoot');
		$this->db->where('source', $gene);
		$this->db->limit($limit);												
		//$this->db->where_in('destination', $genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		
		return $result;
	}

	public function getFloodMainRoot($gene, $limit){
		$this->db->select('source,destination,hash,PCC');
		$this->db->from('FloodRoot');
		$this->db->where('source', $gene);
		$this->db->limit($limit);												
		//$this->db->where_in('destination', $genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		
		return $result;
	}

	public function getDroughtRoot($hash_genes){
		$res = array();
		$this->db->select('hash,PCC');
		$this->db->from('DroughtRoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		if($result==NULL){
			return $res;
		}
		return $result;
	}

	public function getColdRoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('ColdRoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getABARoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('ABARoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getJARoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('JARoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getOsmoticRoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('OsmoticRoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getFloodRoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('FloodRoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}



	public function getDroughtShoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('DroughtShoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getColdShoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('ColdShoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getABAShoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('ABAShoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getJAShoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('JAShoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getOsmoticShoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('OsmoticShoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getFloodShoot($hash_genes){
		$this->db->select('hash,PCC');
		$this->db->from('FloodShoot');
		$this->db->where_in('hash', $hash_genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}



	public function getPathways($genes){
		$this->db->select('os_id,pathway');
		$this->db->from('Pathways');
		$this->db->where_in('os_id', $genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getGeneIds($genes){
		$this->db->select('os_id');
		$this->db->from('Genes');
		$this->db->where_in('os_id', $genes);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}


	public function GetRootRank($gene){
		$this->db->select('rank');
		$this->db->from('RootRanks');
		$this->db->where('os_id', $gene);
		$query = $this->db->get();
		$result = $query->result();
		print_r($result);
		die();
		return $result;
	}


	public function getModuleGenes($module_id){
		$this->db->select('os_id');
		$this->db->from('StressAttributes');
		$this->db->where_in('module_id', $module_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getAllStressGenes($genes, $tissue_id, $stress_id, $time_point){
		//print_r($gene_ids);
		/*$this->db->select('stress_attribute_id,gene_id,stress_id,fold_change,module_id');
		$this->db->from('StressAttributes');
		$this->db->where_in('gene_id', $genes);
		$this->db->where('stress_id', $stress_id);
		$this->db->where('tissue_id', $tissue_id);
		#$this->db->where('tissue_id', $tissue_id);
		#$this->db->where('stress_id', $stress_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;*/
		$t="One";
		if($time_point==2){$time_point=2;$t='Two';}
		else if($time_point==3){$time_point=3;$t='Three';}
		else if($time_point==4){$time_point=4;$t='Four';}
		else if($time_point==5){$time_point=5;$t='Five';}
		$t="";
		if($tissue_id==1){
			if($stress_id==2){
			$sql = "select StressAttributesDroughtRoot".$t.".stress_attribute_id, StressAttributesDroughtRoot".$t.".os_id, StressAttributesDroughtRoot".$t.".fold_change, StressAttributesDroughtRoot".$t.".p_value, StressAttributesDroughtRoot".$t.".module_id, StressAttributesDroughtRoot".$t.".time_point, Modules.module_name, TimePoints.time_point from StressAttributesDroughtRoot".$t.", Modules, TimePoints where Modules.module_id=StressAttributesDroughtRoot".$t.".module_id and StressAttributesDroughtRoot".$t.".os_id = ? and StressAttributesDroughtRoot".$t.".tissue_id=? and StressAttributesDroughtRoot".$t.".stress_id=? and TimePoints.time_point_id=StressAttributesDroughtRoot".$t.".time_point and StressAttributesDroughtRoot".$t.".time_point=?";
			}
			else if($stress_id==3){
				$sql = "select StressAttributesColdRoot.stress_attribute_id, StressAttributesColdRoot.os_id, StressAttributesColdRoot.fold_change, StressAttributesColdRoot.p_value, StressAttributesColdRoot.module_id, StressAttributesColdRoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesColdRoot, Modules, TimePoints where Modules.module_id=StressAttributesColdRoot.module_id and StressAttributesColdRoot.os_id = ? and StressAttributesColdRoot.tissue_id=? and StressAttributesColdRoot.stress_id=? and TimePoints.time_point_id=StressAttributesColdRoot.time_point and StressAttributesColdRoot.time_point=?";
			}
			else if($stress_id==4){
				$sql = "select StressAttributesABARoot.stress_attribute_id, StressAttributesABARoot.os_id, StressAttributesABARoot.fold_change, StressAttributesABARoot.p_value, StressAttributesABARoot.module_id, StressAttributesABARoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesABARoot, Modules, TimePoints where Modules.module_id=StressAttributesABARoot.module_id and StressAttributesABARoot.os_id = ? and StressAttributesABARoot.tissue_id=? and StressAttributesABARoot.stress_id=? and TimePoints.time_point_id=StressAttributesABARoot.time_point and StressAttributesABARoot.time_point=?";
			}
			else if($stress_id=5){
				$sql = "select StressAttributesJARoot.stress_attribute_id, StressAttributesJARoot.os_id, StressAttributesJARoot.fold_change, StressAttributesJARoot.p_value, StressAttributesJARoot.module_id, StressAttributesJARoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesJARoot, Modules, TimePoints where Modules.module_id=StressAttributesJARoot.module_id and StressAttributesJARoot.os_id = ? and StressAttributesJARoot.tissue_id=? and StressAttributesJARoot.stress_id=? and TimePoints.time_point_id=StressAttributesJARoot.time_point and StressAttributesJARoot.time_point=?";
			}	
			else if($stress_id==6){
				$sql = "select StressAttributesOsmoticRoot.stress_attribute_id, StressAttributesOsmoticRoot.os_id, StressAttributesOsmoticRoot.fold_change, StressAttributesOsmoticRoot.p_value, StressAttributesOsmoticRoot.module_id, StressAttributesOsmoticRoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesOsmoticRoot, Modules, TimePoints where Modules.module_id=StressAttributesOsmoticRoot.module_id and StressAttributesOsmoticRoot.os_id = ? and StressAttributesOsmoticRoot.tissue_id=? and StressAttributesOsmoticRoot.stress_id=? and TimePoints.time_point_id=StressAttributesOsmoticRoot.time_point and StressAttributesOsmoticRoot.time_point=?";
			}
			else{
				$sql = "select StressAttributesFloodRoot.stress_attribute_id, StressAttributesFloodRoot.os_id, StressAttributesFloodRoot.fold_change, StressAttributesFloodRoot.p_value, StressAttributesFloodRoot.module_id, StressAttributesFloodRoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesFloodRoot, Modules, TimePoints where Modules.module_id=StressAttributesFloodRoot.module_id and StressAttributesFloodRoot.os_id = ? and StressAttributesFloodRoot.tissue_id=? and StressAttributesFloodRoot.stress_id=? and TimePoints.time_point_id=StressAttributesFloodRoot.time_point and StressAttributesFloodRoot.time_point=?";
			}
		}
		else{
			if($stress_id==2){
			$sql = "select StressAttributesDroughtShoot.stress_attribute_id, StressAttributesDroughtShoot.os_id, StressAttributesDroughtShoot.fold_change, StressAttributesDroughtShoot.p_value, StressAttributesDroughtShoot.module_id, StressAttributesDroughtShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesDroughtShoot, Modules, TimePoints where Modules.module_id=StressAttributesDroughtShoot.module_id and StressAttributesDroughtShoot.os_id = ? and StressAttributesDroughtShoot.tissue_id=? and StressAttributesDroughtShoot.stress_id=? and TimePoints.time_point_id=StressAttributesDroughtShoot.time_point and StressAttributesDroughtShoot.time_point=?";
			}
			else if($stress_id==3){
				$sql = "select StressAttributesColdShoot.stress_attribute_id, StressAttributesColdShoot.os_id, StressAttributesColdShoot.fold_change, StressAttributesColdShoot.p_value, StressAttributesColdShoot.module_id, StressAttributesColdShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesColdShoot, Modules, TimePoints where Modules.module_id=StressAttributesColdShoot.module_id and StressAttributesColdShoot.os_id = ? and StressAttributesColdShoot.tissue_id=? and StressAttributesColdShoot.stress_id=? and TimePoints.time_point_id=StressAttributesColdShoot.time_point and StressAttributesColdShoot.time_point=?";
			}
			else if($stress_id==4){
				$sql = "select StressAttributesABAShoot.stress_attribute_id, StressAttributesABAShoot.os_id, StressAttributesABAShoot.fold_change, StressAttributesABAShoot.p_value, StressAttributesABAShoot.module_id, StressAttributesABAShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesABAShoot, Modules, TimePoints where Modules.module_id=StressAttributesABAShoot.module_id and StressAttributesABAShoot.os_id = ? and StressAttributesABAShoot.tissue_id=? and StressAttributesABAShoot.stress_id=? and TimePoints.time_point_id=StressAttributesABAShoot.time_point and StressAttributesABAShoot.time_point=?";
			}
			else if($stress_id=5){
				$sql = "select StressAttributesJAShoot.stress_attribute_id, StressAttributesJAShoot.os_id, StressAttributesJAShoot.fold_change, StressAttributesJAShoot.p_value, StressAttributesJAShoot.module_id, StressAttributesJAShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesJAShoot, Modules, TimePoints where Modules.module_id=StressAttributesJAShoot.module_id and StressAttributesJAShoot.os_id = ? and StressAttributesJAShoot.tissue_id=? and StressAttributesJAShoot.stress_id=? and TimePoints.time_point_id=StressAttributesJAShoot.time_point and StressAttributesJAShoot.time_point=?";
			}
			else if($stress_id==6){
				$sql = "select StressAttributesOsmoticShoot.stress_attribute_id, StressAttributesOsmoticShoot.os_id, StressAttributesOsmoticShoot.fold_change, StressAttributesOsmoticShoot.p_value, StressAttributesOsmoticShoot.module_id, StressAttributesOsmoticShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesOsmoticShoot, Modules, TimePoints where Modules.module_id=StressAttributesOsmoticShoot.module_id and StressAttributesOsmoticShoot.os_id = ? and StressAttributesOsmoticShoot.tissue_id=? and StressAttributesOsmoticShoot.stress_id=? and TimePoints.time_point_id=StressAttributesOsmoticShoot.time_point and StressAttributesOsmoticShoot.time_point=?";
			}
			else{
				$sql = "select StressAttributesFloodShoot.stress_attribute_id, StressAttributesFloodShoot.os_id, StressAttributesFloodShoot.fold_change, StressAttributesFloodShoot.p_value, StressAttributesFloodShoot.module_id, StressAttributesFloodShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesFloodShoot, Modules, TimePoints where Modules.module_id=StressAttributesFloodShoot.module_id and StressAttributesFloodShoot.os_id = ? and StressAttributesFloodShoot.tissue_id=? and StressAttributesFloodShoot.stress_id=? and TimePoints.time_point_id=StressAttributesFloodShoot.time_point and StressAttributesFloodShoot.time_point=?";
			}
		}

		//$sql = "select StressAttributes.stress_attribute_id, StressAttributes.os_id, StressAttributes.fold_change, StressAttributes.module_id, StressAttributes.time_point, Modules.module_name, TimePoints.time_point from StressAttributes, Modules, TimePoints where StressAttributes.os_id in ? and Modules.module_id=StressAttributes.module_id and StressAttributes.tissue_id=? and StressAttributes.stress_id=? and TimePoints.time_point_id=StressAttributes.time_point and StressAttributes.timepoin";
		$query = $this->db->query($sql, array($genes, $tissue_id,$stress_id,  $time_point));
		
		/*print_r($genes);
		print_r($sql);*/
		//print_r($sql);
		//$query = $this->db->query($sql, array($genes, $tissue_id, $stress_id));
		$temp=new stdClass();
		if($query==NULL){
			$temp->fold_change=0;
			$temp->p_value=0;
			return $temp;
		}
		$result=$query->result();
		return $result[0];
	}


	public function getAllStressGenesDup($genes, $tissue_id, $stress_id, $time_point){
		//print_r($gene_ids);
		/*$this->db->select('stress_attribute_id,gene_id,stress_id,fold_change,module_id');
		$this->db->from('StressAttributes');
		$this->db->where_in('gene_id', $genes);
		$this->db->where('stress_id', $stress_id);
		$this->db->where('tissue_id', $tissue_id);
		#$this->db->where('tissue_id', $tissue_id);
		#$this->db->where('stress_id', $stress_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;*/
		$t="One";
		if($time_point==2){$time_point=2;$t='Two';}
		else if($time_point==3){$time_point=3;$t='Three';}
		else if($time_point==4){$time_point=4;$t='Four';}
		else if($time_point==5){$time_point=5;$t='Five';}
		$t="";
		if($tissue_id==1){
			if($stress_id==2){
			$sql = "select StressAttributesDroughtRoot".$t.".stress_attribute_id, StressAttributesDroughtRoot".$t.".os_id, StressAttributesDroughtRoot".$t.".fold_change, StressAttributesDroughtRoot".$t.".p_value, StressAttributesDroughtRoot".$t.".module_id, StressAttributesDroughtRoot".$t.".time_point, Modules.module_name, TimePoints.time_point from StressAttributesDroughtRoot".$t.", Modules, TimePoints where Modules.module_id=StressAttributesDroughtRoot".$t.".module_id and StressAttributesDroughtRoot".$t.".os_id in ? and StressAttributesDroughtRoot".$t.".tissue_id=? and StressAttributesDroughtRoot".$t.".stress_id=? and TimePoints.time_point_id=StressAttributesDroughtRoot".$t.".time_point and StressAttributesDroughtRoot".$t.".time_point=?";
			}
			else if($stress_id==3){
				$sql = "select StressAttributesColdRoot.stress_attribute_id, StressAttributesColdRoot.os_id, StressAttributesColdRoot.fold_change, StressAttributesColdRoot.p_value, StressAttributesColdRoot.module_id, StressAttributesColdRoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesColdRoot, Modules, TimePoints where Modules.module_id=StressAttributesColdRoot.module_id and StressAttributesColdRoot.os_id in ? and StressAttributesColdRoot.tissue_id=? and StressAttributesColdRoot.stress_id=? and TimePoints.time_point_id=StressAttributesColdRoot.time_point and StressAttributesColdRoot.time_point=?";
			}
			else if($stress_id==4){
				$sql = "select StressAttributesABARoot.stress_attribute_id, StressAttributesABARoot.os_id, StressAttributesABARoot.fold_change, StressAttributesABARoot.p_value, StressAttributesABARoot.module_id, StressAttributesABARoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesABARoot, Modules, TimePoints where Modules.module_id=StressAttributesABARoot.module_id and StressAttributesABARoot.os_id in ? and StressAttributesABARoot.tissue_id=? and StressAttributesABARoot.stress_id=? and TimePoints.time_point_id=StressAttributesABARoot.time_point and StressAttributesABARoot.time_point=?";
			}
			else if($stress_id=5){
				$sql = "select StressAttributesJARoot.stress_attribute_id, StressAttributesJARoot.os_id, StressAttributesJARoot.fold_change, StressAttributesJARoot.p_value, StressAttributesJARoot.module_id, StressAttributesJARoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesJARoot, Modules, TimePoints where Modules.module_id=StressAttributesJARoot.module_id and StressAttributesJARoot.os_id in ? and StressAttributesJARoot.tissue_id=? and StressAttributesJARoot.stress_id=? and TimePoints.time_point_id=StressAttributesJARoot.time_point and StressAttributesJARoot.time_point=?";
			}	
			else if($stress_id==6){
				$sql = "select StressAttributesOsmoticRoot.stress_attribute_id, StressAttributesOsmoticRoot.os_id, StressAttributesOsmoticRoot.fold_change, StressAttributesOsmoticRoot.p_value, StressAttributesOsmoticRoot.module_id, StressAttributesOsmoticRoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesOsmoticRoot, Modules, TimePoints where Modules.module_id=StressAttributesOsmoticRoot.module_id and StressAttributesOsmoticRoot.os_id in ? and StressAttributesOsmoticRoot.tissue_id=? and StressAttributesOsmoticRoot.stress_id=? and TimePoints.time_point_id=StressAttributesOsmoticRoot.time_point and StressAttributesOsmoticRoot.time_point=?";
			}
			else{
				$sql = "select StressAttributesFloodRoot.stress_attribute_id, StressAttributesFloodRoot.os_id, StressAttributesFloodRoot.fold_change, StressAttributesFloodRoot.p_value, StressAttributesFloodRoot.module_id, StressAttributesFloodRoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesFloodRoot, Modules, TimePoints where Modules.module_id=StressAttributesFloodRoot.module_id and StressAttributesFloodRoot.os_id in ? and StressAttributesFloodRoot.tissue_id=? and StressAttributesFloodRoot.stress_id=? and TimePoints.time_point_id=StressAttributesFloodRoot.time_point and StressAttributesFloodRoot.time_point=?";
			}
		}
		else{
			if($stress_id==2){
			$sql = "select StressAttributesDroughtShoot.stress_attribute_id, StressAttributesDroughtShoot.os_id, StressAttributesDroughtShoot.fold_change, StressAttributesDroughtShoot.p_value, StressAttributesDroughtShoot.module_id, StressAttributesDroughtShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesDroughtShoot, Modules, TimePoints where Modules.module_id=StressAttributesDroughtShoot.module_id and StressAttributesDroughtShoot.os_id in ? and StressAttributesDroughtShoot.tissue_id=? and StressAttributesDroughtShoot.stress_id=? and TimePoints.time_point_id=StressAttributesDroughtShoot.time_point and StressAttributesDroughtShoot.time_point=?";
			}
			else if($stress_id==3){
				$sql = "select StressAttributesColdShoot.stress_attribute_id, StressAttributesColdShoot.os_id, StressAttributesColdShoot.fold_change, StressAttributesColdShoot.p_value, StressAttributesColdShoot.module_id, StressAttributesColdShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesColdShoot, Modules, TimePoints where Modules.module_id=StressAttributesColdShoot.module_id and StressAttributesColdShoot.os_id in ? and StressAttributesColdShoot.tissue_id=? and StressAttributesColdShoot.stress_id=? and TimePoints.time_point_id=StressAttributesColdShoot.time_point and StressAttributesColdShoot.time_point=?";
			}
			else if($stress_id==4){
				$sql = "select StressAttributesABAShoot.stress_attribute_id, StressAttributesABAShoot.os_id, StressAttributesABAShoot.fold_change, StressAttributesABAShoot.p_value, StressAttributesABAShoot.module_id, StressAttributesABAShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesABAShoot, Modules, TimePoints where Modules.module_id=StressAttributesABAShoot.module_id and StressAttributesABAShoot.os_id in ? and StressAttributesABAShoot.tissue_id=? and StressAttributesABAShoot.stress_id=? and TimePoints.time_point_id=StressAttributesABAShoot.time_point and StressAttributesABAShoot.time_point=?";
			}
			else if($stress_id=5){
				$sql = "select StressAttributesJAShoot.stress_attribute_id, StressAttributesJAShoot.os_id, StressAttributesJAShoot.fold_change, StressAttributesJAShoot.p_value, StressAttributesJAShoot.module_id, StressAttributesJAShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesJAShoot, Modules, TimePoints where Modules.module_id=StressAttributesJAShoot.module_id and StressAttributesJAShoot.os_id in ? and StressAttributesJAShoot.tissue_id=? and StressAttributesJAShoot.stress_id=? and TimePoints.time_point_id=StressAttributesJAShoot.time_point and StressAttributesJAShoot.time_point=?";
			}
			else if($stress_id==6){
				$sql = "select StressAttributesOsmoticShoot.stress_attribute_id, StressAttributesOsmoticShoot.os_id, StressAttributesOsmoticShoot.fold_change, StressAttributesOsmoticShoot.p_value, StressAttributesOsmoticShoot.module_id, StressAttributesOsmoticShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesOsmoticShoot, Modules, TimePoints where Modules.module_id=StressAttributesOsmoticShoot.module_id and StressAttributesOsmoticShoot.os_id in ? and StressAttributesOsmoticShoot.tissue_id=? and StressAttributesOsmoticShoot.stress_id=? and TimePoints.time_point_id=StressAttributesOsmoticShoot.time_point and StressAttributesOsmoticShoot.time_point=?";
			}
			else{
				$sql = "select StressAttributesFloodShoot.stress_attribute_id, StressAttributesFloodShoot.os_id, StressAttributesFloodShoot.fold_change, StressAttributesFloodShoot.p_value, StressAttributesFloodShoot.module_id, StressAttributesFloodShoot.time_point, Modules.module_name, TimePoints.time_point from StressAttributesFloodShoot, Modules, TimePoints where Modules.module_id=StressAttributesFloodShoot.module_id and StressAttributesFloodShoot.os_id in ? and StressAttributesFloodShoot.tissue_id=? and StressAttributesFloodShoot.stress_id=? and TimePoints.time_point_id=StressAttributesFloodShoot.time_point and StressAttributesFloodShoot.time_point=?";
			}
		}

		//$sql = "select StressAttributes.stress_attribute_id, StressAttributes.os_id, StressAttributes.fold_change, StressAttributes.module_id, StressAttributes.time_point, Modules.module_name, TimePoints.time_point from StressAttributes, Modules, TimePoints where StressAttributes.os_id in ? and Modules.module_id=StressAttributes.module_id and StressAttributes.tissue_id=? and StressAttributes.stress_id=? and TimePoints.time_point_id=StressAttributes.time_point and StressAttributes.timepoin";
		$query = $this->db->query($sql, array($genes, $tissue_id,$stress_id,  $time_point));
		
		
		//$query = $this->db->query($sql, array($genes, $tissue_id, $stress_id));
		
		$result=$query->result();
		return $result;
	}

	public function getAllStressGenes_browse($tissue_id, $stress_id, $time_point){
		//print_r($gene_ids);
		/*$this->db->select('stress_attribute_id,gene_id,stress_id,fold_change,module_id');
		$this->db->from('StressAttributes');
		$this->db->where_in('gene_id', $genes);
		$this->db->where('stress_id', $stress_id);
		$this->db->where('tissue_id', $tissue_id);
		#$this->db->where('tissue_id', $tissue_id);
		#$this->db->where('stress_id', $stress_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;*/
			
		if($time_point==2){$time_point=3;}
		else if($time_point==3){$time_point=6;}
		else if($time_point==4){$time_point=12;}
		else if($time_point==5){$time_point=24;}
		$sql = "select StressAttributes.os_id, StressAttributes.fold_change, StressAttributes.p_value from StressAttributes where StressAttributes.tissue_id=? and StressAttributes.stress_id=? and StressAttributes.time_point=? limit 1000";
		//$sql = "select StressAttributes.stress_attribute_id, StressAttributes.os_id, StressAttributes.fold_change, StressAttributes.module_id, StressAttributes.time_point, Modules.module_name, TimePoints.time_point from StressAttributes, Modules, TimePoints where StressAttributes.os_id in ? and Modules.module_id=StressAttributes.module_id and StressAttributes.tissue_id=? and StressAttributes.stress_id=? and TimePoints.time_point_id=StressAttributes.time_point and StressAttributes.timepoin";
		$query = $this->db->query($sql, array($tissue_id,$stress_id,  $time_point));
		//print_r($sql);
		//$query = $this->db->query($sql, array($genes, $tissue_id, $stress_id));
		

		return $query->result();
	}


	public function getAllStress(){
		$this->db->select('stress_id,stress_name');
		$this->db->from('Stress');
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}
	public function getStressName($stress_id){
		$this->db->select('stress_id, stress_name');
		$this->db->from('Stress');
		$this->db->where('stress_id', $stress_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result[0];
	}

	public function getModuleName($module_id){
		
		$this->db->select('module_id, module_name');
		$this->db->from('Modules');
		$this->db->where('module_id', $module_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		if($result==NULL){
			return NULL;
		}
		
		#print_r($module_id);

		return $result[0];
	}
	public function getStressSpecificPCC($tissue_id,$stress_id,$source,$dest){
		$this->db->select('PCC');
		$this->db->from('StressSpecificPCC');
		$this->db->where('source', $source);
		$this->db->where('destination', $dest);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result[0];
	}

	public function getAllModuleNames(){
		
		$this->db->select('module_id, module_name');
		$this->db->from('Modules');
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getAllRootModuleGenes($module_id,$tissue_id){
		
		$this->db->select('*');
		$this->db->from('ModuleConnections');
		$this->db->where('module_id', $module_id);
		$this->db->where('tissue_id', $tissue_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}

	public function getModuleId($gene,$tissue_id,$stress_id){
		$this->db->select('module_id');
		if($tissue_id==1){
			if($stress_id==2){
				$this->db->from('StressAttributesDroughtRoot');
			}
			else if($stress_id==3){
				$this->db->from('StressAttributesColdRoot');
			}
			else if($stress_id==4){
				$this->db->from('StressAttributesABARoot');
			}
			else if($stress_id==5){
				$this->db->from('StressAttributesJARoot');
			}
			else if($stress_id==6){
				$this->db->from('StressAttributesOsmoticRoot');
			}
			else{
				$this->db->from('StressAttributesFloodRoot');
			}
			
		}
		else{
			if($stress_id==2){
				$this->db->from('StressAttributesDroughtShoot');
			}
			else if($stress_id==3){
				$this->db->from('StressAttributesColdShoot');
			}
			else if($stress_id==4){
				$this->db->from('StressAttributesABAShoot');
			}
			else if($stress_id==5){
				$this->db->from('StressAttributesJAShoot');
			}
			else if($stress_id==6){
				$this->db->from('StressAttributesOsmoticShoot');
			}
			else{
				$this->db->from('StressAttributesFloodShoot');
			}
		}
		$this->db->where('os_id', $gene);
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}

		$result = $query->result();
		if($result==NULL){
			return NULL;
		}
	
		return $result[0];
	}

	public function getKegg($gene){
		$this->db->select('kegg_pathway');
		$this->db->from('KeggPathway');
		$this->db->where('os_id', $gene);
		$query = $this->db->get();
		if ($query == FALSE) {
			return "No Information";
		}
		$result = $query->result();
		if($result==NULL){
			return "No Information";
		}
		
		return $result[0]->kegg_pathway;
	}

	public function getPathwayId($pathway){
		#print_r($pathway);
		$this->db->select('id,pathway');
		$this->db->from('PathwayId');
		$this->db->where('pathway', $pathway);
		$query = $this->db->get();
		if ($query == FALSE) {
			return "No Information";
		}
		$result = $query->result();
		#print_r($query);
		if($result==NULL){
			return "No Inform";
		}
		#print_r($result);
		return $result[0]->id;
	}

	public function getPathwayName($pathway){
		$this->db->select('id,pathway');
		$this->db->from('PathwayId');
		$this->db->where('id', $pathway);
		$query = $this->db->get();
		if ($query == FALSE) {
			return "No Information";
		}
		$result = $query->result();
		if($result==NULL){
			return "No Information";
		}
		
		return $result[0];
	}

	public function getTFs($gene){
		$this->db->select('family');
		$this->db->from('TFs');
		$this->db->where('os_id', $gene);
		$query = $this->db->get();
		
		if ($query == FALSE) {
			return "No Information";
		}
		$result = $query->result();
		
		if($result==NULL){
			return "No Information";
		}
		
		return $result[0]->family;
	}

	public function getRootModuleGo($module_id, $tissue_id){
		$this->db->select('*');
		$this->db->from('RootModuleGo');
		$this->db->where('module_id', $module_id);
		$this->db->where('tissue_id', $tissue_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return "No Information";
		}
		$result = $query->result();
		if($result==NULL){
			return "No Information";
		}
		return $result;
	}

	public function getRootClusterDegree($module_id, $tissue_id){
		$this->db->select('*');
		$this->db->from('RootClusterDegree');
		$this->db->where('module_id', $module_id);
		$this->db->where('tissue_id', $tissue_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return "No Information";
		}
		$result = $query->result();
		if($result==NULL){
			return "No Information";
		}
		return $result;
	}

	public function getRootGeneAnnotations($gene_id, $tissue_id){
		$this->db->select('*');
		$this->db->from('RootGeneAnnotations');
		$this->db->where('tissue_id', $tissue_id);
		$this->db->where('os_id', $gene_id);
		$query = $this->db->get();
		if ($query == FALSE) {
			return "No Information";
		}
		$result = $query->result();

		if($result==NULL){
			$result = new stdClass();
			$result->Description="No Information";
			$result->GO="No Information";

			return $result;
		}
		
		return $result[0];
	}

	public function getAllTissues(){
		$this->db->select('tissue_id,tissue_name');
		$this->db->from('Tissues');
		$query = $this->db->get();
		if ($query == FALSE) {
			return NULL;
		}
		$result = $query->result();
		return $result;
	}
	public function getNeighbours($gene,$min_cor_cutoff,$max_correlation_cutoff){
		$sql = "select * from DroughtRootCorEdges where node1=? and correlation_value<=? and correlation_value<=?";
		$query = $this->db->query($sql, array($gene,$min_cor_cutoff,$max_correlation_cutoff));
		return $query->result();
	}
}
?>
