<?php
		define('empirecms','wm_chief');
		$check_tbname='news';
		$check_infoid=81;
		$check_classid=34;
		$check_path="../../";
		require("../../e/class/CheckLevel.php");
		?><!DOCTYPE html>
<html lang="en">
<head>
    <title>yetpress - cps平台相关 - 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content=" 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料"/>
<meta name="description" content=" 网站建设 资源分享 网络赚钱 英语学习 创意恶搞 绝密资料" />
    <link rel="stylesheet" href="http://cn.yetpress.com/skin/yetpress_cn/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="http://cn.yetpress.com/favicon.ico" type="image/x-icon" />
    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://cn.yetpress.com/skin/yetpress_cn/css/style.css?v=102014" />

    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jcarousellite.js" type="text/javascript"></script>   
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.qtip.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/plx_global.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/headroom.min.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.pin.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.grid-a-licious.min.js"></script> 
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.actual.js" type="text/javascript"></script> <!-- 获取隐藏元素真是宽高 -->
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/MSClass.js" type="text/javascript"></script>
    <script src="http://cn.yetpress.com/skin/yetpress_cn/js/yet_cn.js" type="text/javascript"></script>
    <script type="text/javascript">
        var loggedIn = false;
        var dark = false;
    </script>
    <!--[if lt IE 9]>  
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>  
    <![endif]-->
    <SCRIPT LANGUAGE=JavaScript>
    <!--
    function getLight(pars){if(pars=="open"){close_light(this)}else{close_light(this)}};function thisMovie(movieName){if(navigator.appName.indexOf("Microsoft")!=-1){return window[movieName]}else{return document[movieName]}}
    //-->
    </SCRIPT> 
