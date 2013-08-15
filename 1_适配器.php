
<?php
//适配器模式例子
class errorObject
{
     private $__error;
  
     public function __construct($error)
	 {
	     $this->__error=$error;
	}
	
	pubic function getError()
	{
	     return $this->__error;
	}
}

class logToConsole
{
     private $__errorObject;
	 
	 public function __construct($errorObject)
	 {
	     $this->__errorObject=$errorObject;
	}
	
	public function write()
	{
	     fwrite(STDERR,$this->__errorObject->getError());
	}
	
}

     $error=new errorObject("404:NOT Found");
	 
	 $log=new logToConsole($error);
	 $log->write();
	 
/*这个场景中加入网管，安装监控软件，将记录存至一个CSV文件中。具体的CSV文件格式要求第一列是数值代码
，第二列是错误文本*/
class logToCSV
{
     const CSV_LOCATION='log.csv';
	 
	 private $__errorObject;
	 
	 public function __construct($errorObject)
	 {
	   $this->__errorObject=$errorObject;
	 }
	 public function write()
	 {
	     $line=$this->__errorObject->getErrorNumber;
		 $line .=',';
		 $line .=$this->__errorObject->getErrorText;
		 $line .="\n";
		 
		 file_put_contents(self::CSV_LOCATION,$line,FILE_APPEND);
	 }
}

//创建一个Adapter对象
class logToCSVAdapter extends errorObject
{
     private $__errorNumber,$__errorText;
	 
	 public function __construct($error)
	 {
	     parent::__construct($error);
		 
		 $parts=explode(':',$this->getError());
		 
		 $this->__errorNumber=$parts[0];
		 $this->__errorText=$parts[1];
	}
	
     public function getErrorNumber()
	 {
	     return $this->__errorNumber;
	 }
	 
	 public function getErrorText()
	 {
	     retext $this->__errorText;
	 }
}

     $error=new logToCSVAdpter("404:NOT Found");
	 
	 $log=new logToCSV($error);
	 $log->wirte();
?>