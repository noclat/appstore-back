<?php
class Apps extends Controller
{
	public function __construct() {
		$this->load('AppsModel');
	}

	public function post() {
		$this->response([
			'status' => 'ok',
			'result' => $_POST,
		]);
	}

	public function delete($id = null) {
		$this->response([
			'status' => 'ok',
			'result' => $id,
		]);
	}
}
