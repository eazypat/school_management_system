<?php

class RphpFunctions extends StrFunctions{//php redifined functions
	
	 //redirect to another page(static)
 public static function redirect($locationPath){
    header("Location: " . $locationPath);
	exit;	
 }

// Help to confirm the page currently loaded(static)
 public static function CheckPage($Page){
	$path = $_SERVER['PHP_SELF'];
	$len = strlen($path);
	$Lpage = substr($path,-($len - (strrpos($path,'/') + 1)));
	$Lpage2 = substr($path,-($len - (strrpos($path,'\\') + 1)));
	if ($Lpage ==   $Page || $Lpage2 == $Page){
		return true;
	}else{
		return false;
	}
}

//check if item(s) are sent trough url (GET)
function CheckGet($arrPost){
	$ck = true;
	//$arr = array();
	if (is_array($arrPost)){
		foreach($arrPost as $post){
		    if (!isset($_GET[$post]) || (empty($_GET[$post]) && $_GET[$post] != '0')){
				//if(!isset($_FILES[$post])){
					return false;	
				//}
				
			}
	    }
	}elseif(is_string($arrPost)){
		if(!isset($_GET[$arrPost]) || (empty($_GET[$arrPost]) && $_GET[$post] != '0')){
			return false;	
		}
	}
return $ck;	
}

//Help handle multiple parameter for methods
public function __call($name, $arrval){
	if($name == 'CheckPost_r'){
		return $this -> CheckPost($arrval);
		
	}elseif($name == 'CheckGet_r'){
		return $this -> CheckGet($arrval);
	}
}

//check if item(s) are posted
 function CheckPost($arrPost){
	$ck = true;
	//$arr = array();
	//print_r($arrPost);
	//$adad = '';
	if (is_array($arrPost)){
		foreach($arrPost as $post){
			
		    if (!isset($_POST[$post]) || (empty($_POST[$post]) && $_POST[$post] != '0')){
				if(!isset($_FILES[$post]) || empty($_FILES[$post])){
					return false;	
				}
				
			}
	    }
	}elseif(is_string($arrPost)){
		if(!isset($_POST[$arrPost]) || empty($_POST[$arrPost])){
			return false;	
		}
	}
return $ck;	
}

	
}


class StrFunctions{//String manipulation functions all are static
	//form a javascript code
public static function Script($JavascriptCode){
$scripthead = "<script type=\"text/javascript\">";
$scriptClose = "</script>";
echo $scripthead . $JavascriptCode . $scriptClose;	
}

//Escape for string
public static function esc4str($str){
	$str = str_replace("'","\'",$str);
	$str = str_replace('"','\"',$str);
	return $str;
}

public static function truncstr($str,$NumChar){
	 $topicdis = '';
	  if(strlen($str) > $NumChar){
		  $i = 0;
		  while($i < $NumChar){
			   $topicdis .= $str[$i];
			 if(ctype_upper($str[$i])){
				 $i++;
			 }
			 $i++;
		  }
		$topicdis .= " ..."; 
	  }else{
		 $topicdis = $str;
	  }
	  return $topicdis;
}
	
}


class DbFunctions extends RphpFunctions{//deals with database work and file system
	public static $con = NULL;
	public static $hostName = NULL;
	public static $dbName = NULL;
	public static $userName = NULL;
	public static $txt = 'constant value';
	 var $FileDir = "image/";
	//var $ff = 'll';
	 public static function Staticf($a){
		
	}
	
	
	//contructor
	function DbFunctions($host = "",$user = "",$db = "",$password = ""){
		if($host != "" && $user != "" && $db != ""){
			$this -> Connectdb($host,$user,$db,$password);
		}
		
	}
	//private $x = array(1,2,3);
	 public function __call($name, $values)
    {
        if($name == "Select4rmdbtbFirstRw_r"){//alternative if the query is sent to get the first row of a database select rst
			$rst_info1 = $this -> RunQuery($values[0]);
		 return $this -> FirstRw($rst_info1);
		}
		
    }
	
	//Conect to db
	function Connectdb($host,$user,$db,$password = ""){
		
		$convar = @mysql_connect($host,
		$user, $password);
		if (!$convar) {
		echo( "Cannot connect to server" );
		exit();
		}
		
		// Select the jokes database
		if (! @mysql_select_db($db) ) {
		echo( "Cannot connect to db");
		exit();
		}
		self::$con = $convar;
		self::$hostName = $host;
		self::$dbName = $db;
		self::$userName = $user;
		return $convar;
	}
	
	//function to load select element options
	function LoadOptions($tb,$valField,$DisField,$cond = ""){
		$rstl = $this->Select4rmdbtb($tb,$valField.",".$DisField,$cond);
		if(is_array($rstl)){
			if($rstl[1] > 0){
			  while($rst_arr = mysql_fetch_array($rstl[0])){
				echo "<option value=\"{$rst_arr[0]}\">{$rst_arr[1]}</option>";  
			  }
			}else{
				echo "";
			}
		}else{
			echo "";
		}
	}
	
