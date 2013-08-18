<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Q客云播</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Q客点播，体验VIP级的流畅播放感受，零等待，随意拖放！">
		<meta name="keywords" content="vod.1qwer.com,免下载,零等待,随意拖放,Q客云播放,Q客云点播,宅男必备,Q客云播,云点播,迅雷云点播,云点播网页版,不限时云播放,手机云点播,iPad云点播,免费云点播" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/swfobject.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->
	<style>
	body {padding-top:60px; background:url("http://vod1.1qwer.com/bg.png") repeat-x scroll center top}
	.container{min-width:950px}
	.box_div{min-width:950px;height:40px;margin:10px auto}
	.box_div a{text-decoration:none;outline:0 none;font-family:\5FAE\8F6F\96C5\9ED1}
	.inp_div{float:left;width:750px;height:38px;position:relative;overflow:hidden;border:#d0d0d0 1px solid;border-radius:2px}
	.inp_div input{width:720px;height:20px;line-height:20px;padding:9px 15px;color:#111;font-size:16px;outline:medium}
	#play-button,#upload-button{float:left;margin:1px 0 0 5px;display:inline-block;background:#3b8ede;color:#fff;font-size:18px;padding:6px 25px;border-radius:2px;box-shadow:0 1px 3px rgba(0,0,0,0.3);min-height:26px}
	#play-button:hover,#upload-button:hover{background:#52a4f3;color:#fff;text-decoration:none}
	#upload-button{position: relative; padding-bottom: 6px; padding-left: 10px; padding-right: 10px; padding-top: 6px}
    #footer {background-color:#f5f5f5;text-align:center;margin-top:30px}
	</style>
  </head>
  <body>
		<div class="navbar navbar-inverse navbar-fixed-top">
		  <div class="navbar-inner">
			<div class="container">
			  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button> <!--导航开始-->
			  <a class="brand active" href="http://vod.1qwer.com">Q客云播</a>
			  <div class="nav-collapse collapse">
				<ul class="nav">
				  <li class="active"><a href="http://www.1qwer.com">主页</a></li>
				  <li><a href="http://buy.1qwer.com">淘宝购物</a></li>
				  <li><a href="http://114.1qwer.com/about">网站导航</a></li>
				  <li><a href="http://blog.1qwer.com/about">我们的博客</a></li>
				  <li><a href="http://blog.1qwer.com/about">关于我们</a></li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
	 <!--导航结束-->x
	  <!--热播大片-->x
<div class="container">
            <div style="margin:15px auto">
				<font color=''>大片热播：</font> <a href="#" onClick="return playUrl('bt://8FCFFDF6062379A6A1A0505BB809919870D240EB/0')">西游降魔篇</a> | <a href="#" onClick="return playUrl('233648a130ad1ad213f6f5159bc38989b8339202')">101次求婚</a> | <a href="#" onClick="return playUrl('a9866e18165bc2df5c4d85fab2e4879dc2e826eb')">霍比特人:意外之旅</a> | <a href="#" onClick="return playUrl('cba77403bbbf93629e9cf525a73eb2fa0e4d3cb5')">寒战</a> |  <a href="#" onClick="return playUrl('6e760ff8abf047ae21c823438663743ef3b1ecf0')">十二生肖</a> |  <a href="#" onClick="return playUrl('5cb6eb35198e3f78e1cf2dc92d927b313b055109')">泰囧</a> | <a href="#" onClick="return playUrl('76e9059781349f97e5fcdee3d3207d24e3819c18')">一代宗师</a> | <a href="#" onClick="return playUrl('320b93ae469b77a1c71abe7519e5d79585ed3bc0')">云图</a> | <a href="#" onClick="return playUrl('7d8e442b9a9a03af3b3a1bd8b00739cc163bb569')">逆世界</a> | <a href="#" onClick="return playUrl('75ac24499aa0b53c49659945c3b27b24858c230c')">血滴子</a> | <a href="#" onClick="return playUrl('1fe8c0394fb3a2a2d6988c4195a523ab946877fc')">大上海</a> | <a href="#" onClick="return playUrl('2c048f5cb4aeee5e9a56a8dedd2222f63451a1fb')">死亡飞车3：地狱</a> | <a href="#" onClick="return playUrl('3f1f635c5c9faae6f7ebefd7419ba8f4b3740168')">太极2</a>
			</div>

		<div class="container">
		
			<div id="player" style="position:relative;z-index: 100;">
				<iframe scrolling="no" frameborder="0" name="win_vod" id="win_vod" border="0" style="width:950px; height: 550px" src="http://www.okdvd.com/api.html"></iframe>
			</div>

			<div class="box_div">
				<div class="inp_div">
					<input id="u" placeholder="请在此输入视频链接，或上传/拖入BT种子文件" type="text" value="请在此输入视频链接，或上传/拖入BT种子文件" />
				</div>
				<a class="button" href="#" id="play-button" onClick="return false;">播放</a>
				<a class="button" href="#" id="upload-button" onClick="return false;">上传BT</a>
			</div>
<!-- Duoshuo Comment BEGIN -->
	<div class="ds-thread"></div>
<script type="text/javascript">
var duoshuoQuery = {short_name:"1qwer"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = 'http://static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		|| document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- Duoshuo Comment END -->

<div class="container">
			<script type="text/javascript">
var cpro_id = "u995084";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
 <!--广告开始-->x
<script type="text/javascript">
var sogou_ad_id=25413;
var sogou_ad_height=60;
var sogou_ad_width=960;
</script>
<script language='JavaScript' type='text/javascript' src='http://images.sohu.com/cs/jsfile/js/c.js'></script>
</div> <!--广告结束-->x
			<div id="footer">
				<p>&copy; 2013 由<a href="http://www.1qwer.com">Q客云播</a>支持
			</div>
			
		</div>
	

	
	
	<script>
	function playUrl(url){
		$('#u').val(url);
		$('#play-button').click();
		return false
	}
	(function () {
		var c = {},
		e = this,
		u = "localhost" == e.location.host,
		v = !!(e.navigator.userAgent + "").match(/(?:android|iphone|ipod|ipad|ios)/i),
		s = swfobject.hasFlashPlayerVersion("10");
		(e.navigator.userAgent + "").match(/(?:chrome)/i);
		c.uploader = {
			uploadFile : function () {
				if (c.uploader.uploader && c.uploader.uploader.x2_uploader_uploadFile)
					return c.uploader.uploader.x2_uploader_uploadFile()
			},
			setStyle : function (a) {
				if (c.uploader.uploader && c.uploader.uploader.x2_uploader_setStyle)
					return c.uploader.uploader.x2_uploader_setStyle(a)
			},
			uploadError : function (a, b) {
				$('#u').val(b);
				alert(6 == a ? "BT文件上传超时，请稍候重试" : 5 == a ? "BT文件大小超过6M，请选择其他BT文件" : "BT文件上传失败，请稍候重试")
			},
			browser : function () {},
			uploadSuccess : function (a) {
				if (a = jQuery.parseJSON(a)) {
					var b = a.ret;
					0 == b && 40 == a.infohash.length ? ($("#u").val("magnet:?xt=urn:btih:" + a.infohash), c.checkUrl()) : alert(2 == b ? "请求参数有误，请检查后重新添加" : 6 == b ? "该种子文件解析失败，请稍后再试" : "BT文件上传失败，请稍候重试")
				}
			},
			uploadProgress : function (a, b) {
				$('#u').val(b + "  正在上传  "
					+parseInt(100 * a, 10) + "%")
			},
			setFilename : function (a) {
				$('#u').val("开始上传 " + l(a))
			},
			init : function () {
				var a = $("#upload-button");
				if (a.length)
					if (s) {
						var b = a.outerHeight(),
						d = a.outerWidth();
						$('<div id="uploader"><div id="_uploader"></div></div>').css({
							position : "absolute",
							left : 0,
							top : 0,
							width : d,
							height : b,
							cursor : "pointer"
						}).appendTo(a.css({
								position : "relative"
							}).off("click"));
						swfobject.embedSWF("http://vod.xunlei.com/media/fileUploader.swf", "_uploader", d, b, "10.0.0", "http://vod.xunlei.com/library/expressInstall.swf", {
							description : "请选择BT种子文件(*.torrent)",
							extension : "*.torrent",
							timeOut : 10,
							url : "http://dynamic.vod.lixian.xunlei.com/interface/upload_bt",
							label : "",
							limitSize : 6442450944,
							jsPrefix : "x2.uploader.",
							asPrefix : "x2_uploader_",
							isImmediately : !0
						}, {
							wmode : "transparent",
							allowScriptAccess : "always"
						}, {
							id : "_uploader",
							name : "_uploader"
						}, function (b) {
							b.success && (c.uploader.uploader = (-1 != e.navigator.appName.indexOf("Microsoft") ? e : document)._uploader, a.prop("disabled", !1))
						})
					} else
						a.hide()
			}
		};
		c.checkUrl = function () {
			var b = $.trim($("#u").val());
			b.match(/^[a-fA-F0-9]{40}$/i) && (b = "magnet:?xt=urn:btih:" + b.toUpperCase()) && ($("#u").val(b));
			var x = "xlpan://|thunder://|ftp://|http://|https://|ed2k://|mms://|magnet:|rtsp://|flashget://|qqdl://|bt://",
			j = new RegExp("^(" + x + ").{9,}", "i");
			if (b.match(j)) {
				c.play(b);
			} else
				alert("您输入的视频下载地址有误。"), $("#u").focus()
		};
		c.play = function (a) {
			var frame = $("#win_vod"),
			url = "http://www.okdvd.com/api.html?url=" + a;
			if(url == frame.attr('src')){
				alert('该视频正在播放。');
				return;
			}
			frame.attr({
				"src" : url
			});
		};
		c.fromUrl = function(){
				var reg = new RegExp("(^|&)url=([^&]*)(&|$)");
				var r = window.location.search.substr(1).match(reg);
				var am="";
				var ak = "";
				if (r != null)
					am = r[2];
				else
					return;
				try {
					ak = decodeURIComponent(decodeURIComponent(am))
				} catch(al) {
					try {
						ak = decodeURIComponent(am)
					} catch(al) {
						ak = am
					}
				}
				if(ak!='') {
					$("#u").val(ak);
					c.checkUrl()
				}
		};
		$(document).ready(function () {
			if ($("#play-button").length > 0) {
				$("#u").click(function () {
					var txt_value = $(this).val();
					if (txt_value == this.defaultValue) {
						$(this).val("");
					} else
						this.select();
				});
				$("#u").blur(function () {
					var txt_value = $(this).val();
					if (txt_value == "") {
						$(this).val(this.defaultValue);
					};
				});
				$("#play-button").click(function (a) {
					c.checkUrl()
				});
				c.uploader.init();
				c.fromUrl();
			}
		});
		e.x2 = c
	})();
	</script>
  </body>
</html>