</head>
<body class="feature home">
    <div class="wrapper">
        <div class="header header1" id="header">
            <div class="logo">
                <a href="http://cn.yetpress.com/"><img src="http://cn.yetpress.com/skin/yetpress_cn/images/logo_cn.png" alt="" /></a>
            </div>

            <div class="tabs">
                <ul>
                    <li><a href="http://cn.yetpress.com/web_dev/">网络编程</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/web_dev/php/">php&amp;cms</a></li>
                                                            <li><a href="http://cn.yetpress.com/web_dev/databases/">数据库</a></li>
                                                            <li><a href="http://cn.yetpress.com/web_dev/html_js/">html&amp;js</a></li>
                                                            <li><a href="http://cn.yetpress.com/web_dev/server/">服务器</a></li>
                                                            <li><a href="http://cn.yetpress.com/web_dev/android/">Android</a></li>
                                                            <li><a href="http://cn.yetpress.com/web_dev/tips/">资源/技巧</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li><a href="http://cn.yetpress.com/marketer/">网络赚钱</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/marketer/yetpress/">本站精品</a></li>
                                                            <li><a href="http://cn.yetpress.com/marketer/information/">活动资讯</a></li>
                                                            <li><a href="http://cn.yetpress.com/marketer/projects/">项目分享</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li><a href="http://cn.yetpress.com/secret_stuff/">绝密资料</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/secret_stuff/resource_list/">资料列表</a></li>
                                                            <li><a href="http://cn.yetpress.com/secret_stuff/free_samples/">免费分享</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li><a href="http://cn.yetpress.com/english/">英语学习</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/english/materials/">精品资料</a></li>
                                                            <li><a href="http://cn.yetpress.com/english/learning_notes/">学习笔记</a></li>
                                                            <li><a href="http://cn.yetpress.com/english/entertainment/">Entertainment</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li class="subline"><a href="http://cn.yetpress.com/life/">生活娱乐</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/life/life_tips/">生活诀窍</a></li>
                                                            <li><a href="http://cn.yetpress.com/life/ideas/">创意恶搞</a></li>
                                                            <li><a href="http://cn.yetpress.com/life/social_experience/">社会实验</a></li>
                                                            <li><a href="http://cn.yetpress.com/life/sexy_stuff/">大型福利</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li class="subline"><a href="http://cn.yetpress.com/tools/">工具/软件</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/tools/programme_tools/">网络/营销</a></li>
                                                            <li><a href="http://cn.yetpress.com/tools/creation_tools/">生活/娱乐</a></li>
                                                            <li><a href="http://cn.yetpress.com/tools/cracks/">破解收费</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li class="subline"><a href="http://cn.yetpress.com/about/">关于我们</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/about/our_service/">服务与案例</a></li>
                                                            <li><a href="http://cn.yetpress.com/about/our_activities/">本站活动</a></li>
                                                            <li><a href="http://cn.yetpress.com/about/faq/">常见问答</a></li>
                                                            <li><a href="http://cn.yetpress.com/about/notice/">公告信息</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li class="subline"><a href="http://cn.yetpress.com/affiliate/">精品推荐</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/affiliate/mall/">yetpress商城</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li class="subline"><a href="http://cn.yetpress.com/additional/">查看更多</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/additional/social_negtive/">灰色社会</a></li>
                                                                   
                        </ul>  
                    </li>
                </ul>
            </div>
            
        </div>
        <div class="clear"></div>
        <div class="header header2" >
            <div class="tabs">
                <ul>
                    <li><a href="life/">生活娱乐</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/life/life_tips/">生活诀窍</a></li>
                                                            <li><a href="http://cn.yetpress.com/life/ideas/">创意恶搞</a></li>
                                                            <li><a href="http://cn.yetpress.com/life/social_experience/">社会实验</a></li>
                                                            <li><a href="http://cn.yetpress.com/life/sexy_stuff/">大型福利</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li><a href="tools/">工具/软件</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/tools/programme_tools/">网络/营销</a></li>
                                                            <li><a href="http://cn.yetpress.com/tools/creation_tools/">生活/娱乐</a></li>
                                                            <li><a href="http://cn.yetpress.com/tools/cracks/">破解收费</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li><a href="about/">关于我们</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/about/our_service/">服务与案例</a></li>
                                                            <li><a href="http://cn.yetpress.com/about/our_activities/">本站活动</a></li>
                                                            <li><a href="http://cn.yetpress.com/about/faq/">常见问答</a></li>
                                                            <li><a href="http://cn.yetpress.com/about/notice/">公告信息</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li><a href="affiliate/">精品推荐</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/affiliate/mall/">yetpress商城</a></li>
                                                                   
                        </ul>  
                    </li>
                    <li><a href="additional/">查看更多</a>
                        <ul>
                                                            <li><a href="http://cn.yetpress.com/additional/social_negtive/">灰色社会</a></li>
                                                                   
                        </ul>  
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <!--<div class="list_bannerads">
            <ul>
                <li style="width:20%"><script src="/d/js/acmsd/thea4.js"></script></li>
                <li style="width:60.9%"><script src="/d/js/acmsd/thea2.js"></script></li>
                <li style="width:19.1%"><script src="/d/js/acmsd/thea3.js"></script></li>
                <div class="clear"></div>
            </ul>
            
        </div>-->
        <DIV class="close_light_bg" id="close_light_bg"></DIV> <!-- 关灯 背景层 播放器跨终端 -->
        <div class="content"> 
            <div class="main">
            <!-- BEGIN CONTENT AREA -->
                <div class="list_main">
                    <div class="list_left">
                        <div class="topclass">
                            mervyn私密区                        </div>
                        <!--<div class="user_form">
                            <a href="javascript:void(0)" class="user_login">登录</a>
                            <a href="javascript:void(0)" class="user_reg">注册</a>
                        </div>-->
                        <script src="http://cn.yetpress.com/e/member/login/loginjs_yetcn.php"></script>
                        <ul class="left_navul">
                                                        <div class="clear"></div>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="list_middle">
                        <div class="intro_title">
                            <div class="crumb">
                                位置：<a href="http://cn.yetpress.com/">首页</a>&nbsp;>&nbsp;<a href="http://cn.yetpress.com/sec/">mervyn私密区</a>                            </div>
                            <div id="intro_title_wrap">点击展开栏目简介</div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <div class="intro_text">
                                                                                    <pre></pre>
                                                    </div>
                        <div class="clear"></div>
                        <div class="article_content">
                            <div class="content_title"><h4>cps平台相关</h4></div>
                            <div class="article_info">
                                发布时间：2015-04-09 &nbsp;&nbsp;
                                发布者：mervyn &nbsp;&nbsp;
                                <!-- 字体大小：12px 14px&nbsp; -->
                                <a href="http://cn.yetpress.com/e/tool/feedback/?bid=2&info_id=81&info_url=http://cn.yetpress.com/sec/2015-04-09/81.php">[ 信息报错 ]</a>
                                <a href="">[ 意见建议 ]</a>
                                <a href="http://cn.yetpress.com/e/tool/feedback/?bid=3&info_id=81&info_url=http://cn.yetpress.com/sec/2015-04-09/81.php">[ 请求删帖 ]</a>
                                <a href="javascript:void(0);" class="font-bigger">[ bigger ]</a>
                            </div>
                            <div class="clear"></div>
                            <style type="text/css">
                                .video {
                                    OVERFLOW:hidden;
                                    WIDTH:100%;
                                    POSITION:relative;
                                }
                                .close_light_bg{
                                    DISPLAY:none;
                                    BACKGROUND:#000;
                                    FILTER:alpha(opacity=95);
                                    LEFT:0px;
                                    WIDTH:100%;
                                    POSITION:absolute;
                                    TOP:0px;
                                    HEIGHT:100%;
                                    opacity:.95
                                }
                            </style>
                                                        <div class="video_share" style="margin-top:10px;float:right;margin-right:2%;">
                                <!-- JiaThis Button BEGIN -->
                                <div id="ckepop" style="font-size:14px;">
                                    <span class="jiathis_txt">分享到：</span>
                                    <a class="jiathis_button_weixin">微信</a> 
                                    <a class="jiathis_button_tsina">新浪微博</a> 
                                    <a href="http://www.jiathis.com/share"  class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
                                    <a class="jiathis_counter_style"></a> </div> 
                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
                                </div> <!-- JiaThis Button END -->
                            </div>
                            <div class="clear"></div>
                            <div class="content_body">
                                <p><a href="http://www.dzgg.com/affiliate/" _src="http://www.dzgg.com/affiliate/">http://www.dzgg.com/affiliate/</a>&nbsp;大众广告联盟 多种方式cpa，cps等 &nbsp;评测分比较高 已注册</p><p><span style="font-family: Verdana, Arial, sans-serif; font-size: 12px; background-color: rgb(250, 250, 250);"><a href="https://www.chanet.com.cn/" _src="https://www.chanet.com.cn/">https://www.chanet.com.cn/</a>&nbsp; 成果网&nbsp;&nbsp;用户名&nbsp;m200890234</span> 大量cps产品，亦有cpa等 &nbsp;已注册</p><p><a href="http://www.aizhigu.com.cn/union/index.php" _src="http://www.aizhigu.com.cn/union/index.php">http://www.aizhigu.com.cn/union/index.php</a>&nbsp;爱之谷官方联盟 成果网上也有，佣金比例还是成果网上的高</p><p><a href="http://www.huizhicps.com/" _src="http://www.huizhicps.com/">http://www.huizhicps.com/</a>&nbsp;汇智网cps &nbsp;已注册</p>                            </div>
                            <div class="article_pager"></div>
                            <div class="article_prenext">
                                                                    <p>上篇：<a href="http://cn.yetpress.com/sec/2015-04-09/80.php" title="视频加密工具相关">视频加密工具相关</a></p>
                                                                                                    <p>下篇：<a href="http://cn.yetpress.com/sec/2015-12-20/129.php" title="暂存">暂存</a></p>
                                                            </div>
                            <div class="clear"></div>
