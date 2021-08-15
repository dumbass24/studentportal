<?php 
class Crud extends Controller
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Crud_model');
	}
        /*Insert*/
	public function insertdata()
	{
		/*load registration view form*/
		$this->load->view('insert');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['Firstname']=$this->input->post('fname');
			$data['Lastname']=$this->input->post('lname');
			$data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $data['gender']=$this->input->post('gender');
            $data['language']=$this->input->post('language');
            $data['year']=$this->input->post('year');
			$response=$this->Crud_model->insertrecord($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
	
}
?>