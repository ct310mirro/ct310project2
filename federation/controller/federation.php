<?php
use Model\Posts;
class Controller_Federation extends Controller_Template{
		//home page
	public function action_index() {
		$demos = Posts::find("all");
		$data = array();

        $view = View::forge('federation/index', $data);
		$view->set_safe('demos', $demos);
		$this->template->title = 'Federation';
		$this->template->content = $view;
	}
	
	public function action_status() {
	
        $s = $array = array('status' => 'closed');
        $jj = Format::forge($s)->to_json();

        return $jj;
		$data = array();

        $view = View::forge('federation/index', $data);
        	
		$this->template->title = 'Federation';
		$this->template->content = $view;
	}

	public function action_allstatus() {
	
		$data = array();

        $view = View::forge('federation/allstatus', $data);
        	
		$this->template->title = 'Federation';
		$this->template->content = $view;
	}

	public function action_listing() {
		$arr = array(array('id' => "10",'name' => "Eiteljorg Museum of American Indians and Western Art", 'state' => "IN"), 
					array('id' => "20",'name' => "Largest Twine Ball in the World	", 'state' => "KS"),
					array('id' => "30",'name' => "Garden of Eden", 'state' => "KS"),
					array('id' => "40",'name' => "Safari Zoological Zoo", 'state' => "KS"),
					array('id' => "50",'name' => "Fort Wayne Zoo", 'state' => "IN"),
					array('id' => "60",'name' => "Indiana Dunes", 'state' => "IN"));
		$run = Format::forge($arr)->to_json();

		return $run;
		
		$data = array();

        $view = View::forge('federation/index', $data);
        	
		$this->template->title = 'Federation';
		$this->template->content = $view;
	}

	public function action_attraction($s) {
		$demos = Posts::find($s);
		$arr = array(array('id' => $demos->id,'name' => $demos->title, 'desc' => $demos->body, 'state' => "IN"));
		$run = Format::forge($arr)->to_json();

		return $run;

		$data = array();

        $view = View::forge('federation/index', $data);
	
		$this->template->title = 'Federation';
		$this->template->content = $view;
	}

	public function action_attrimage($imageid) {
		$demos = Posts::find($imageid);
		$cc = $demos->image;
		return Asset::img($cc, array('class' => 'centerPic'));
		
	
		$data = array();

		$view = View::forge('federation/attrimage', $data);
		
		$view->set_safe('image', $image);

		$this->template->title = 'Attrimage';
		$this->template->content = $view;
	}
	
	
	

}
