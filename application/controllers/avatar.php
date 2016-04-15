<?php

class avatar extends Application
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->data['pageBody'] = 'avatarForm';
		$this->render();
	}
	
	function do_upload()
	{
		$config['upload_path'] = './assets/avatars/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1200';
		$config['max_width']  = '100';
		$config['max_height']  = '100';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			echo "there was a problem uploading the image, try another one.";
		
		}
		else
		{
			$avatarFileName = $_FILES['userfile']['name'];
			$pathInfo = pathinfo($avatarFileName);
			echo "Succesful upload!";
			echo $pathInfo['filename'];
		}
	}
}
?>