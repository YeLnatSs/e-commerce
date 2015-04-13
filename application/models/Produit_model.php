<?php 
class Produit_model extends CI_Model
{ 	//$nb ->nombre d'article
	public function findLimit($nb=5)
	{	//requete php vers msql
		$requete=$this->db->get('produit');
		return $requete->result('Produit_model');
		// $reqdeux=$this->db->query('SELECT * FROM produit');
		// return $reqdeux->result();

		die(' ');
	}

	public function displayImage()
	{
		return base_url().'assets/pictures/'.$this->img;
	}

	public function getIdProduit($id)
	{
		$requete=$this->db->get_where('produit',['idproduit'=>$id]);
		return $requete->unbuffered_row('Produit_model');
	}

	public function brandnew($id)
	{
		$this->db->select('*');
		$this->db->from('produit');
		$this->db->join('marque', ' idmarque = produit.marque_idmarque','inner');
		$this->db->where('idmarque',$id);
		$query = $this->db->get();
		return $query->result('Produit_model');
	}
}