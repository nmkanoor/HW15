<?php
class Model {
	public $text;
	public function __construct() {
		$this->text = 'Hello World!';
	}
}
class View {
	private $model;
	public function __construct(Model $model) {
		$this->model = $model;
	}
	public function output() {
		return '<a href="mvc.php?action=textclicked">' . $this->model->text . '</a>';
	}
}
class Controller {
	private $model;
	public function __construct(Model $model) {
		$this->model->text = 'Text Updated';
	}
}

$model = new Model();
$controller = new Controller($model);
$view = new View($model);
echo $view->output(); 
?>
