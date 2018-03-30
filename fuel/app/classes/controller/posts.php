<?php
class Controller_Posts extends Controller_Template{
	public function action_index() {
		$data = array();
		$session = Session::instance(); 
		$username = $session->get('username');
		
		$this->template->title = 'Welcome!';
		$this->template->content = View::forge('posts/index', $data);
	}
	public function action_add() {
		$data = array();
		$this->template->title = 'Add';
		$this->template->content = View::forge('posts/add', $data);
	}	
		public function action_twine() {
		$data = array();
		$this->template->title = 'Largest Twine Ball in the World';
		$this->template->content = View::forge('posts/twine', $data);
		}
	public function action_zoo() {
		$data = array();
		$this->template->title = 'Safari Zoological Park';
		$this->template->content = View::forge('posts/zoo', $data);
	}
	public function action_gardenofeden() {
		$data = array();
		$this->template->title = 'Garden of Eden';
		$this->template->content = View::forge('posts/gardenofeden', $data);
	}
	public function action_eiteljorg() {
		$data = array();
		$this->template->title = 'Eiteljorg Museum';
		$this->template->content = View::forge('posts/Eiteljorg-Museum-Of-American-Indians-And-Western-Art.php', $data);
	}
	public function action_dunes() {
		$data = array();
		$this->template->title = 'Indiana Dunes';
		$this->template->content = View::forge('posts/Indiana-Dunes.php', $data);
	}
	public function action_fortWayneZoo() {
		$data = array();
		$this->template->title = 'Fort Waynes Children Zoo';
		$this->template->content = View::forge('posts/Fort-Waynes-Children-Zoo.php', $data);
	}
	
	public function action_aboutus() {
		$data = array();
		$this->template->title = 'About Us';
		$this->template->content = View::forge('posts/aboutus.php', $data);
	}
	
	public function action_login(){
		$data = array();
		$status = 'success';
		
		$this->template->title = 'Login';
		$this->template->content = View::forge('posts/loginForm', $data);
		$this->template->content -> set_safe('status',$status);
		
	}
	public function action_checkLogin()
	{
		$data = array();
		$username = Input::post('username');
		$password = Input::post('password');
		if($username === 'ct310' && md5($password) === '48f2f942692b08ec9de1ef9ada5230a3')
		{
			Session::create(); 
			Session::set('username', $username);
			Session::set('userid', 12345);
			$this->template->title = 'Login';
			$this->template->content = View::forge('posts/success', $data);
			
			
		}
		else 
		{
			$this->template->title='Login';
			$this->template->content = View::forge('posts/loginForm', $data);
			$this->template->content->set_safe('status','error');
			
		}
	
	}
	public function action_logout()
	{
		$data = array();
		$session = Session::instance(); 
		$session->destroy();
		$this->template->login='Login';
		$this->template->title = 'Logout';
		$this->template->content = View::forge('posts/logout', $data);
		
		
	}
}
