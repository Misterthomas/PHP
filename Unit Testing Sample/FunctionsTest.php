<?php
require_once "PHPUnit/Autoload.php";
require_once "functions.php";
require_once "TwitterOAuth.php";
require_once "config.php";


class FunctionsTest extends PHPUnit_Framework_TestCase{

public function testConnection(){
	
	$function = new Functions();
	$expected = 2;
 
	$actual = $function->search();
  
$this->assertEquals($expected, sizeof($actual));
	
}
public function testDayOfTheWeek(){
    
    $function = new Functions();
    $expected = "Mon";
    
    $actual = $function->DayOfTheWeek();
        $this->assertEquals($expected, $actual,$message='');
    
}

public function testGetOneCityType(){
	
$function = new Functions();
$expected = "integer";

$actual = $function->GetOneCity();

$this->assertEquals($expected, gettype($actual));

}

public function testGetOneCityNumberRange(){
	
$function = new Functions();
$expected = 100;

$actual = $function->GetOneCity();

$this->assertLessThanOrEqual($expected, $actual);

}

public function testGetCityName(){
	$function = new Functions();
	
	$expected = "London";
	$actual = $function->GetTheCityName("51.5073346, -0.12768310000001293,8km");
	
	///$expected = "Glasgow";
	//$actual = $function->GetTheCityName("55.864237,-4.251805999999988,8km");
	
	//$expected = "Dundee";
	//$actual = $function->GetTheCityName("56.462018,-2.970721000000026,4km");
	
	//$expected = "Abberden";
	//$actual = $function->GetTheCityName("57.149717,-2.094278000000031,5km");

	//$expected = "error";
	//$actual = $function->GetTheCityName("abcd");
	
	$this->assertEquals($expected, $actual,$message='');
	
}

}

?>