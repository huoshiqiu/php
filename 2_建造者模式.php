<?php
//建造者模式
class product
{
     protected $_type;
	 protected $_size;
	 protected $_color;
	 
	 public function setType($type)
	 {
	     $this->_type=$type;
	 }
	 
	 public function setSize($size)
	 {
	     $this->_size=$size;
	}
	 
	 public function setColor($color)
	 {
	     this->_color=$color;
	 }
}

     $productConfigs=array('type'=>'shirt','size'=>'XL','color'=>'red');
	 
	 
	 $product=new product();
	 $product->setType($productConfigs['type'];
	 $product->setSize($productConfigs['size'];
	 $product->setColor($productConfigs['color'];
	 
//最佳方法
class productBuilder
{
     protected $_product=NULL;
	 protected $_configs=array();
	 
	 public function __construct($configs)
	 {
	     $this->_product=new product();
		 $this->_configs=$configs;
	 }
	 
	 public function build()
	 {
	     $this->_product->setType($configs['type'];
		 $this->_product->setSize($configs['size'];
		 $this->_product->setColor($configs['color'];
	 }
	 
	 public function getProduct()
	 {
	     return this->_product;
	 }
}

     $builder=new productBuilder($productConfigs);
	 $builder->build();
	 $product=$builder->getProduct();
?>
