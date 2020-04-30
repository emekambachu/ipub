<?php

class Photo extends dbObject{
    
    protected static $db_table = "photos";
	protected static $db_table_fields = array('title', 'caption', 'description', 'filename', 'alt_text', 'type', 'size');
	
	public $id;
	public $title;
    public $caption;
	public $description;
	public $filename;
    public $alt_text;
	public $type;
    public $size;
    
    public $tmpPath;
    public $uploadDir = "images"; //upload directory or folder
    
    public $errors = array();
    public $uploadErrorsArray = array(


	UPLOAD_ERR_OK           => "There is no error",
	UPLOAD_ERR_INI_SIZE		=> "The uploaded file exceeds the upload_max_filesize directive in php.ini",
	UPLOAD_ERR_FORM_SIZE    => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
	UPLOAD_ERR_PARTIAL      => "The uploaded file was only partially uploaded.",
	UPLOAD_ERR_NO_FILE      => "No file was uploaded.",               
	UPLOAD_ERR_NO_TMP_DIR   => "Missing a temporary folder.",
	UPLOAD_ERR_CANT_WRITE   => "Failed to write file to disk.",
	UPLOAD_ERR_EXTENSION    => "A PHP extension stopped the file upload."					
												

    );
    
public function setFile($file){
    
    if(empty($file) || !$file || !is_array($file)){
        $this->errors[] = "There was no file upload here";
        return false;
        
    }elseif($file['error'] !=0){
        $this->errors[] = $this->uploadErrorsArray[$file['error']];
        return false;
        
    }else{
    
    $this->filename = basename($file['name']);
    $this->tmpPath = $file['tmp_name'];
    $this->type = $file['type'];
    $this->size = $file['size'];
    
    }
    
}

public function picPath(){ //method for picture path
    return $this->uploadDir.DS.$this->filename;
}
    
public function save(){ //method for saving
    
    if($this->id){
        
        $this->update();
        
    }else{
    
        if(!empty($this->errors)){
            return false; 
        }
        
        if(empty($this->filename) || empty($this->tmpPath)){
            $this->errors[] = "the file was not available";
            return false;
        }
        
        $targetPath = SITE_ROOT . DS . 'admin' . DS . $this->uploadDir . DS . $this->filename;
        
        if(file_exists($targetPath)){
            $this->errors[] = "The file {$this->filename} already exists";
            return false;
        }
        
        if(move_uploaded_file($this->tmpPath, $targetPath)){
            if($this->create()){
                unset($this->tmpPath);
                return true;
            }
        }else{
            
            $this->errors[] = "the file directory does not have permission";
            return false;
            
        }
        
        
    }
    
}
    
public function deletePhoto(){
    if($this->delete()){

        $targetPath = SITE_ROOT.DS. 'admin' . DS . $this->picPath();

        return unlink($targetPath) ? true : false;
    }else{
        return false;
    }
}


}
    

?>