<?php

class MainController extends IndexController
{

	public function actionIndex()
	{
		$var = 'Hello world';

		$this->design->assign('text' ,$var);

		$this->view = 'main';
	}

}