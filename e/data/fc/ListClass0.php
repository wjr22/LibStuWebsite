<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=2></td><td><a href='#e' onclick=addi(2)><img src='../data/images/txt.gif' border=0></a></td><td align=center>2</td><td><input type=checkbox name=reclassid[] value=2> <a href='/News/' target=_blank>News</a></td><td align=center>0</td><td><a href='#e' onclick=editc(2)>修改</a> <a href='#e' onclick=copyc(2)>复制</a> <a href='#e' onclick=delc(2)>删除</a></td><td><a href='#e' onclick=relist(2)>刷新</a> <a href='#e' onclick=renews(2,'news')>信息</a> <a href='#e' onclick=rejs(2)>JS</a> <a href='#e' onclick=tvurl(2)>调用</a> <a href='#e' onclick=ttc(2)>分类</a> <a href='#e' onclick=docinfo(2)>归档</a></td></tr>