<script>
function CheckPl(obj){
    if(obj.saytext.value==""){
        alert("您没什么话要说吗？");
        obj.saytext.focus();
        return false;
    }
    return true;
}
</script>
<div class="article_comment">
    <form action="http://cn.yetpress.com/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
        <div class="comment_title"><span>发表评论</span>
            <a href=javascript:void(0) class="comment_count" target="_blank">​共有<span>​<script type="text/javascript" src="http://cn.yetpress.com/e/public/ViewClick/?classid=34&id=81&down=2"></script></span>​条评论</a>​
        </div>
        <script>
        $(function(){
            var url="http://cn.yetpress.com/e/pl/?classid=34&id=81";
            $('.comment_count').click(function(){
                //评论数链接不正常 改用window.open控制
                window.open(url);
            })
        })
        </script>
        <div class="comment_area">
            <div class="comment_text">
                <textarea name="saytext" id="saytext" class="form-control"></textarea>
            </div>
            <div class="comment_userinfo">
                <ul>
                    <li>
                        <input type="text" class="comment_box form-control" name="username" id="username" placeholder="用户名">
                    </li>
                    <li>
                        <input type="password" class="comment_box form-control" name="password" id="password" placeholder="密码">
                    </li>
                    <li>
                        <input type="key" class="comment_box form-control" name="key" id="key" placeholder="验证码">
                        <img src="http://cn.yetpress.com/e/ShowKey/?v=pl" align="absmiddle">
                    </li>
                    <li>
                        <input name="id" type="hidden" id="id" value="81" />
                        <input name="classid" type="hidden" id="classid" value="34" />
                        <input name="enews" type="hidden" id="enews" value="AddPl" />
                        <input name="repid" type="hidden" id="repid" value="0" />
                        <input type="hidden" name="ecmsfrom" value="http://cn.yetpress.com/sec/2015-04-09/81.php"><!-- 提交后返回地址 9为提交页面地址 -->
                        <input type="submit" class="comment_submit" value="提交">
                        <input name="nomember" type="checkbox" id="nomember" value="1" checked="checked">匿名发表
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="clear"></div>
                        </div>
                    </div>
                    <div class="list_right">
    <ul>
        <li><a href=""><img src="http://cn.yetpress.com/skin/yetpress_cn/images/demo1.jpg" alt=""></a></li>
    </ul>
