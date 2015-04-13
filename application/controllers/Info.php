<?php 

class Info extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function article($idProduit)
	{
		$this->load->helper("form");
		$this->load->model('Produit_model');
		$this->load->model('Comments_model');
		$idArticle=$this->Produit_model->getIdProduit($idProduit);
		$showComments=$this->Comments_model->getCommentaire($idProduit);
		var_dump($showComments);

		$this->load->library('form_validation');
		
				//username obligatoire et ayant 5 lettres minimum sinon sa ne passe pas
		$this->form_validation->set_message('required','Be careful, there is a problem on you ursername.');
		$this->form_validation->set_rules('username','username','required|min_length[5]');
				//note obligatoire et étant noté de 0 a 5 étoiles sinon erreur
		$this->form_validation->set_message('required');
		$this->form_validation->set_rules('rate','rate it','required|greater_than[0]|less_than_equal_to[5]');		
				//contenu obligatoire et ayant 500 caractères max sinon erreur
		$this->form_validation->set_message('required');
		$this->form_validation->set_rules('content','your mind','required|max_length[500]');

		if ($this->form_validation->run()==TRUE)
		{
			$this->Comments_model->comments($idProduit);
		}

		$this->load->view('Info',['idgame'=>$idArticle, 'show' => $showComments]);

	}
	public function brands($test)
	{
		$this->load->model('Produit_model');
		$marqueOnly=$this->Produit_model->brandnew($test);
		$this->load->view('InfoMarque',['idgame'=>$marqueOnly]);
	}
}
