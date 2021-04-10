<?php

class Automobile
{
	var $LicencePlate;
	var $Brand;
	var $Model;
	var $ModelYear;
	var $Color;
	
	function __construct()
	{
		$this->LicencePlate = $LicencePlate;
		$this->Brand = $Brand;
		$this->Model = $Model;
		$this->ModelYear = $ModelYear;
		$this->Color = $Color;
	}
	function __toString()
    {
        try 
        {
            return (string) $this->Brand;
        } 
        catch (Exception $exception) 
        {
            return '';
        }
    }
}

?>