	//insert value into database
  function Insert2DbTb($fields,$tb){
	  $sql = "INSERT INTO ". $tb ." SET ";
		  foreach($fields as $key => $val){
			  if(is_string($val) || empty($val)){
				  $val = "'" . mysql_escape_string($val) . "'";
			  }else if(!is_numeric($val)){
				 $val = "'" . mysql_escape_string($val) . "'"; 
			  }
				  $sql .= "`".$key."`" . "=" . $val . ", ";
		  }
		  $sql = trim($sql,', ');
		 
		  //return $sql;
			/* "JokeText='$joketext', " .
			 "JokeDate=CURDATE()";*/
	  if (mysql_query($sql)) {
		return '#';
	  } else {
	  return mysql_error()."\r Generated query: " . $sql; 
	  }
  }
  
  //upload file
  function UploadFile($file,$size,$UseFileName = false,$replace = false,$extr=""){
	  $error = "";
	$message = "";
	    $target_file = "";
		$val = "";
		$base_name = basename($_FILES[$file]['name']);
		
		//$target_file = $target_file . $base_name;
	if (empty($_FILES[$file]['name']) || !isset($_FILES[$file]['name'])){
		$error = "1";
		$message = "No file found";
	}else{
		//analyse file name
		$ipinfo = pathinfo($_FILES[$file]['name']);// get the file break down
				$idir = $ipinfo['dirname'];
                $ibaseNme = $ipinfo['basename'];
                $iext =  $ipinfo['extension'];
                $ifileN = $ipinfo['filename'];
				if($extr != ""){
					$iext = $extr; 
				}
		if($UseFileName === false){
				$val = mt_rand();
		    $target_file = $this -> FileDir . $val . "." . $iext;
		}else{
			if(is_string($UseFileName)){
				$target_file = $this -> FileDir . $UseFileName . "." . $iext;
			}else{
			$target_file = $this -> FileDir . $base_name;
			}
		}
	    //make dir if directary not exits
		if(!file_exists($this -> FileDir)){	
			mkdir($this -> FileDir);
		}
		
		//if not to overide when exist
		if($replace == false){
		while(file_exists($target_file)){
			if($UseFileName == false){
			  $val = mt_rand();
			  $target_file = $this -> FileDir . $val . "." . $iext;
			}else{
				//process the filename to form another file name (e.g filename_2)
				$pinfo = pathinfo($target_file);// get the file break down
				$dir = $pinfo['dirname'];
                $baseNme = $pinfo['basename'];
                $ext =  $pinfo['extension'];
                $fileN = $pinfo['filename'];
				$pos = strrpos($fileN,"_"); //seacrh for _ at the end of the filename
				if($pos === false){// if not found add _2 to defferentiate the new file
					$fileN = $fileN ."_2";
				}else{
					$cntNo = substr($fileN,$pos + 1); //get the string after the Underscore(_)
					if(is_numeric($cntNo)){// if it is a number add one to it to deferentiate it from the first
						$fileN = rtrim($fileN,$cntNo);
						$cntNo =(int)$cntNo + 1;
						$fileN .= $cntNo;
					}else{//if not number just add _2 to the file name
						$fileN = $fileN ."_2";
					}
				}
				$target_file = $dir . "/" . $fileN . "." .$ext; //reform file path
			}
		}
		}
		
		//check if filename is important check only size else check type(image) and size
		if($UseFileName === true){
			$conds = ($_FILES[$file]['size'] < (int)$size);
		}else{
			$conds = (($_FILES[$file]['type'] == "image/gif") || ($_FILES[$file]['type'] == "image/jpeg") || ($_FILES[$file]['type'] == "image/pjpeg")) && ($_FILES[$file]['size'] < (int)$size);
		}
		
			if ($conds){//start check img type
			      if ($_FILES[$file]['error'] > 0){// start check if error
				    $error = "3";
					if($_FILES[$file]['error'] == 1){
						$message = "File exceeds the maximum upload size";
					}else{
				    $message = "Error :".$_FILES[$file]['error'];
					}
				  }else{
					/* if(strlen($base_name) > 50){
						$error[] = "Passport";
				//$message .= "Name of picture must not be more than 50 characters; edit the name. <br />"; 
				     }else{*/
					  
					             if (move_uploaded_file($_FILES[$file]['tmp_name'],$target_file)){	
										return array('Success' => true, 'Error' => $error, 'ErrorText' => $message, 'Filename' => $target_file);
									}else{
									$error = "4";
									$message = "Cannot upload file";	
									} 
				 
				}
			
			}else{
				$error = "5";
			$message .= "Invalid image file type or <br/> Image size too big(must not be more than ".($size/1000) . "KB)";
				
			}
			
		
	}
	return array('Success' => false, 'Error' => $error, 'ErrorText' => $message, 'Filename' => '');
  }// upload function ends
  
