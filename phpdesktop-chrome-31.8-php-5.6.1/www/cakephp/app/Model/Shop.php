<?php
App::uses('AppModel', 'Model');
/**
 * Seminar Model
 *
 */
class Shop extends AppModel {

	public $actsAs = array('Search.Searchable');

	public $filterArgs = array(
		'name' => array('type' => 'query', 'method' => 'orConditions'),
		'display' => array('type' => 'value'),
	);

	public function orConditions( $data = array() ) {
		$filter = $data['name'];
		$cond = array(
			'OR' => array(
				$this->alias . '.name LIKE' => '%' . $filter . '%',
				$this->alias . '.kana LIKE' => '%' . $filter . '%',
			),
		);
		return $cond;
	}

	public $validate = array(
		'name' => array(
			array(
				'rule' => 'notEmpty',
				'message' => '店舗名を入力して下さい',
			),
		),
	);

}
