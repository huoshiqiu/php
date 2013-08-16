<?php
//代理模式
//CD店销售生意火爆，扩展势在必行，但是WEB站点每天都要进行正常的销售

class CD
{
     protected $_title;
	 protected $_band;
	 protected $_handle=null;
	 
	 public function __construct($title,$band)
	 {
	     $this->_title=$title;
		 $this->_band=$band;
	 }
	 
	 public function buy()
	 {
	     $this->_connect();
		 
		 $query="update CDs set bought=1 where band='";
		 $query.=mysql_real_escape_string($this->_band,$this->_handle)；
		 $query.=" 'and title=' ";
		 $query.=mysql_real_escape_string($this->_title,$this->_handle)；
		 $query.="'";
		 
		 mysql_query($query,$this->_handle);
	 }
	 
	 protected function _connect()
	 {
	     $this->_handle=mysql_connect('localhost','user','pass');
		 mysql_select_db('CD',$this->_handle);
	 
	 }
}
/*
因为销售形势喜人，我们已经扩展了服务器的性能。我们需要访问位于德克萨斯州某处的数据。
这就要求一个具有访问性能的Proxy对象，该对象截取与本地数据库的连接，转而连接到达拉斯网络运营中心
*/
class DallasNOCCDProxy extends CD
{
     protected function _connect()
	 {
	     $this->_handle=mysql_connect('dallas','user','pass');
		 mysql_select_db('CD');
	 }
}

     $externalTitle='Waste of a Rib';
	 $externalBand='Never Again';
	 
	 $cd->new DallasNOCCDProxy($externalTitle,$externalBand);
	 $cd->buy();
	 
?>
	 
	 
	 