</div>
                    <div class="clear"></div>
                </div>
             <div class="clear"></div>
                <!-- <div class="inner_column">
                    <div class="column" style="background:#8FDABA">
                        
                    </div>
                    <div class="column col_middle" style="background:#E9D89C">
                        
                    </div>
                    <div class="column" style="background:#B6D39A">
                        
                    </div>
                    <div class="clear"></div>
                  </div> -->
                  
                  
            <!-- END CONTENT AREA -->
            </div>
        </div>
        <div class="footer">
      <div class="links">
        站点站务：<a href="/contact">联系我们</a> | <a href="" target="_blank">商务合作</a> | <a href="">兼职合作</a> | <a href="">服务咨询</a> | <a href="/faq">常见问答</a> | <a href="/terms">网站声明</a> | <a href="">友链申请</a> | <a href="http://cn.yetpress.com/projects/" target="_blank">案例入口</a> 
      </div>
      <div class="friendlinks">
        友情链接：<a href="http://poloniex.freshdesk.com" target="_blank">yetpress</a> | <a href="/faq">FAQ</a> | <a href="/terms">Terms and Conditions</a>
      </div>
      <div class="meta">
        <div class="info">
            <p>
                Server time: <strong><span id='serverTime'>2016-06-28 19:18:23</span></strong>&nbsp;&nbsp;&nbsp;Users currently online: <strong><span id='usersOnline'>667</span></strong>&nbsp;&nbsp;&nbsp;Accounts registered: <strong><span id='accountsRegistered'>61744</span></strong><br />
            </p>
            <p>&copy; Yetpress, LLC 2014 - Powered by empireCms <script language="javascript" type="text/javascript" src="http://js.users.51.la/17693852.js"></script><noscript><a href="http://www.51.la/?17693852" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/17693852.asp" style="border:none" /></a></noscript></p>
        </div>
      </div>
    </div>    
</div>
<div class="clear"></div>
<div class="login user_wrap" style="display:none;">
    <form method="post" name="form_login" action="http://cn.yetpress.com/e/member/doaction.php">
        <input type="hidden" name="enews" value="login">
        <input type="hidden" name="ecmsfrom" value="">
        <input type="hidden" name="tempurl" value="">
        <input type="hidden" name="tobind" id="tobind" value="0">
        <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" name="username" placeholder="用户名" id="username">
              <label class="login-field-icon fui-user" for="username"></label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control login-field" name="password" placeholder="密码" id="password">
              <label class="login-field-icon fui-lock" for="password"></label>
            </div>
            <a class="btn btn-success btn-lg btn-user s_login" href="javascript:void(0)" id="gologin">登陆</a>
            <a class="btn btn-primary btn-lg btn-user s_reg" href="javascript:void(0)">注册</a>
            <a class="btn btn-close" href="javascript:void(0)">关闭</a>
        </div>
    </form>
</div>
</div>
<div class="clear"></div>
<div class="reg user_wrap" style="display:none;">
    <form method="post" name="form_reg" action="http://cn.yetpress.com/e/member/doaction.php">
        <input type="hidden" name="enews" value="register">
        <input type="hidden" name="groupid" value="1"><!-- 普通用户 -->
        <input type="hidden" name="ecmsfrom" value="">
        <input type="hidden" name="tempurl" value="">
        <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" name="username" placeholder="用户名(必填)" id="username">
              <label class="login-field-icon fui-user" for="username"></label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control login-field" name="password" placeholder="密码(必填)" id="password">
              <label class="login-field-icon fui-lock" for="password"></label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control login-field" name="repassword" placeholder="重复密码(必填)" id="repassword">
              <label class="login-field-icon fui-lock" for="repassword"></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control login-field" name="email" placeholder="邮箱(必填)" id="email">
              <label class="login-field-icon fui-user" for="email"></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control login-field" name="qq" placeholder="QQ号码" id="qq">
              <label class="login-field-icon fui-user" for="qq"></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control login-field" name="tel" placeholder="手机号码" id="tel">
              <label class="login-field-icon fui-user" for="tel"></label>
            </div>
            <a class="btn btn-success btn-lg btn-user s_reg" href="javascript:void(0)" id="goreg">注册</a>
            <a class="btn btn-primary btn-lg btn-user s_login" href="javascript:void(0)">登陆</a>
            <a class="btn btn-close" href="javascript:void(0)">关闭</a>
        </div>
     </form>   
