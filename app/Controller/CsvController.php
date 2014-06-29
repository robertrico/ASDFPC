<?php 
	class CsvController extends AppController{
		
		public $helpers = array('Html','Form');
		
		public function index(){
		$this->set('orders',$this->Csv->find('all'));
	}
		
		public function csv(){
		$this->set('orders',$this->Csv->find('all'));
		$content = "food";
		$filename = $orders['Csv']['name'];
		
			if ($this->request->is('Post')) {

				$fp = fopen('files/' .$filename.'.txt', 'w');
				fwrite($fp,$content);
				fclose($fp);
				return $this->redirect(array('action' => 'index'));
			}
		
		}
		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('index', 'view','csv');
		}
			
			
		
		
}

		
		