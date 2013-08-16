<?php
//原型模式
//为艺术家创建许多乐队的音乐合辑

class CD
{
     public $band='';
	 public $title-'';
	 public $tracklist=array();
	 
	 public __construct($id)
	 {
	     $handle=mysql_connect('localhost','user','pass');
		 mysql_select_db('CD',$handle);
		 
		 $query="select band,title,from CDs where id={$id}";
		 
		 $results=mysql_query($query,$handle);
		 
		 if($row=mysql_fetch_assoc($results)){
		     $this->band=$row['band'];
			 $this->title=$row['title'];
		 }
	 }
	 
	 public function buy()
	 {
	     var_dump($this);
	 }
	 
	 
class MixtapeCD extends CD
{
     public function __clone()
	 {
	     $this->title='Mixtape';
	 }
}

     $externalPurchaseInfoBandID=12;
	 $bandMixProto=new MixtypeCD($externalPurchaseInfoBandID);
	 
	 $externalPurchaseInfo=array();
	 $externalPurchaseInfo[]=array('brrr','goodbye'];
	 $externalPurchaseInfo[]=array('What it mean','brrr'];
	 
	 foreach($externalPurchaseInfo as $mixed){
	     $cd=clone $bandMixProto;
		 $cd->tracklist=$mixed;
		 $cd->buy();
	 }
?>
	 
	 
	 
