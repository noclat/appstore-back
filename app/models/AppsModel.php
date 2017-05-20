<?php
class AppsModel
{
	protected $index;

	protected $allowed_properties = ['name', 'image', 'link', 'category', 'rank'];

	public function __construct() {
		$client = new \AlgoliaSearch\Client(ALGOLIA_APP, ALGOLIA_API_KEY);
		$this->index = $client->initIndex('apps');
	}

	public function save(Array $data, $id = null) {
		$data = array_intersect_key($data, array_flip($this->allowed_properties));
		$data['objectID'] = $id ?? uniqid();
		return $this->index->saveObject($data);
	}

	public function delete($id = null) {
		return $this->index->deleteObject($id);
	}
}
