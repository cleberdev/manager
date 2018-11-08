<?php
namespace MyClass;

class Aux {
	/**
	 * Construct an colection of URL's
	 */
	public function _construct() {	}

/**
 * [redirect url default for user]
 * @method redirect
 * @param  string   $link          [path]
 * @param  boolean  $redirectClass [if true extract class for redirect. If false redirect for path present on string]
 */
	public static function redirect( $link = "", $redirectClass = false) {
      if($redirectClass){
          if ($link==-1){
            $extract = explode("\\", $link);
            echo "<script>history.go(-1);</script>";
          }else{
            echo "<script>document.location.href='".end($extract)."'</script>";
          }

      }else{
        if ($link==-1){
          echo "<script>history.go(-1);</script>";
        }else{
          echo "<script>document.location.href='".$link."'</script>";
        }
      }

	}
}//AND CLASS
