<?php
class AppsModel
{
	protected $index;

	public function __construct() {
		// initialize API Client & Index
		$client = new \AlgoliaSearch\Client(ALGOLIA_APP, ALGOLIA_API_KEY);
		$this->index = $client->initIndex('apps');
	}

	public function save($id = null) {
		
	}

	public function delete() {

	}
}
