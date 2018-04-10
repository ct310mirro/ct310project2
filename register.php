<?php 
use Model\Users;

class Controller_Register extends Controller_Template{

	public function action_register() {
			if (Input::post('send')){
		
		$new = Users::forge();
		$new -> username = Input::post('username');
		$new -> email = Input::post('email');
		$new -> password = md5(Input::post('password1'));
		$new-> save();
		Response::redirect('/');
}
		$data = array();
		$this->template->title = 'Register';
		$this->template->content = View::forge('index.php/register/register', $data);
		
		
	
	}
	
		//Model_Post::test(Input::post('username'), Input::post('email'), Input::post('password1')); //call to model to input form information to 
		//db

	}	

