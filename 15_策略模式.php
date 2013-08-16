<?php
//策略模式
//CD对象要生成XML版本和JAVASCRIPT版本

class CD
{
     public $title='';
	 public $band='';
	 
	 public function __construct($title,$band)
	 {
	     $this->title=$title;
		 $this->band=$band;
	 }
	 
	 public function getAsXML()
	 {
	     $doc=new DomDocument();
		 
		 $root=$doc->createElement('CD');
		 $root=$doc->appendChild($root);
		 
		 $title=$doc->createElement('TITLE',$this->title);
		 $title=$doc->appendChild($title);
		 
		 $band=$doc->createElement('BAND',$this->band);
		 $band=$doc->appendChild($band);
		 
		 return $doc->saveXML();
	 }
}

     $externalBand='Never Again';
	 $externalTitle='Waste of a Rib';
	 
	 $cd=new CD($externalTitle,$externalBand);
	 print $cd->getAsXML();

//----------修改后版本---------------------
class CDuseStrategy
{
     public $title='';
	 public $band='';
	 
	 protected $_strategy;
	 
	 public function __construct($title,$band)
	 {
	     $this->title=$title;
		 $this->band=$band;
	 }
	 
	 public function setStrategyContext($strategyObject)
	 {
	     $this->_strategy=$strategyObject;
	 }
	 
	 public function get()
	 {
	     return $this->_strategy->get($this);
	 }
}
	
class CDuseASXML
{
     public function get(CDuseStrategy $cd);
	 {
	     $doc=new DomDocument();
	     $root=$doc->createElement('CD');
         $root=$doc->appendChild($root);
	     $title=$doc->createElement('TITLE',$this->title);
	     $title=$doc->appendChild($title);
	     $band=$doc->createElement('BAND',$this->band);
	     $band=$doc->appendChild($band);
	
	     return $doc->saveXML();
	 }
}

class CDuseASJS
{
     public function get(CDuseStrategy $cd)
	 {
	     $json=arry();
		 $json['CD']['title']=$cd->title;
		 $json['CD']['band']=$cd->band;
		 
		 return json_encode($json);
	 }
}

     $cd=new CDuseStrategy($externalTitle,$externalBand);
	 
	 //xml
	 $cd->setStrategyContext(new CDuseASXML());
	 print $cd->get($cd);
	 
	 //json
	 $cd->setStrategyContext(new CDuseASJS());
	 print $cd->get($cd);


?>