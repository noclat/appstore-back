<?php
class Validation
{
	protected $rules = [];
	protected $errors = [];

	public function set($key, $rule, $message) {
		$this->rules[$key] = [$rule, $message];
	}

	public function run() {
		foreach ($this->rules as $key => $item) {
			list($rule, $message) = $item;
			$value = $this->get($key);
			if (is_callable($rule)) { // custom rule
				$result = call_user_func($rule, $value, $_POST);

			} else if (is_string($rule)) { // predefined rules
				switch ($rule) {
					case 'required':
						$result = isset($value) & !empty($value);
						break;
					case 'url':
						$result = filter_var($value, FILTER_VALIDATE_URL);
						break;
				};

			} else { // boolean (enables simple condition)
				$result = $rule;
			}

			if (!$result) {
				$this->errors[$key] = $message;
			}
		}

		return count($this->errors) === 0;
	}

	public function get($key, $alt = null) {
		return $_POST[$key] ?? $alt;
	}

	public function errors() {
		return $this->errors;
	}
}