</div>
<script src="http://cn.yetpress.com/skin/yetpress_cn/js/totop.js"></script> <!-- 返回顶部 -->
<script src="http://cn.yetpress.com/skin/yetpress_cn/js/jquery.blockUI.js"></script>
<!-- http://malsup.com/jquery/block/#demos -->
<script>
    //当前页url
    function loginReturnUrl(){
        //多次提交错误返回后，acts参数会多次出现，每次要先过滤掉参数(结合项等的动态页可能自带有参数，因此要指定截取"acts"之前的内容)
        var link=window.location.href;
        var url="";
        var acts=getUrlParam('acts');
        if(acts){
            url=link.substring(0, link.indexOf('acts'));
        }else{
            url=link;
        }
        return url+"?&acts=login";
    }
    function RegReturnUrl(){
        var link=window.location.href;
        var url="";
        var acts=getUrlParam('acts');
        if(acts){
            url=link.substring(0, link.indexOf('acts'));
        }else{
            url=link;
        }
        return url+"?&acts=reg";
    }
    function getUrlParam(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r!=null) return unescape(r[2]); return null;
    }
    function getReturnUrl(){
        var link=window.location.href;
        var url="";
        var acts=getUrlParam('acts');
        if(acts){
            url=link.substring(0, link.indexOf('acts'));
        }else{
            url=link;
        }
        return url;
    }
    $(function(){
        $('.login input[name="ecmsfrom"]').val(getReturnUrl());
        $('.reg input[name="ecmsfrom"]').val(getReturnUrl());
        $('.login input[name="tempurl"]').val(loginReturnUrl());
        $('.reg input[name="tempurl"]').val(RegReturnUrl());
        var act=getUrlParam('acts');//登陆注册错误返回时触发的弹窗
        if(act=="login"){
            $(".user_login").click();
        }else if(act=="reg"){
            $(".user_reg").click();
        }
    })
    var ui_width=$(window).width();
    var f_w="50%";//宽度
    var f_l="25%";//距左
    var f_h="25";//居顶
    if(ui_width<768){
        f_w="88%";
        f_l="6%";
    }
    $(".user_login").click(function(){
        $.blockUI({
            message: $(".login"),
            css: {
                background:"transparent",
                border:"none",
                background:"none",
                width:f_w,
                left:f_l,
                top:"25%",
                cursor:"default"
            },
            overlayCSS:{
                cursor:"default",
            }
        });
    })
    $(".user_reg").click(function(){
        var h=$(".reg").height();
        var top=($(window).height()-h)/2;
        // alert(h);
        $.blockUI({
            message: $(".reg"),
            css: {
                background:"transparent",
                border:"none",
                background:"none",
                width:f_w,
                left:f_l,
                top:top,
                cursor:"default"
            },
            overlayCSS:{
                cursor:"default",
            }
        });
    })
    $(".btn-close").click(function(){
        $.unblockUI({
            message: $(".user_wrap"),
        });
    })
    $('.login .s_reg').click(function(){
        $.unblockUI({
            message: $(".login"),
            onUnblock: function(){$(".user_reg").click();}
        });
    })
    $('.reg .s_login').click(function(){
        $.unblockUI({
            message: $(".reg"),
            onUnblock: function(){  $(".user_login").click();}
        });
    })
    $('#gologin').click(function() {
        $('form[name="form_login"]').submit();
    });
    $('#goreg').click(function() {
        var username=$('.reg #username').val();
        var password=$('.reg #password').val();
        var repassword=$('.reg #repassword').val();
        var email=$('.reg #email').val();
        var reg =/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;
        
        if(username==""){
            alert("用户名必填");
            $("#username").focus();
            return false;
        }else if(password==""){
            alert("密码必填");
            $("#password").focus();
            return false;
        }else if(repassword==""){
            alert("重复密码必填");
            $("#repassword").focus();
            return false;
        }else if(email==""){
            alert("邮箱必填");
            $("#email").focus();
            return false;
        }else if(!reg.test(email)){
            alert("邮箱格式有误");
            return false;
        }else if(password!=repassword){
            alert("两次密码输入不一致");
            $("#password").focus();
            return false;
        }
        $('form[name="form_reg"]').submit();
    });
</script>
</body>
</html>