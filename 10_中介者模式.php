<?php
//中介者模式
//WEB站点允许更改CD对象实现更改乐队名或标题，同时与之关联的MP3对象也会作出相应的变化

class CD
{
     public $band='';
	 public $title='';
	 protected $_mediator;
	 
	 public function __construct($mediator)
	 {
	     $this->_mediator=$mediator;
	 }
	 
	 public function save()
	 {   //stub =write data back to database - use this to verify
	     var_dump($this);
	 }
	 
	 public function changeBandName($newName)
	 {
	     if(!is_NULL($this->_mediator)){
		     $this->_mediator->change($this,array('band'=>$newName));
		 }
		 $this->band=$newName;
		 $this->save();
	 }
}


class MP3Archive
{
     public $band='';
	 public $title='';
	 protected $_mediator;
	 
	 public function __construct($mediator)
	 {
	     $this->_mediator=$mediator;
	 }
	 
	 public function save()
	 {   //stub =write data back to database - use this to verify
	     var_dump($this);
	 }
	 
	 public function changeBandName($newName)
	 {
	     if(!is_NULL($this->_mediator)){
		     $this->_mediator->change($this,array('band'=>$newName));
		 }
		 $this->band=$newName;
		 $this->save();
	 }
}

class MusicContainerMediator
{
     protected $_containers=array();
	 
	 public function __construct()
	 {
	     $this->_containers[0]='CD';
		 $this->_containers[1]='MP3Archive';
	 }
	 
	 public function change($originalObject,$newValue)
	 {
	     $title=$originalObject->title;
		 $band=$originalObject->band;
		 
		 foreach($this->_containers as $container){
		     if(!($originalObject instanceof $container)){
			     $object=new $container;
				 $object->title=$title;
				 $object->band=$band;
				 
				 foreach($newValue as $key=>$val){
				     $object->$key=$val;
				 }
				 
				 $object->save();
				 
			 }
		 }
	 }
}


     $titleFromDB='Waste of a Rib';
	 $bandFromDB='Never Again';
	 
	 $mediator=new MusicContainerMediator();
	 $cd=new CD($mediator);
	 $cd->title=$titleFromDB;
	 $cd->band=$bandFromDB;
	 
	 $cd->changeBandName('Maybe Once More');
?>






















