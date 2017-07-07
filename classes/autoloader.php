<?php
	class autoloader{
		public function __construct(){
			$this->the_autoloader();
		}
	}
	function autoLoad($class_name){
		// Obtaining the file containing the required class
		$filename = dirname(__FILE__).DIRECTORY_SEPARATOR.''.strtolower($class_name).'.php';
		// if the file exists and can be read, then include it.
		if(is_readable($filename)){
			require $filename;
		}
	}
	function the_autoloader(){
		if( version_compare(PHP_VERSION, '5.1.2', '>=') ){
			// spl_autoload was introduced in PHP 5.1.2
			if ( version_compare(PHP_VERSION, '5.3.0', '>=') ){
				// the prepend parameter (last boolean param) was introduced in PHP 5.3.0
				spl_autoload_register('autoLoad', true, true);
			} else {
				spl_autoload_register('autoLoad');
			}
		} else {
			/**
			 * Fall back to traditional autoload for old PHP versions
			 * @param string $classname The name of the class to load
			 */
			 function __autoload($class_name){
				autoLoad($class_name);
			 }
		}
	}
?>