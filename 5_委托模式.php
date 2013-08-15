<?php
//Delegate
//MP3播放列表原版本
class Playlist
{
     private $_songs;
	 
	 public function __construct()
	 ｛
	     $this->_songs=array();
	 }
	 
	 public Addsongs($location,$title)
	 {
	     $song=array('location'=>$location,'title'=>$title);
		 $this->_songs[]=$song;
	 }
	 
	 public function getM3U()
	 {
	     $m3u="#EXTM3U\n\n";
		 
		 foreach($this->_songs as $song)
		 {
		     $m3u.="#EXTINF:-1,{$song['title']}\n";
			 $m3u.="{$song['location']}\n";
		 }
		 return $m3u;
	 }
	 

	 public function getPLS()
	 {
	     $pls="[playlist]\nNumberOfEntries=".count($this->_songs)."\n\n";
	
		 foreach($this->_songs as $songCount=>$song)
		 {
		     $counter=$songCount+1;
			 $pls.="File{$counter}={$song['location']}\n";
			 $pls.="Title{$counter}={$song['title']}\n";
			 $pls.="Length{$counter}=-1\n\n";
		 }
		 return $pls;
	 }
}

     $playlist=new Playlist();
	 $plsylist->Addsongs('/D/home/music/brr.mp3','Brr');
	 $plsyliat->Addsongs('/D/home/music/huo.mp3','huo');
	 
	 if($externalRetrievedType=='pls'
	 {
	     $playlistContent=$playlist->getPLS();
	 }else{
	     $playlistContent=$playlist->getM3U();
	 }
	 
	 
	 
//使用Delegate模式后，分离if/else语句
class newPlaylist
{
     private $_songs;
	 private $_typeObject;
	 
	 public function __construct($type)
	 {
	     $this->_songs=array();
		 $object="{type}Playlist";
		 $this->_typeObject=new $object;
	 }
	 
	 public function Addsongs($location,$title)
	 {
	     $song=array('location'=>$location,'title'=>$title);
		 $this->_songs[]=$song;
	 }
	 
	 public function getPlaylist()
	 {
	     $playlist=$this->_typeObject->getPlaylist($this->_songs);
		 return $playlist;
	 }
}

class m3uPlaylistDelegate
{
     public function getPlaylist($songs)
	 {
	     $m3u="#EXTM3U\n\n";
		 
		 foreach($this->_songs as $song)
		 {
		     $m3u.="#EXTINF:-1,{$song['title']}\n";
			 $m3u.="{$song['location']}\n";
		 }
		 return $m3u;
	 }
}

class plsPlaylistDelegate
{
     public function getPlaylist($songs)
	 {
	     $pls="[playlist]\nNumberOfEntries=".count($this->_songs)."\n\n";
	
		 foreach($this->_songs as $songCount=>$song)
		 {
		     $counter=$songCount+1;
			 $pls.="File{$counter}={$song['location']}\n";
			 $pls.="Title{$counter}={$song['title']}\n";
			 $pls.="Length{$counter}=-1\n\n";
		 }
		 return $pls;
	 }
}
	 
	 $externalRetrievedType='pls';
	 $playlist=new newPlaylist($externalRetrievedType);
	 $playlistContent=$playlist->getPlaylist();
?>
	 