<?php
	App::uses('AppController', 'Controller');
	

	class MoonController extends AppController {
	/*
	* Include Scripts for use with Cakephp
	*/
		public $helpers = array('Js' => array('Jquery'));
		
		//public function beforeFilter() {
		//	parent::beforeFilter();
		//	$this->Auth->allow('space', 'view');
		//}
		public function index(){
			
		}
		public function space(){
			
		}
		public function moon(){
			
		}
		public function hello(){
			echo "Hello World!";
		}
	}
