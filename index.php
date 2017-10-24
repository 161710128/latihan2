<?php

class identitas {

 public $nm;
 public $tl;
 public $kls;
 public $stt;


 public function __construct ($nm,$tl,$kls,$stt){
 $this->nm =$nm;
 $this->tl =$tl;
 $this->kls =$kls;
 $this->stt =$stt;

 }
public function get_nama (){
 	return $this->nm;
 }
 public function get_tempatlahir (){
 	return $this->tl;
 }
 public function get_kelas (){
 	return $this->kls;
 }
 public function get_status (){
 	return $this->stt;
 }
 
}
 


?>