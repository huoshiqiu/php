<?php
//模版模式

abstract class SaleItemTemplate
{
     public $price=0;
	 
	 public final function setPriceAdjustments()
	 {
	     $this->price += $this->taxAddition();
		 $this->price += $this->oversizedAddition();
	 }
	 
	 protected function oversizedAddition()
	 {
	     return 0;
	 }
	 
	 abstract protected function taxAddition();
}

class CD extends SaleItemTemplate
{
     public $title='';
	 public $band='';
	 
	 protected $_strategy;
	 
	 public function __construct($band,$title,$price)
	 {
	     $this->title=$title;
		 $this->band=$band;
		 $this->price=$price;
	 }
	 
	 protected function taxAddition()
	 {
	     return round($this->price * 0.5,2);
	 }
}

class BandEndorsedCaseOfCereal extends 	SaleItemTemplate
{
     public $band;
	 
	 public function __construct($band,$price)
	 {
		 $this->band=$band;
		 $this->price=$price;
	 }
	 
	  protected function taxAddition()
	 {
	     return 0;
	 }
	 
	 	 protected function oversizedAddition()
	 {
	     return round($this->price * .20,2);
	 }
}

     $externalTitle="Waste of a Nib";
	 $externalBand="Never Again";
	 $externalCDPrice=12.99;
	 $externalCerealPrice=90;
	 
	 $cd=new CD($externalBand,$externalTitle,$externalCDPrice);
	 $cd->setPriceAdjustments();
	 
	 print 'The total cost for CD item is :$'.$cd->price.'<br />';
	 
	 $cereal=new BandEndorsedCaseOfCereal($externalBand,$externalCerealPrice);
	 $cereal->setPriceAdjustments();
	 
	 print 'The total cost for Cereal item is :$'.$cereal->price.'<br />';

?>