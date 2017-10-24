<?php
 
 class kucing {
 	public $mata;
 	public $suara;

 }
 public function set_mata ($mata,$suara){
 	$this->mata =$mata;
 	$this->suara =$suara;
 }
 public function get_mata (){
 	return $this->mata;
 }
  public function get_suara (){
 	return $this->suara;
 }

$kucin1 = new kucing;
$kucing1 set_mata (2);
$kucing1 set_suara ("miauw miauw");

echo "mata kucing ada :".$kucing1->get_mata ()."<br>";
echo "suara kucing adalah :".$kucing1->get_suara ()."<br>";
?>