  //authenticate
  function Authenticate($valus,$tb){
	  if (is_array($valus) && isset($tb)){ 
		 $query = "SELECT * FROM {$tb} WHERE ";
		 foreach($valus as $field => $value){
			$q = (is_string($value))?"'":""; 
			 $query .= $field . "=" . $q . $value . $q . " AND ";
		 }
		 $query = trim($query," AND ") . " LIMIT 1";
	  
	  $rst = mysql_query($query);
	  if($rst){
		  if(mysql_num_rows($rst) == 1){
			 $rst_set = mysql_fetch_array($rst);
			 return array(true,$rst_set); 
		  }else{
			 return array(false,NULL); 
		  }
	  }else{
		 return array(false,mysql_error());
	  }
	 }else{
		return array(false,'Invalid Input value parameter; Function takes array and string table name'); 
	 }
  }

  //Check existence in database
  function CheckDbValue($values,$tb){
	 $rst =  $this -> Authenticate($values,$tb); //check if exist
	 if( $rst[0] == true){//if exist
		 return true;
	 }else{
		 if($rst[1] == NULL){//if not exist
			return false; 
		 }else{// if error
			return $rst[1]; 
		 }
	 }
	  
  }
  
  //Select from database table
  function Select4rmdbtb($tbs,$fields = "",$cond = ""){
	  if(isset($tbs)){
		  $query = "SELECT ";
		  //process fileds
		  $filds = "";
		  if(is_array($fields)){// fileds are morthen 1
			  foreach($fields as $f){
				 $filds .= $f . ", "; 
			  }
			  $filds = trim($filds, ", ");
		  }elseif(is_string($fields) && $fields != ""){
			  $filds = $fields;
		  }else{
			  $filds = "*";
		  }
		  $query .= $filds . " FROM ";
		  
		  
		  //process tables
		  $tbstr = "";
		  if(is_array($tbs)){// fileds are morthen 1
			  foreach($tbs as $t){
				 $tbstr .= $t . ", "; 
			  }
			  $tbstr = trim($tbstr, ", ");
		  }else{
			  $tbstr = $tbs;
		  }
		  
		  $query .= $tbstr;
		  
		  //process conditions
		  if($cond != ""){
			$query .= " WHERE " . $cond;  
		  }
		 return $this -> RunQuery($query);
	  }
  }
  
  //update table records
 function Updatedbtb($tb,$fieldsValeus,$cond = ""){
	 if(isset($tb) && isset($fieldsValeus)){
		 $qy = "UPDATE {$tb} SET ";
		 if(is_array($fieldsValeus)){
			 foreach($fieldsValeus as $field => $value){
				 $sep = (is_string($value)  || empty($val) )?"'":"";
				$qy .= $field ." = ". $sep . mysql_escape_string($value) . $sep . ", "; 
			 }
			 $qy = trim($qy,", ");
			 if($cond != ""){
				$qy .= " WHERE ". $cond ; 
			 }
			 //echo $qy;
			 return $rst = $this -> RunQuery($qy,"Update");
		 }
		 
		 
	 }
 }
  //run query
  
  function RunQuery($query,$type = ""){
	  $rst = mysql_query($query);
	  if($rst){
		  if($type == ""){
			 return array($rst,mysql_num_rows($rst));  
		  }else{
			 return array($rst, mysql_affected_rows());
			  //return array($rst, $query);
		  }
		
	  }else{
		 return mysql_error() . "<br/>". $query; 
	  }
  }
  
  //Get the total number of rows
  function Select4rmdbtbNumRw($tbs,$fields = "",$cond = ""){
	   $rst_info1 = $this -> Select4rmdbtb($tbs,$fields,$cond);
		   if(is_array($rst_info1)){
			   return  $rst_info1[1];
		   }else{
			   return "";
		   }
  }
  
  //get and return the first rowset of a select result
  function Select4rmdbtbFirstRw($tbs,$fields = "",$cond = ""){
	   $rst_info1 = $this -> Select4rmdbtb($tbs,$fields,$cond);
		 return $this -> FirstRw($rst_info1);
  }
  
  private function FirstRw($queryRst){
	  if(is_array($queryRst)){
			   if($queryRst[1] > 0){
				 return mysql_fetch_array($queryRst[0]);  
			   }else{
				 return NULL;  
			   }
		   }else{
			   return "";
		   }
  }
 
 //check existence of cookie value in the database and redirect to another page if not exist
 function CheckCookie($tb,$field,$cookieName,$redirectto){
	 if(isset($_COOKIE[$cookieName])){
		$id = $_COOKIE[$cookieName];
		$sepr = (is_string($id))?"'":""; 
		$rst_set = $this -> Select4rmdbtb($tb,"","$field = $sepr{$id}$sepr");
		  if(is_array($rst_set)){
			  $rst_row = mysql_fetch_array($rst_set[0]);
			  return array('id' => $id,'rowset' => $rst_row);
		  }else{
			 parent::redirect($redirectto."?errordb"); 
		  }	
		}else{
			parent::redirect($redirectto."?errorcookie"); 
		}
 }
  
  
}
?>