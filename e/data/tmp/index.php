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
  <link rel="shortcut icon" href="/favicon.ico">
  <script src="js/imageChange.js" type="text/javascript"></script>
  <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
  <title>南师图书馆馆员协会-首页</title>
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
  <script type="text/javascript">
    function getWidthValue() {
      var marginl = (screen.availWidth - 30 - 1178) / 2;
      //document.getElementById("margin").style.marginLeft=marginl+"px";
      document.getElementById("margin").style.marginLeft = marginl + "px";
    }
  </script>
</head>

<body onload="getWidthValue()">
  <div id="margin">
    <a name="maj">
      <div class="data2">
        <div class="majorindex">
          <div class="index">
            <div class="image_container row">
              <a href="#news">
                <div class="pic1">
                  <img src="./images/1.png">
                </div>
                <div class="pic2">
                  <img src="./images/1.png">
                </div>
              </a>
            </div>
            <div class="introduction">
              <br />
              <p>
                <h2>缤纷活动</h2>
              </p>
              <p></p>
              <p></p>
            </div>
          </div>
          <div class="index">
            <div class="image_container row">
              <a href="#diary">
                <div class="pic1">
                  <img src="./images/2.png">
                </div>
                <div class="pic2">
                  <img src="./images/2.png">
                </div>
              </a>
            </div>
            <div class="introduction">
             <br />
 <p>
                <h2>馆员日志</h2>
              </p>
              <p></p>
              <p></p>
            </div>
          </div>
          <div class="index">
            <div class="image_container row">
              <a href="#rules">
                <div class="pic1">
                  <img src="./images/3.png">
                </div>
                <div class="pic2">
                  <img src="./images/3.png">
                </div>
              </a>
            </div>
            <div class="introduction">
              <br /><p>
                <h2>规章制度</h2>
              </p>
              <p></p>
              <p></p>
            </div>
          </div>
          <div class="index">
            <div class="image_container row">
              <a href="#about">
                <div class="pic1">
                  <img src="./images/4.png">
                </div>
                <div class="pic2">
                  <img src="./images/4.png">
                </div>
              </a>
            </div>
            <div class="introduction">
              <br /><p>
                <h2>关于我们</h2>
              </p>
              <p></p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <a name="news">
      <div class="News">
        <div class="more">
          <a href="xinwen/index.html">
            <font color="#E5DBDB" size="+2">
              <p>更多></p>
            </font>
          </a>
        </div>
        <div class="newsPicBox">
          <img src="./images/textPic.jpg">
          <p>这是我们的合照</p>
          <p></p>
        </div>
        <div class="newsIndex">
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,10,3,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <a href="<?=$bqsr['titleurl']?>" target="_blank">
            <u>
              <?=$bqr['title']?>
                <small>
                  <?=date('Y-m-d',$bqr[newstime])?>
                </small>
            </u>
          </a>
          <br> <?php
}
}
?>
        </div>
      </div>
    </a>
    <a name="diary">
      <div class="Diary">
        <div class="more">
          <a href="html/diary.html">
            <font color="#E5DBDB" size="+2">
              <p>更多></p>
            </font>
          </a>
        </div>
        <div id="diaryPicBox">
          <div class="shutter">
            <div class="shutter-img">
              <a href="#" data-shutter-title="图协成员志愿展示">
                <img src="images/shutter_1.jpg" alt="#">
              </a>
              <a href="#" data-shutter-title="上书比赛">
                <img src="images/shutter_2.jpg" alt="#">
              </a>
              <a href="#" data-shutter-title="旧书封面展示">
                <img src="images/shutter_3.jpg" alt="#">
              </a>
              <a href="#" data-shutter-title="与学长交流">
                <img src="images/shutter_4.jpg" alt="#">
              </a>
            </div>
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
    </a>
    <a name="rules">
      <div class="Rules">
        <div class="more">
          <a href="html/ruler.html">
            <font color="#E5DBDB" size="+2">
              <p>更多></p>
            </font>
          </a>
        </div>
        <div class="rulesIndex">
          <img src="./images/5.png">
          <div class="introduction">
            <b>
              <p>学生馆员</p>
            </b>
            <p>学生馆员权力义务</p>
          </div>
          <div class="rulesMore">
            <a href="html/ruler.html#Students">
              <img src="./images/6.png">
            </a>
          </div>
        </div>
        <div class="rulesIndex">
          <img src="./images/5.png">
          <div class="introduction">
            <b>
              <p>组织管理</p>
            </b>
            <p>各部门及经费</p>
          </div>
          <div class="rulesMore">
            <a href="html/ruler.html#Origanization">
              <img src="./images/6.png">
            </a>
          </div>
        </div>
        <div class="rulesIndex">
          <img src="./images/5.png">
          <div class="introduction">
            <b>
              <p>附则</p>
            </b>
            <p>优秀馆员评定</p>
          </div>
          <div class="rulesMore">
            <a href="html/ruler.html#bylaw">
              <img src="./images/6.png">
            </a>
          </div>
        </div>
      </div>
    </a>
    <a name="about">
      <div class="AboutUs">
        <div class="more">
          <a href="html/aboutus.html">
            <font color="#E5DBDB" size="+2">
              <p>更多</p>
            </font>
          </a>
        </div>
        <div class="aboutTextBox">
          <font size="+2" color="#FFFFFF">
            <p style="margin-left:200px;margin-right:200px;margin-top:50px;"> 南京师范大学图书馆学生馆员协会是由学生自发组织、图书馆协助成立，由会员自主管理，并由会员自主策划、组织实施南京师范大学图书馆各项服务和活动的学生社团。
            </p>
            <p style="margin-left:200px;margin-right:200px;margin-top:50px;"> 协会以全体师生为服务对象，参与图书馆管理，协助图书馆开展各项工作，组织全体师生开展图书节、争做文明读者等活动，表彰先进，树立正气，引导全体师生养成文明阅读、勤奋好学之风。
            </p>
          </font>
        </div>
      </div>
    </a>
    <div class="version"> </div>
  </div>
</body>

</html>