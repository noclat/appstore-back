<?php
class Apps extends Controller
{
	public function __construct() {
		$this->load('AppsModel');
	}

	public function post() {
		// Data validation
		$validation = new Validation();
		$validation->set('name', 'required', 'Name can not be empty.');
		$validation->set('rank', function($value) {
			return is_numeric($value) && $value > 0;
		}, 'Rank should be a positive number.');
		$validation->set('image', 'url', 'Image should be a valid URL.');
		$validation->set('link', 'url', 'Link should be a valid URL.');

		if (!$validation->run()) {
			// Error
			$this->response([
				'status' => false,
				'errors' => $validation->errors(),
			], 400);
		} else {
			// Save
			$result = $this->AppsModel->save([
				'name' => $validation->get('name'),
				'image' => $validation->get('image'),
				'link' => $validation->get('link'),
				'category' => $validation->get('category'),
				'rank' => (int)$validation->get('rank'),
			]);

			// Response
			$this->response([
				'status' => 'ok',
				'result' => $result,
			]);
		}
	}

	public function delete($id = null) {
		$result = $this->AppsModel->delete($id);
		$this->response([
			'status' => 'ok',
			'result' => $result,
		]);
	}
}
