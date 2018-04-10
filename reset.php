<?php 
use Model\Resetpass;
use Model\Users;
class Controller_Reset extends Controller_Template
{

	public function action_grabemail()
	{
		\Package::load('email');
		
		$data = array();
		
		$this->template->title = 'Reset Password';
		
		$this->template->content = View::forge('resetpass/grabemail', $data);
	
		if(Input::post('reg2'))
		{
			
		/***** setting email to post email *****/
		
		$email = $_POST['email'];
		
		/***** recipeint is the email *****/
		
		$recipient = $email;
		
		$key = Resetpass::generateRandomString(10);

		$str = Uri::create('/reset/:some', array('some' => 'passreset', 'and' => $key), array('vref' =>':and'));
		
			
		
		/***** passing recipient to select query *****/
		
		$new = new Resetpass();
		$new-> UserID = DB::select('id')->from('users')->where('email', 'like',$recipient);
		
		$new -> hashtoken = $key;
		$new-> save(); 
	
	
		/***** send email  *****/
		$email =  \Email::forge('default', array('driver' => 'smtp'));
		
		$email->subject('Password Recovery');
		
		$email->from('xemphis@gmail.com', 'Ct310');
		
		$email->to($recipient, 'email');
		
		$email->body($str);
		
		try
	{	
		$email->send();
	}
		catch(\EmailValidationFailedException $e)
		{
		/***** The validation failed *****/
		}
		catch(\EmailSendingFailedException $e)
		{
		/***** The driver could not send the email *****/
		}
	Response::redirect();
		} 
	} // end of grabemail
	
	//View for passreset
		public function action_passreset($vreff = null)	
	{	
			Session::create(); 
		
			$data = array();
		$this->template->title = 'Passreset';
		$content = View::forge('resetpass/passreset');
		if (isset($_GET['vref'])){
		$vref = $_GET['vref'];
		$content->set_safe('vref',$vref);
		
	
	}
		$this->template->content = $content;
		
		
		if (Input::post('send')){
		$hashtoken = Input::post('vref');
		$pw1 = Input::post('newpw1');
		$pw2 = Input::post('newpw2');
		$demo = Resetpass::find('first', array(
			'where' => array(
				array('hashtoken', $hashtoken),
			),
		))['hashtoken'];
		
		$userid = Resetpass::find('first', array(
		'where' => array(
			array('hashtoken', $vref),
			),
		))['UserID'];
		
		if (strcmp($demo, $hashtoken) ==0) {
		if (strcmp($pw1, $pw2) == 0){	
		$entry = Users::find($userid);
		$entry->password = Input::post('newpw2');
		$entry-> save();
		$session = Session::instance(); 
		$session->destroy();
		Response::redirect('');
	} else {
		$session = Session::instance(); 
		$session->destroy();
		$data = array();
		$this->template->title = 'Passwords not the same';
		$content = View::forge('resetpass/passreset');
		
	}
				}
			} 
		}
	}

		

	
	
	
