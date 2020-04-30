<?php

class User extends dbObject{
	
	protected static $db_table = "users";
	protected static $db_table_fields = array('uname', 'pword', 'fname', 'lname', 'img');
	
	public $id;
	public $uname;
	public $fname;
	public $lname;
	public $pword;
    public $img;
    
    public $tmpPath;
    public $uploadDir = "user_img";
    public $imgPlace = "user_img/pic.png";
    
    
    public function uploadUserImg(){ //method for saving
    
            if(!empty($this->errors)){
                return false; 
            }

            if(empty($this->img) || empty($this->tmpPath)){
                $this->errors[] = "the file was not available";
                return false;
            }

            $targetPath = SITE_ROOT . DS . 'admin' . DS . $this->uploadDir . DS . $this->img;

            if(file_exists($targetPath)){
                $this->errors[] = "The file {$this->img} already exists";
                return false;
            }

            if(move_uploaded_file($this->tmpPath, $targetPath)){
                
                    unset($this->tmpPath);
                    return true;
            
            }else{

                $this->errors[] = "the file directory does not have permission";
                return false;

            }
    }
    
    
    
    public function imagePathPlace(){
        
        return empty($this->img) ? $this->imgPlace : $this->uploadDir.DS.$this->img;
        
    }
    
    public function deleteUserPic(){
    
        if($this->delete()){

            $targetPath = SITE_ROOT . DS . 'admin' . DS . $this->uploadDir . DS . $this->img;

            return unlink($targetPath) ? true : false;
        }else{
            return false;
        }
    
    }
    
	public static function verifyUser($uname, $pword){
		global $db;
		
		$uname = $db->escapeString($uname);
		$pword = $db->escapeString($pword);
		
		$sql = "SELECT * FROM " . self::$db_table ." WHERE ";
		$sql .= "uname = '{$uname}' ";
		$sql .= "AND pword = '{$pword}' ";
		$sql .= " LIMIT 1 ";
		
		$theResultArray = self::findByQuery($sql);
		
		return !empty($theResultArray) ? array_shift($theResultArray) : false;
	}
	

}

?>