<?php
   include_once ('getIp.php');
   ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="frankg40,frank,child,homepage" />
        <meta name="description" content="This is the homepage of frankgt40. Currently, Frank Child is a master student of SECE, Peking University, whose research focuses on the Information Security." />
        <meta name="author" content="frankgt40" />
        <title>frankgt40's page</title>
        <link rel="stylesheet" type="text/css" href="css/960_12_col.css"/>
        <link rel="stylesheet" type="text/css" href="css/index.css" />
    </head>
    <body id="body">
    	
        <div class="header">
            <div class="container_12 clearfix">
                <div class="grid_5">
                    <img class="logo" src="images/index-logo.png" alt="frankgt40" width="157" height="34" />
                    <div class="paddinStuff">
                        hidden
                    </div>
                    <a href="index.php"> <img class="logoHome" src="images/logo-homepage.png" width="190" height="26" /> </a>
                </div>
                <div class="navbar grid_6">
                    <a href="index.php">Home</a> / <a href="works.html">Works</a> / <a href="" class="notYet">Hobbies</a> / <a href="contact.php">Contact me</a>
                </div>
            </div>
        </div><!-- .header -->
        <div class="wrapper">
            <div class="simpleIntroduction container_12">
                <div class="grid_4 push_1" id="touxiang"><img src="images/touxiang.jpg" width="260" height="270" /></div>
                <div class="">
                    <h1 class="push_1 grid_3">Frank Child</h1>
                    <p class="push_1 grid_3">
                        pseudonym is frankgt40
                    </p>
                </div>
                <div class="grid_6 push_1" id="shorIntro">
                    <p>Hello, my friend from 
