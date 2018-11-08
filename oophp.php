<?php

interface school{
	public function myschool();
	
}
class Teacher implements school
{
	public function __construct()
	{
		echo  $this->myschool();
	}
	public function myschool()
	{
		echo "i a school teacher";
	}
	
}
$a = new Teacher();
?>