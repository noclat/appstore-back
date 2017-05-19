<?php
class Main extends Controller
{
	public function home() {
		$this->view('home');
	}

	public function default() {
		if (uri(0) === 'api') { // JSON responde
			$this->response([
				'status' => false,
				'error' => 'No route matched.'
			], 404);
		} else { // HTML response
			http_response_code(404);
			$this->view('error');
		}
	}
}