<?php 
echo $visitor->province;
?>
                        . Currently, I am a PhD student in <a href="http://www.ics.uci.edu" target="_blank">Computer Science Department</a>, at <a href="http://www.uci.edu" target="_blank"><i>University of California, Irvine (UCI.)</i></a>. 
                    </p>
                    <h2>Preparing GRE exam is the hardest thing in the world!</h2>
                    <h2>And, memorizing words is the hardest thing of preparing GRE exam!</h2>
                    <h2 class="clickToRemove"><span class="toBeRemoved">If </span> we can do better<span class="toBeRemoved">, why not?</span>!</h2>
                    <h3>Get my GnuPG/PGP <a href="frank_pub_key.asc">PUBLIC KEY</a></h3>
                    <h2><a href="application.html">The information for my application.</a></h2>
                    <h2><span class="news-indexpage">News:</span><a href="cse2014.html">My visit on CSE 2014, Chengdu.</a></h2>
                </div>
            </div><!-- .simpleIntroduction -->
        </div><!-- .wrapper -->
        <div class="moreInformations">
            <div class="container_12">
                <div class="grid_3"><h4>My favorites:</h4></div>
                <div class="grid_9"></div>
                <a href="" class="notYet"><div class="grid_4 item" id="infor1"></div></a>
                <a href="" class="notYet"><div class="grid_4 item" id="infor2"></div></a>
                <a href="" class="notYet"><div class="grid_4 item unknow" id="infor3"></div></a>
                <a href="" class="notYet"><div class="grid_4 item unknow" id="infor4"></div></a>
                <a href="" class="notYet"><div class="grid_4 item unknow" id="infor5"></div></a>
                <a href="" class="notYet"><div class="grid_4 item unknow" id="infor6"></div></a>
            </div>
        </div><!-- .moreInformation -->
        <div class="footer clearfix">
            <h2>Welcome to my homepage!</h2>
            <div class="container_12 footer_content">
               <div class="grid_4"><h3>My Works</h3>
                     <ul>
                        <li><a href="iCar">iCar</a></li>
                        <li><a href="http://secret-sharing.com">Secret Sharing</a></li>
                        <li><a href="#" class="notYet">Compilers</a></li>
                        <li><a href="#" class="notYet">Automations</a></li>
                        <li><a href="#" class="notYet">Linux</a></li>
                        <li><a href="songs/what_does_the_fox_say.html">Web frontside</a></li>
                        <!--<li><a href="#" class="notYet">Web backside</a></li>-->
                    </ul>
                </div><!-- end of div -->
                <div class="grid_4"><h3>My Hobies</h3>
                    <ul>
                    <li><a href="#" class="notYet">Guitar playing</a></li>
                    <li><a href="#" class="notYet">Coding</a></li>
                    <li><a href="#" class="notYet">Skateboarding</a></li>
                    </ul>
                </div><!-- end of div -->
                <div class="grid_4"><h3><a href="http://www.frankgt40.com/wordpress">Blog</a></h3>
                    <ul>
                    <!--
                    <li><a href="#" class="notYet">Learnning Ruby</a></li>
                    <li><a href="#" class="notYet">Prepare GRE</a></li>
                    <li><a href="#" class="notYet">Learnning jQuery</a></li>
                    <li><a href="#" class="notYet">Book reviews</a></li>
                    -->
                    <li><a href="http://frankgt40.com/wordpress/?page_id=10" >Computer Languages</a></li>
                    <li><a href="http://frankgt40.com/wordpress/?page_id=36" >Frameworks</a></li>
                    <li><a href="http://frankgt40.com/wordpress/?page_id=39" >Algorithms</a></li>
                    <li><a href="http://frankgt40.com/wordpress/?page_id=42" >Preparing GRE</a></li>
                    <li><a href="http://frankgt40.com/wordpress/?page_id=52" >Book Reviews</a></li>
                    <li><a href="http://frankgt40.com/wordpress/?page_id=46" >Others...</a></li>
                    </ul>
                </div>
                <div class="grid_12 end_of_my_page">
                    <p>
                    If you have any issue, please <a href="mailto:dady@frankgt40.com">email me</a>.
                    </p>
                </div>
            </div>
            <script>
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] ||
                    function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-55161402-2', 'auto');
                ga('send', 'pageview');
            </script>

            <a href="http://webscan.360.cn/index/checkwebsite/url/www.frankgt40.com"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/d112d948a69277f693aa973330fe706f"/></a>

            <script type="text/javascript">
                var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F797cc56779a04c9b12d807ef6cefcbdf' type='text/javascript'%3E%3C/script%3E"));
            </script>
        </div><!-- .footer -->
        <!-- for weichat -->
        <script>
			var dataForWeixin = {
				appId : "",
				MsgImg : "http://www.frankgt40.com/images/touxiang.jpg",
				TLImg : "http://www.frankgt40.com/images/touxiang.jpg",
				url : window.location.href,
				title : "frankgt40的主页",
				desc : "点击进入frankgt40的主页，了解我的精彩人生！",
				fakeid : "",
				callback : function() {
				}
			};
		</script>
        <script src="script/weiXinShare.js"></script>
        <script type="text/javascript" src="script/jquery-1.10.2.js"></script>
        <script type="text/javascript">
            $('#touxiang').animate({opacity:1},2000);
            $('.item').animate({opacity:0.7},2000);
            $('.item').hover(function() {
                $(this).animate({opacity:1},5);
            },function() {
                $(this).animate({opacity:0.7},5);
            });
            $('.clickToRemove').click(function  () {
                event.preventDefault();
                $('.toBeRemoved').hide(1500, function(){
                    $(this).remove();
                });
            });
            
            var BOUND = -383;
            var isUpper = false;
            $(window).scroll(function() {
                //var self = this;
                var dom = $(".footer");
                var windowHeight = dom.position().top;
                var screenPosition = $(window).scrollTop();
                var top = dom.offset().top;
                var num = top - windowHeight - screenPosition;
                //alert("windowHeight: " + windowHeight);
                //alert("top: " + top);
                //alert('num: ' + num);
                if (num <= BOUND && !isUpper) {
                    //self.animationPercentage(dom, "left");
                    //self.defaults.onlyOnceLasting = true;
                    // alert('num: ' + num);
                    isUpper = true;
                    $('.header').css('visibility', 'hidden');
                } else {
                    if (num > BOUND && isUpper) {
                        isUpper = false;
                        $('.header').css('visibility', 'visible');
                    }
                }
            });
            
            $(function(){
                var x = 10;
                var y = 20;
                $("a.notYet").mouseover(function(e){
                    var screenPosition = $(window).scrollTop();
                    //console.log("over: " + e.target + "\ne.pageX: " + e.pageX + ", e.pageY: " + e.pageY + "; scrollTop: " + screenPosition + ", this.top: " + this);
                    this.myTitle = "Not yet...";
                    this.title = "";
                    var showNotYet = "<div id='notYet'>"+ this.myTitle +"<\/div>"; 
                    $("body").append(showNotYet);
                    $("#notYet").css({
                        "top": (e.pageY+y-screenPosition) + "px",
                        "left": (e.pageX+x)  + "px",
                        "z-index": 51,
                        "position": "absolute",
                        "color": "orange",
                        "font-style": "italic"
                    }).show("fast");      
                }).mouseout(function(){
                    this.title = this.myTitle;
                    $("#notYet").remove();
                }).mousemove(function(e){
                    $("#notYet").css({
                        "top": (e.pageY+y) + "px",
                        "left": (e.pageX+x)  + "px"
                    });
                });
            });
        </script>
    </body>
</html>

   