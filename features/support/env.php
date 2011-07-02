<?php
//require_once 'PHPUnit/Autoload.php';
//require_once 'PHPUnit/Framework/Assert/Functions.php';

class Calc {
    
	private $result=0;

	public function push($num) {
        if (!isset($this->items)) {
            $this->items = array($num);
        } else {
            $this->items[] = $num;
        }
    }

	public function add(){

		foreach($this->items as $num){
			$this->result = $this->result + $num;
		}
	}

	public function getResult(){
		return $this->result;
	}
}
