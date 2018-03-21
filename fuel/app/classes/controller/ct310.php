<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */

class Controller_Ct310 extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{

        $layout = View::forge('ct310/layoutfull');

		$content = View::forge('ct310/index');

		$layout->content = Response::forge($content);
		

		return $layout;
		
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	/**indiana/about */
	public function action_about()
	{

        $layout = View::forge('ct310/layoutfull');

		$content = View::forge('ct310/About-Us');

		$layout->content = Response::forge($content);

		return $layout;
		
	}
	
	public function action_indiana_dunes()
	{

         $layout = View::forge('ct310/layoutfull');

		$content = View::forge('ct310/Indiana-Dunes');

		$layout->content = Response::forge($content);

		return $layout;
		
	}
	public function action_eiteljorg_museum()
	{

        $layout = View::forge('ct310/layoutfull');

		$content = View::forge('ct310/Eiteljorg-Museum-Of-American-Indians-And-Western-Art');

		$layout->content = Response::forge($content);

		return $layout;
	
	}
	public function action_fort_wayne_zoo()
	{

        $layout = View::forge('ct310/layoutfull');

		$content = View::forge('ct310/Fort-Waynes-Children-Zoo');

		$layout->content = Response::forge($content);

		return $layout;
		
	}
	public function action_login()
	{
		
		$content = View::forge('ct310/login');
	
		return $content;
	}

	public function action_checkLogin()
	{   
		$username = Input::post('username');
		$password = Input::post('password');
		$user1 = "novus";
		$pass1 = "3edf8ca26a1ec14dd6e91dd277ae1de6";
		$user2 = "sbhuju";
		$pass2 = "f4c1a511d1c5dba537037e7dde905cfe";
		$user3 = "ct310";
		$pass3 = "a6cebbf02cc311177c569525a0f119d7";
		
		$userid = "12345";
		
		
		  $user = Input::post('username');
		  $pass = md5(Input::post('password'));
		  $user1Auth = ($user == $user1 && $pass == $pass1);
		  $user2Auth = ($user == $user2 && $pass == $pass2);
		  $user3Auth = ($user == $user3 && $pass == $pass3);
		  if($user1Auth || $user2Auth || $user3Auth) {
			  Session::create();
			  Session::set('username', $username);
		      Session::set('userid', 12345);
			
			$layout = View::forge('ct310/layoutfull');

			$content = View::forge('ct310/index');
	
			$layout->content = Response::forge($content);
			
			return $layout;
			
		  }
		  else {
			$invalidLogin = NULL;
			
			$content = View::forge('ct310/login');
			$content -> set_safe('invalidLogin',"invalid");
			return $content;
		  }
		}


	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_logout()
	{
		$session = Session::instance(); 
		$session->destroy();
		$layout = View::forge('ct310/layoutfull');
		$content = View::forge('ct310/index');
		$layout->content = Response::forge($content);
		return $layout;
	
	}
	public function action_404()
	{
		return Response::forge(Presenter::forge('ct310/404'), 404);
	}
	public function action_test()
	{
		return Response::forge(View::forge('ct310/test'));
	}
}
