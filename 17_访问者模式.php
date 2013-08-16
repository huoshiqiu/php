<?php
//访问者模式

class CD
{
     public $title;
	 public $band;
	 public $price;
	 
	 public function __construct($band,$title,$price)
	 {
	     $this->title=$title;
		 $this->band=$band;
		 $this->price=$price;
	 }
	 
	 public function buy()
	 {
	     //stub
	 }
	 
	 public function acceptVisitor($visitor)
	 {
	     $visitor->visiCD($this);
	 }
}

//日志访问者
class CDVisitorLogPurchase
{
     public function visitCD($cd)
	 {
	     $logline="{$cd->title}by{$cd->band}was purchased for {$cd->price}";
		 $logline.="at".sdate('r')."\n";
		 
		 file_put_contents('/logs/purchases.log',$logline,FILE_APPEND);
	 }
}

     $externalBand='Never Again';
	 $externalTitle='Waste of a Rib';
	 $externalPrice=9.99;
	 
	 $cd=new CD($externalBand,$externalTitle,$externalPrice);
	 $cd->buy();
	 $cd->acceptVistor(new CDVisitorLogPurchase());
	 
//寻找打折的CD
class CDVisitorPopulateDiscountList
{
     public function VisitorCD($cd)
	 {
	     if($cd->price<10){
		     $this->_populateDiscountList($cd);
		 }
	 }
	 
	 protected function _populateDiscountList($cd)
	 {
	     //stub
	 }
}

	 $cd=new CD($externalBand,$externalTitle,$externalPrice);
	 $cd->buy();
	 $cd->acceptVistor(new CDVisitorLogPurchase());
	 $cd->acceptVistor(new CDVisitorPopulateDiscountList());

?>
