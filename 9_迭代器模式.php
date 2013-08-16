<?php
//迭代器模式
//示例WEB站点的部分工作是显示特定艺术家或乐队的所有CD。这些信息储存在一个MYSQL内。
//某些访问者可能希望根据乐队的名字搜索数据库，并且得到特定艺术家发布的所有CD的概述

class CD
{
     public $title='';
	 public $band='';
	 public $tracks=array();
	 
	 public function __construct($band,$title)
	 {
	     $this->band=$band;
		 $this->title=$title;
	 }
	 
	 public function addTrack($track)
	 {
	     $this->tracks[]=$track;
	 }
}

class CDSearchByBandItertor implements Iterator
{
     private $_CDs=array();
	 private $_valid=FALSE;
	 
	 public function __construct($bandname)
	 {
	     $db=mysql_connect('localhost','user','pass');
		 mysql_select_db('test');
		 
		 $sql="select CD.id,CD.band,CD.title,tracks.tracknum,";
		 $sql="tracks.title as tracktitle";
		 $sql.="from CD left join tracks on CD.id=tracks.cid where band='";
		 $sql.=mysql_real_escape_string($bandname);
		 $sql.="'order by track.tracknum";
		 
		 $results=mysql_query($sql);
		 
		 $cdID=0;
		 $cd=NULL;
		 
		 while($result=mysql_fetch_array($results)){
		     if($result['id']!==$cdID){
			     if(!is_null($cd){
				     $this->_CDs[]=$cd;
				 }
				 $cdID=$result['id'];
				 $cd=new CD($result['band'],$result['title']);
			 }
			 
			 $cd->addTrack($result['tracks']);
		 }
		 $this->_CDs[]=$cd;
	 }
	 
	 public function next()
	 {
	     $this->_valid=(next($this->_CDs)===FALSE)?FALSE:TRUE;
	 }
	 
	 public function rewind()
	 {  
	     $this->_valid=(reset($this->_CDs)===FALSE)?FALSE:TRUE;
	 }
	 
	 public function vaild()
	 {
	     return $this->_valid;
	 }
	 
	 public function current()
	 {  
	     return current($this->_CDs);
	 }
	 
	 public function key()
	 {
	     return key($this->_CDs);
	 }
}

     $queryItem='Never Again';
	 $cds=new CDSearchByBandIterator($queryItem);
	 
	 print '<h1>Found the Following CDs</h1>';
	 print '<table><tr><th>Band</th><th>Title</th><th>Num Tracks</th></tr>';
	 
	 foreach($cds as $cd)
	 {
	     print "<tr><td>{$cd->band}</td><td>{$cd->title}</td><td>";
		 print count($cd->tracks).'</td></tr>';
	 }
	 
	 print '</table>';
	 
	 
?>