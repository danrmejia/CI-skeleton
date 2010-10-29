<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$data->main_content = "welcome_message";
		$this->load->view('template/main', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */