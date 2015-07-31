<?php

class MainController extends IndexController
{

	public function actionIndex()
	{
		$this->view = 'main';
	}

}