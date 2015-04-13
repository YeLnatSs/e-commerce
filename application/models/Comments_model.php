<?php 
class Comments_model extends CI_Model
{ 	
	public function comments($idproduits)
	{
			$user=$this->input->post('username');
			$rating=$this->input->post('rate');
			$describe=$this->input->post('content');
		$data=array(
			'auteur'=>$user,
			'note'=>$rating,
			'contenu'=>$describe,
			'produit_idproduit'=>$idproduits,
			'date_comments'=>date('Y-m-d-H-i')
			);	 
		$this->db->insert('comments',$data);
		
	}

	public function getCommentaire($idprod)
	{
		var_dump($idprod);
		$this->db->select('*');
		$this->db->from('comments');
		$this->db->where('produit_idproduit',$idprod);
		$test = $this->db->get();
		// $test=$this->db->get_where('comments',['produit_idproduit'=>$idprod]);
		return $test->result('Comments_model');
	}
}