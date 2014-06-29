<?php
	App::uses('AppController', 'Controller');
	

	class AnswersController extends AppController {
		public $helpers = array('Js' => array('Jquery'));
		
		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('space', 'view');
		}
		public function space(){
			
		}
		public function hello(){
			echo "Hello World!";
		}
	}
