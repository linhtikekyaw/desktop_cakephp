<?php
App::uses('AppController', 'Controller');
class ShopsController extends AppController {

	public $components = array('Search.Prg');

	public $presetVars = true;

	public $paginate = array();

	public function index() {

		$this->paginate = array(
			'limit' => 2,
		);

		$this->Prg->commonProcess();
		$this->paginate['conditions'] = $this->Shop->parseCriteria($this->passedArgs);

		$shopList = $this->paginate();
		$this->set(compact('shopList'));

	}

}