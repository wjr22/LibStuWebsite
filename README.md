# library sutdents website
* 使用 phpStudy 完成网站部署
* 后台使用 帝国cms 7.2 version
* directory structure:
>1. \./index.html : weibsite homepage
>2. \./html/ : it save html template,include :
>>		2.1		News Template,include:
>>>		2.1.1	newsContentOriginal.html : News Content original vesion;
>>>		2.1.2	newsContentTemplatePost.html : News Content template which will Post;
>>>		2.1.3	newsContentTemplatePull.html : default News Content template(Pull form the background management system); 
>>>		2.1.4	newsIndexOriginal.html : NewsList Index original vesion;
>>>	    2.1.5	newsIndexTemplatePost.html : NewsList Index template which will Post;
>>>		2.1.6	newsIndexTemplatePull.html : default NewsList Index template(Pull form the background management system);
>>		2.2		about us
>>		2.3		diary
>>		2.4		rules
>3. \./css/ : include :
>>		3.1		homepage css
>>		3.2		New css
>>		3.3  	shutter (轮播图样式表)
>4. \./News/ the background management system automatically generated
>>		/Mews/index.html : /html/newsIndexTemplatePush
>>		/News/date/ : contain all newsContent pushing in this day
>5. \./images/ as letter
>6. \./js/ remains to be improved
##Test!
> 1. 新闻文本发布测试
>>  1.1样式测试：