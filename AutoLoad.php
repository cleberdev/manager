<?php
/*
 * Autoload
 * Instantiate files in specified directories
 *
 * @Author: Cleber S Santos
 * @Param array with two paramter,
 */
namespace manager;

Class Autoload {

	private $archives;

	/*
	 * Register class in folder specified
	 *  @Param array with two paramter,
	 */
	public function __construct() {
		spl_autoload_register([$this, 'folders']);
	}

	/*
	 * loop in specified directory runing require_once after existence test
	 * @Param $archives
	 */
	private function folders($archives) {
		$this->archives = [str_replace('\\', '/', $archives).'.class.php'];

		foreach ($this->archives as $file) {
			if (file_exists($file)):
			require_once $file;
			endif;
		}
		//dependency Library of require once in loop
		require_once ('MyClass/EngineTemplate/libs/Smarty.class.php');
	}

}

new AutoLoad;
?>
