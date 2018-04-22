<?php
use Model\Posts;
class Controller_Posts extends Controller_Template{
		//home page
	public function action_index() {
		$session = Session::instance(); 
		$demos = Posts::find('all');
		$posts = Posts::find('all');
		$data = array('posts'=> $posts);

		$view = View::forge('posts/index', $data);
		
		$username = $session->get('username');
	
		$view->set_safe('demos', $demos);
		
		$this->template->title = 'Welcome!';
		$this->template->content = $view;
	}
	
		//add new attraction
	public function action_addAttraction() {
		$data = array();
		if(Input::post('add')){
            
        $image = Arr::pluck(Upload::instance(), 'name')[0];
            
        $config = array(
                'path' => DOCROOT.'assets/img/',
                'randomize' => false,
                'ext_whitelist' => array('jpg', 'jpeg','png'),
                'max_size' => 1000000,
                'auto_rename' => false,
                'overwrite' => false,
            );
            Upload::process($config);
            if(Upload::is_valid()) {
                if(!File::exists(DOCROOT . 'assets/img/' . $image)) {
					$post = new Posts();
					$post->title = Input::post('attTitle');
					$post->state = Input::post('attState');
					$post->body = Input::post('attBody');
					$post->image = $image;
					Upload::save();
					$post->save();
					Response::redirect('/');
                }
            }
        }
		$this->template->title = 'Add Attraction';
		$this->template->content = View::forge('posts/addAttraction', $data);
	}	
		
	
			//general attraction control
		public function action_attraction($att_id){
			//comment
		$demos = Posts::find($att_id);
			//$comment = Model_Posts::find('comment',array('where'=>array('att_id' => $att_id)));
		$this->template->title = $demos->title;
			//array to pass to view
		$data = array();

		$view = View::forge('posts/attraction', $data);
		$attractionid =  Posts::find($att_id);
		$view->set_safe('attractionid', $attractionid);
		$view->set_safe('demos', $demos);
		$this->template->content = $view;
		}

	

		//aboutus page
	public function action_aboutus() {
		$data = array();
		$this->template->title = 'About Us';
		$this->template->content = View::forge('posts/aboutus.php', $data);
	}
		//login page
	public function action_login(){
		$data = array();
		$status = 'success';
		
		$this->template->title = 'Login';
		$this->template->content = View::forge('posts/loginForm', $data);
		$this->template->content -> set_safe('status',$status);
	}
	
	public function action_passwordreset() {
			\Package::load('email');
			$data = array();
			$this->template->title = 'Recover my account';
			$this->template->content = View::forge('resetpass/passwordreset', $data);
			
			
	}
		
	public function action_checkLogin()
	{
		$data = array();
		$username = Input::post('username');
		$username2 = Input::post('username');
		$password = Input::post('password');
		//username and password same for now
		$ct310 = $username2 === 'ct310' && md5($password) === 'a6cebbf02cc311177c569525a0f119d7';
		$user1 = $username2 === 'mirrorad' && md5($password) === 'd0763edaa9d9bd2a9516280e9044d885';
		$user2 = $username2 === 'saurav' && md5($password) === '8cf674180ea201eb14b12486eaef9f28';
		$user3 = $username === 'aaronper' && md5($password) === '449a36b6689d841d7d27f31b4b7cc73a';
		$user4 = $username2 === 'aaronadmin' && md5($password) === 'd31bfd85d0a81046f70304ebfecdffbf';
		$user5 = $username === 'bsay' && md5($password) === '790f6b6cf6a6fbead525927d69f409fe';
		
			if($user3 || $user5)
		{
			Session::create(); 
			Session::set('username', $username);
			Session::set('userid', 12345);
			$this->template->title = 'Login';
			$this->template->content = View::forge('posts/success', $data);
		}
		
		elseif($ct310 || $user4 || $user2||$user1)
		{
			Session::create();
			Session::set('username', $username2);
			Session::set('userid', 12346);
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
	
		public function action_register(){
		$data = array();
		$this->template->title = 'Register';
		$this->template->content = View::forge('register/register', $data);
	
	}
	
	public function action_resetsuccess(){
		$data = array();
		$this->template->title = 'Successful Password Reset!';
		$this->template->content = View::forge('resetpass/success', $data);
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
