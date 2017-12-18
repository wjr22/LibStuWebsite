<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <link type="text/css" href="css/homePage.css" rel="stylesheet">
  <link rel="stylesheet" href="css/shutter.css">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="shortcut icon" href="/favicon.ico" >
  <script src="js/imageChange.js" type="text/javascript"></script>
  <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
  <title>无标题文档</title>
  <style>
p {
	margin: 0.5em 0;
}
a {
	text-decoration: none;
}
</style>
  <script src="js/jquery.min.js"></script>
  <script src="js/velocity.js"></script>
  <script src="js/shutter.js"></script>
  <script>
    $(function () {
      $('.shutter').shutter({
        shutterW: 400, // 容器宽度
        shutterH: 300, // 容器高度
        isAutoPlay: true, // 是否自动播放
        playInterval: 3000, // 自动播放时间
        curDisplay: 3, // 当前显示页
        fullPage: false // 是否全屏展示
      });
    });
  </script>
  </head>

  <body>
<a name="maj">
  <div class="data2">
      <div class="majorindex">
      <div class="index">
      <div class="image_container row"> <a href="#news">
        <div class="pic1"><img src="./images/1.png"></div>
        <div class="pic2"><img src="./images/1.png"></div>
        </a> </div>
      <div class="introduction">
          <p><b>缤纷活动</b></p>
          <p>写点介绍文字000</p>
          <p>在写点啥</p>
        </div>
    </div>
      <div class="index"> 
       <div class="image_container row"> <a href="#diary">
        <div class="pic1"><img src="./images/2.png"></div>
        <div class="pic2"><img src="./images/2.png"></div>
        </a> </div>
      <div class="introduction">
          <p><b>馆员日志</b></p>
          <p>写点介绍文字000</p>
          <p>在写点啥</p>
        </div>
    </div>
      <div class="index"> <div class="image_container row"> <a href="#rules">
        <div class="pic1"><img src="./images/3.png"></div>
        <div class="pic2"><img src="./images/3.png"></div>
        </a> </div>
      <div class="introduction">
          <p><b>规章制度</b></p>
          <p>写点介绍文字000</p>
          <p>在写点啥</p>
        </div>
    </div>
      <div class="index"><div class="image_container row"> <a href="#about">
        <div class="pic1"><img src="./images/4.png"></div>
        <div class="pic2"><img src="./images/4.png"></div>
        </a> </div>
      <div class="introduction">
          <p><b>关于我们</b></p>
          <p>写点介绍文字000</p>
          <p>在写点啥</p>
        </div>
    </div>
    </div>
</div>
  </a> <a name="news">
  <div class="News">
    <div class="more"> <a href="News/index.html"> <font color="#E5DBDB" size="+2">
    <p>更多></p>
    </font> </a> </div>
    <div class="newsPicBox"> <img src="./images/textPic.jpg">
      <p>abcdefghigkl</p>
      <p>sdfasfagawgawdsaf</p>
    </div>
    <div class="newsIndex"> 
      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,10,3,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a> <br>
<?php
}
}
?>
    </div>
  </div>
  </a> <a name="diary">
  <div class="Diary">
    <div class="more"> <a href="html/diary.html"> <font color="#E5DBDB" size="+2">
    <p>更多></p>
    </font> </a> </div>
    <div id="diaryPicBox">
      <div class="shutter">
        <div class="shutter-img"> <a href="#" data-shutter-title="hello world1"><img src="images/shutter_1.jpg" alt="#"></a> <a href="#" data-shutter-title="hello world2"><img src="images/shutter_2.jpg" alt="#"></a> <a href="#" data-shutter-title="hello world3"><img src="images/shutter_3.jpg" alt="#"></a> <a href="#" data-shutter-title="hello world4"><img src="images/shutter_4.jpg" alt="#"></a> </div>
        <ul class="shutter-btn">
          <li class="prev"></li>
          <li class="next"></li>
        </ul>
        <div class="shutter-desc">
          <p>wobuzhidao</p>
        </div>
      </div>
    </div>
  </div>
  </a> <a name="rules">
  <div class="Rules">
    <div class="more"> <a href="html/ruler.html"> <font color="#E5DBDB" size="+2">
    <p>更多></p>
    </font> </a> </div>
    <div class="rulesIndex"> <img src="./images/5.png">
      <div class="introduction"> <b>
        <p>规章制度</p>
        </b>
        <p>介绍介绍介绍</p>
      </div>
      <div class="rulesMore"><a href=""><img src="./images/6.png"></a></div>
    </div>
    <div class="rulesIndex"> <img src="./images/5.png">
      <div class="introduction"> <b>
        <p>规章制度</p>
        </b>
        <p>介绍介绍介绍</p>
      </div>
      <div class="rulesMore"><a href=""><img src="./images/6.png"></a></div>
    </div>
    <div class="rulesIndex"> <img src="./images/5.png">
      <div class="introduction"> <b>
        <p>规章制度</p>
        </b>
        <p>介绍介绍介绍</p>
      </div>
      <div class="rulesMore"><a href=""><img src="./images/6.png"></a></div>
    </div>
  </div>
  </a> <a name="about">
  <div class="AboutUs">
    <div class="more"> <a href="html/aboutus.html"> <font color="#E5DBDB" size="+2">
    <p>更多</p>
    </font> </a> </div>
    <div class="aboutTextBox">
    <font size="+2" color="#FFFFFF">
    	<p>写点啥</p>
    	<p>再写点啥</p>
    	<p>继续写点啥</p>
    	<p>继续写点啥</p>
    	<p>继续写点啥</p>
    	<p>继续写点啥</p>
    	<p>继续写点啥</p>
    	<p>继续写点啥</p>
    	</font>
    </div>
  </div>
  </a>
<div class="version"> </div>
</body>
</html>