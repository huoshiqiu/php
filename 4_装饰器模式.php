<?php
//装饰器模式
class CD
{
     public $tracklist;
	 
	 public function __construct()
	 {
	     this->$tracklist=array();
	 }
	 
	 public function addTrack($track)
	 {
	     $this->tracklist[]=$track;
	 }
	 
	 public function getTracklist()
	 {
	     $output='';
		 
		 foreach($this->tracklist as $num=>$track)
		 {
		     $output .=($num+1).") {track}.";
			 }
			 return $output;
	 }
}

     $tracksFromExternalSource=array('What It Means','Brr','Goodbye');
	 $myCD=new CD();
	 
	 foreach($tracksFromExternalSource as $track)
	 {
	     $myCD->addTrack;
	 }
	 
	 print "The CD contains the following tracks:".$myCD->getTracklist();
	 
//Decorator
class CDTracklistDecoratorCaps
{
     private $_cd;
	 
	 public function __construct(CD $cd)
	 {
	     $this->_cd=$cd;
     }
	 
	 public function makeCaps()
	 {
	     foreach($this->_cd->tracklist as & $track)
		 {
		     $track=strtoupper($track);
		 }
	 }
}

     $myCD=new CD();
	 foreach($tracksFromExternalSource as $track)
	 {
	     $myCD->addTrack($track);
	 }
	 
	 $myCDCaps=new CDTracklistDecoratoeCaps($myCD);
	 $myCDCaps->makeCaps();
	 
	 print "The CD contains the following tracks:".$myCD->getTracklist();
?>