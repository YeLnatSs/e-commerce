<?php 
class Marques_model extends CI_Model
{ 

	public function getBrands()
	{
		$requete=$this->db->get('marque');
		return $requete->result('Marques_model');
		
	}
}