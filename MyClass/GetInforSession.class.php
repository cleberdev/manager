<?php
/**
 * Class of the methods statics for access sessions
 */
namespace MyClass;

use System\DB\Database;
use MyClass\Persistence\GetRecord;

class GetInforSession
{

	/**
	 * Construct an colection of URL's
	 */
	public function __construct()
	{	}


	/**
	 * [getInfor description = method that return information ats users conected.]
	 *
	 * @param  string $session [name session (key of the array session)]
	 * @param  string $param   [value of the session]
	 * @return [type]          [String or Array of the session]
	 */
	public static function getInfor( $session = '', $param = '')
	{
		if(!empty($session)){
			if(isset($_SESSION[$session])){
				if(empty($param)){
					return array($_SESSION[$session]);
				}else{
					return $_SESSION[$session][$param];
				}

			}else{ return false ;}
		}else{
			return false;
		}
	}


	/**
	 * [getDataSessionInDb description] - method that getting data in DB using information of the session, passed in param.
	 * @param  [type] $param [ID informed for table on DB]
	 * @param  [type] $table [name of the table on DB]
	 * @return [type]        [a array of the datas or false if the param is empty]
	 */
	public static function getDataSessionInDb($param = null, $table = null)
	{
		if(!is_null($param)){
			if(!is_null($table)){
				try {
					$dt = new GetRecord();

					return array( $dt->getRecordId($table, $param) );

				}catch (\Exception $e) {
					return $e->getMessage();
				}
			}else{
				return false;
			}

		}else{
			return false;

		}

	}

}
