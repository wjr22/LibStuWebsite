<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link type="text/css" href="../css/News.css" rel="stylesheet">
<title>无标题文档</title>
<style>
	body {  background-color: #333333;};
</style>
<script type="text/javascript">
  function getWidthValue(){
    var marginl=(screen.availWidth-30-1178)/2;
    //document.getElementById("margin").style.marginLeft=marginl+"px";
    document.getElementById("margin").style.marginLeft=marginl+"px";
  }
</script>
</head>
<body onload="getWidthValue()">
  <div id="margin">
<div class="bg">
	<div class="indexBox">
		<nav class="mynav">
		  <ul>
		    	<li><a href="../index.html"><font color="#EBE9E9">首页</font></a></li>
		    	<li><a href="index.html"><font color="#EBE9E9">缤纷活动</font></a></li>
		    	<li><a href="../html/diary.html"><font color="#EBE9E9">馆员日志</font></a></li>
		    	<li><a href="../html/ruler.html"><font color="#EBE9E9">规章制度</font></a></li>
		    	<li><a href="../html/aboutus.html"><font color="#EBE9E9">关于我们</font></a></li>
		  </ul>
		</nav>
		<span class="target"></span>
	</div>
	<div class="currenthtml">
	 <font size="+1" color="#564747">
		<b>当前位置： 缤纷活动</b>
		</font>
	</div>
	<div id="newsTextBox">
		<div class="leftBox">
		   	<div class="newsTextBoxRecom">
		   		
		   	</div>
		   	<div class="newsHrefBox">
		   		
		   	</div>
		</div>
		<div class="newsIndexBox">
			[!--empirenews.listtemp--]
                                <tr>
                                   <td height="23">
                                <!--list.var1-->
                                  </td>
                                </tr>
                              
                       [!--empirenews.listtemp--]
               
                            <p>   [!--show.page--]</p>
                                  
		</div>
		
	</div>
</div>
<script>
"use strict";

(function () {

  var target = document.querySelector(".target");
  var links = document.querySelectorAll(".mynav a");
  var colors = ["deepskyblue", "orange", "firebrick", "gold", "magenta", "black", "darkblue"];

  function mouseenterFunc() {
    if (!this.parentNode.classList.contains("active")) {
      for (var i = 0; i < links.length; i++) {
        if (links[i].parentNode.classList.contains("active")) {
          links[i].parentNode.classList.remove("active");
        }
        links[i].style.opacity = "0.25";
      }

      this.parentNode.classList.add("active");
      this.style.opacity = "1";

      var width = this.getBoundingClientRect().width;
      var height = this.getBoundingClientRect().height;
      var left = this.getBoundingClientRect().left + window.pageXOffset;
      var top = this.getBoundingClientRect().top + window.pageYOffset;
      var color = colors[Math.floor(Math.random() * colors.length)];

      target.style.width = width + "px";
      target.style.height = height + "px";
      target.style.left = left + "px";
      target.style.top = top + "px";
      target.style.borderColor = color;
      target.style.transform = "none";
    }
  }

  for (var i = 0; i < links.length; i++) {
    /*links[i].addEventListener("click", function (e) {
      return e.preventDefault();
    });*/
    links[i].addEventListener("mouseenter", mouseenterFunc);
  }

  function resizeFunc() {
    var active = document.querySelector(".mynav li.active");

    if (active) {
      var left = active.getBoundingClientRect().left + window.pageXOffset;
      var top = active.getBoundingClientRect().top + window.pageYOffset;

      target.style.left = left + "px";
      target.style.top = top + "px";
    }
  }

  window.addEventListener("resize", resizeFunc);
})();</script>
</div>
</body>
</html>