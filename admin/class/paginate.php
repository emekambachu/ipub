<?php

class Paginate{
    
    public $currentPage;
    public $itemsPerPage;
    public $itemsTotalCount;
    
    public function __construct($page=1, $itemsPerPage=4, $itemsTotalCount=0 ){
        
        $this->currentPage = (int)$page;
        $this->itemsPerPage = (int)$itemsPerPage;
        $this->itemsTotalCount = (int)$itemsTotalCount;
        
    }
    
    public function nextPage(){
        return $this->currentPage + 1;
    }
    
    public function prevPage(){
        return $this->currentPage - 1;
    }
    
    public function pageTotal(){
        return ceil($this->itemsTotalCount / $this->itemsPerPage);
    }
    
    public function hasPrev(){
        return $this->prevPage() >= 1 ? true : false;
    }
    
    public function hasNext(){
        return $this->nextPage() <= $this->pageTotal() ? true : false;
    }
    
    public function offset(){
        return($this->currentPage -1) * $this->itemsPerPage;
    }
    
}

?>