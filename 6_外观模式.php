<?php
//外观模式
//获取CD对象，对其属性应用大写形式，并且创建一个要提交给WEB服务的、格式完整的XML文档
class CD
{
     public $tracks=array();
	 public $band='';
	 public $title='';
	 
	 public function __construct($title,$band,$tracks)
	 {
	     $this->title=$title;
		 $this->band=$band;
		 $this->tracks=$tracks;
	 }
}
     $tracksFromExternalSource=array('What It Mean','Brrr','Goodbye');
	 $title='Waste of a Rib';
	 $band='Never Again';
	 $cd=new CD($title,$band,$tracksFromExternalSource);
	 
//要为外部系统格式化CD对象，就需要创建其他两个类
class CDUpperCase
{
     public static function makeString(CD $cd,$type)
	 {
	     $cd->$type=strtoupper($cd->$type);
	 }
	 
	 public static function makeArray(CD $cd,$type)
	 {
	     $cd->$type=array_map('strtoupper',$cd->type);
	 }
}

class CDMakeXML
{
     public static function create(CD $cd)
	 {
	     $doc=new DomDocument();
		 
		 $root=$doc->createElement('CD');
		 $root=$doc->appendChild($root);
		 
		 $title=$doc->createElement('TITLE',$cd->title);
		 $title=$doc->appendChild($title);
		 
		 $band=$doc->createElement('BAND',$cd->band);
		 $band=$doc->appendChild($band);
		 
		 $tracks=$doc->cteateElement('TRACKS');
		 $tracks=$doc->appendChild($tracks);
		 
		 foreach($cd->tracks as $track)
		 {
		     $tracks=$doc->createElement('TRACKS',$track);
			 $track=$track->appendChild($track)；
		 }
		 
		 return $doc->saveXML();
	 }
}

/*乍看起来，编程人员可能希望通过一下方式实现这样的功能
     CDUpperCase::makeString($cd,'title');
	 CDUpperCase::makeString($cd,'band');
	 CDUpperCase::makeString($cd,'tracks');
	 print CDMakeXML::create($cd);
虽然这是解决问题的一种方式，但并不是最佳方式，我们应当针对具体的WEB服务调用创建一个Facade对象
*/

class WebServiceFacade
{
     public static function makeXMLcall($cd)
	 {
	     CDUpperCase::makeString($cd,'title');
		 CDUpperCase::makeString($cd,'band');
	     CDUpperCase::makeString($cd,'tracks');
		 
		 $xml=CDMakeXML::create($cd);
		 
		 return $xml;
	 }
}

     print WebServiceFacade::makeXMLcall($cd);


?>
