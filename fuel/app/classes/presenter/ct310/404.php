<?php

/**
 * The welcome 404 presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_ct310_404 extends Presenter
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function view()
	{
		$messages = array('Bad! Bad!', 'The page had vanished', 'This is a an error page', 'Nope, not here.', 'Huh?');
		$this->title = $messages[array_rand($messages)];
	}
}
