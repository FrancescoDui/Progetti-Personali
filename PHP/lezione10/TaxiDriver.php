<?php
require_once 'User.php';
class TaxiDriver extends User{
    private $license='';
    public function __construct($name,$license)
    {
        $this->license=$license;       
        parent::__construct($name); 
    }
	public function setLicense(string $license){
		$this->license = $license;
	}
	public function getLicense(): string {
		return $this->license ;
    }
}