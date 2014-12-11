<?php
App::uses('AppController', 'Controller');
App::import ('Vendor','tcpdf/tcpdf');
/**
 * Documents Controller
 *
 * @property Document $Document
 * @property PaginatorComponent $Paginator
 */
class DocumentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Auth');

/**
 * index method
 *
 * @return void
 *
 * */
    public function beforeFilter() {
        parent::beforeFilter();
        $this -> Auth -> allow('view');
        $this -> layout = 'bootstrap';
    }
	public function index() {
		$this->Document->recursive = 0;
		$this->set('documents', $this->Paginator->paginate());
    }
    public function businesscard() {
    }


    public function buildproof(){
        $this->layout = 'ajax';
        if ($this->request->is('post')){
           $doc = $this->Document->findById('1'); 
           $this->Document->id = $doc['Document']['id'];
           $this->Document->saveField('x', ($this->request->data['x']));
           $this->Document->saveField('name_x', ($this->request->data['name_x']));
           $this->Document->saveField('y', ($this->request->data['y']));
           $this->Document->saveField('name_y', ($this->request->data['name_y']));
           $this->Document->saveField('com_name', ($this->request->data['com_name']));
           $this->Document->saveField('name', ($this->request->data['name']));
        }
    
    
    
    }


    public function b_card(){
        $doc = $this->Document->findById('1'); 
        $this->Document->id = $doc['Document']['id'];
        // It is saved in the db in 700x400px. divide by 2 to get 350/200. Business cards are 3.5x2. Simple rations
        // to achieve similar placement
        $left = (($doc['Document']['x'])/2)/100; 
        $top = ($doc['Document']['y']/2)/100; 
        $name = $doc['Document']['name'];          
        // create new PDF document
        $pdf = new TCPDF('L', 'in', array(3.5,2), true, 'UTF-8', false);
        $pdf->SetMargins(0, 0, -5, true);
        $pdf->SetAutoPageBreak(false,0);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Robert Rico');
        $pdf->SetTitle('Business Card');

        // set default header data
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);



        // ---------------------------------------------------------

        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('dejavusans', '', 14, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage('','',false,false);


        // Set some content to print
        //$html = "Hello";
        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, $left, $top, $name, 0, 0, 0, true, '', true);

        
        $pdf->AddPage();
        $html2 = "World"; 
        $pdf->writeHTMLCell(0, 0, '', '', $html2, 0, 0, 0, true, '', true);
        // ---------------------------------------------------------

        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $pdf->Output('example_001.pdf', 'I');

    }
}
