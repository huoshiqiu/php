<?php
//工厂模式
class CD
{
     public $title='';
	 public $band='';
	 public $tracks=array();
	 
	 public function __construct()
	 {}
	 
	 public function setTitle($title)
	 {
	     $this->title=$title;
	 }
	 public function setBand($band)
	 {
	     $this->band=$band;
	 }
	 public function addTrack($track)
	 {
	     $this->tracks[]=$track;
	 }
}

//创建完整的CD对象
     $title='Waste of a Nib';
	 $band='Never Again';
	 $trackFromExternalSource=array('What It Means','Brrr','Goodbye');
	 
	 $cd=new CD();
	 $cd->setTitle($title);
	 $cd->setBand($band);
	 foreach($trackFromExternalSource as $track){
	     $cd->addTrack($track);
	 }

	 
//增强型CD，标签DATA TRACK识别数据音轨
class enhancedCD
{
     public $title='';
	 public $band='';
	 public $tracks=array();
	 
	 public function __construct()
	 {
	     $this->tracks[]='DATA TRACK';
	 }
	 
	 public function setTitle($title)
	 {
	     $this->title=$title;
	 }
	 public function setBand($band)
	 {
	     $this->band=$band;
	 }
	 public function addTrack($track)
	 {
	     $this->tracks[]=$track;
	 }
}

class CDFactory
{
    public static function create($type)
	{
	     $class=strtolower($type)."CD";
		 return $class;
	 }
}
   
     $type='echanced';
	 $cd=CDFactory::create($type);
	 $cd->setTitle($title);
	 $cd->setBand($band);
	 foreach($trackFromExternalSource as $track){
	     $cd->addTrack($track);
	 }

	