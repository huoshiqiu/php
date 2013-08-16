<?php
//解释器模式
//用户可以创建自己的配置文件，并且能够在配置文件中添加自己喜爱的CD标题

class User
{
     protected $_username='';
	 
	 public function __construct($username)
	 {  
	     $this->_username=$username;
	 }
	 
	 public function getProfilePage()
	 {
	     //In lieu of getting the info from the DB,we mock here
		 $profile="<h2> I like Never Again </h2>";
		 $profile.="I love all of their songs .My favorite CD :<br />";
		 $profile.="{{myCD.getTitle}}";
		 
		 return $profile;
	 }
}

//为了为用户检索cd信息，需要创建一个名为userCD的对象
class userCD
{
     protected $_user=NULL;
	 
	 public function setUser($user)
	 {
	     $this->_user=$user;
	 }
	 
	 public function getTitle()
	 {
	     //mock here
		 $title="Waste of a Rib";
		 return $title;
	 }
	 
class userCDInterpreter
{
     protected $_user=NULL;
	 
	 public function setUser($user)
	 {
	     $this->_user=$user;
	 }
	 
	 public function getInterpretered()
	 {
	     $profile=$this->_user->getProfilePage();
		 
		 if(preg_match_all('/\{\{myCD\.(.*?\}\}/',$profile,$triggers,PREG_SET_ORDER)){
		     $replacement=array();
		 
		 
		     foreach($triggers as $trigger)
		 { 
		     $replacement[]=$trigger[1];
		 }
		 
		 $replacement=array_unique($replacement);
		 
		 $myCD=new userCD();
		 $myCD->setUser($this->_user);
		 
		 foreach($replacement as $replacements)
		 {
		     $profile=str_replace("{{myCD.{$replacements}}}",
			 call_user_func(array($myCD,$replacements)),$profile);
	     }
		 
	     }
	 
	     return $profile;
	 }
}
/*
首先，getInterpreted()方法从User对象中获取内部储存的配置文件。接着，该方法通过解析配置文件查找能够处理
的可解释关键字。如果发现这样的关键字，那么会构造一个替换数组。
下一步是创建基于userCD对象的CD新对象。创建这个对象后，User实例会被传递入其内部
最后，所有替换都会被遍历。根据属于userCD实例的$replacements变量的内容而命名的方法会被调用，该方法的输出
用于替换配置文件中被解释的占位符。
*/

     $username='huoshiqiu';
	 $user =new User($username);
	 $interpreter=new userCDInterpreter();
	 $interpreter->setUser($user);
	 
	 print "<h1>{$username}'s Profile </h1>" ;
	 print $interpreter->getInterpreted();
?>
	 
