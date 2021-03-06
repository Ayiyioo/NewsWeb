<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>新闻中心登录界面</title>
		<link rel="stylesheet" href="Public/CSS/bootstrap.min.css"/>
		<script type="text/javascript" src="Public/js/jquery.js"></script>
		<script type="text/javascript" src="Public/js/bootstrap.min.js"></script>
		<style type="text/css">
		    *{margin: 0; padding: 0;}
		    body, button, input, select, textarea{
		    	font: 12px/1.5 tahoma,arial,"Hiragino Sans GB",\5b8b\4f53;	
		    }
		    .clear{zoom: 1;}
		    .clear:after{
		    	visibility: hidden;
			    display: block;
			    font-size: 0;
			    content: " ";
			    clear: both;
			    height: 0;
		    }
		    a{
		    	text-decoration: none;
		    	color: #fff;
		    }
		    a:hover{
		    	cursor: pointer;
		    }
		    ul{list-style: none;}
		    li{
		    	display: list-item;
    			text-align: -webkit-match-parent;
    		
		    }
		    img{
		    	    border-top-color: initial;
				    border-top-style: initial;
				    border-top-width: 0px;
				    border-right-color: initial;
				    border-right-style: initial;
				    border-right-width: 0px;
				    border-bottom-color: initial;
				    border-bottom-style: initial;
				    border-bottom-width: 0px;
				    border-left-color: initial;
				    border-left-style: initial;
				    border-left-width: 0px;
				    border-image-source: initial;
				    border-image-slice: initial;
				    border-image-width: initial;
				    border-image-outset: initial;
				    border-image-repeat: initial;
		    }
            p{
            	    display: block;
				    -webkit-margin-before: 1em;
				    -webkit-margin-after: 1em;
				    -webkit-margin-start: 0px;
				    -webkit-margin-end: 0px;
            }
			.contain{
				position: relative;
			}
			.title{
				position: relative;
				width: 100%;
				height: 28px;
				line-height: 28px;
				background: #1E1B29;
				background-image: initial;
				background-position-x: initial;
				background-position-y: initial;
				background-size: initial;
				background-repeat-x: initial;
				background-repeat-y: initial;
				background-attachment: initial;
				background-origin: initial;
				background-clip: initial;
				background-color: rgba(30,27,41,0.5);
				color: #fff;
			}
			.tit_contain{
				width: 990px;
			    height: 27px;
			    margin: 0 auto;
			}
			.t_left{
				float: left;
				color: #000000;
			}
			.t_right{
				float: right;
			}
			.right_item{
				    float: left;
				    padding: 0 7px;
				    line-height: 26px;
				    height: 26px;
			}
			.right_sep{
				 float: left;
				 height: 12px;
				 width: 1px;
				 line-height: 14px;
				 margin: 7px 4px 8px;
				 background: #61676d;
				 overflow: hidden;
			}
			.btn_size{
				height: 30px;
				width: 120px;
				font-size: 12px;
				background-color:rgba(75,115,150,0.5);
				color: #fff;
				border: none;
			}
			.login_in{
			position: relative;
		    width: 990px;
		    height: auto;
		    min-height: 450px;
		    margin: 0 auto;
		    margin-top: 0px;
		    margin-right: auto;
		    margin-bottom: 0px;
		    margin-left: auto;
		    padding: 50px 0;
		    padding-top: 100px;
		    padding-right: 0px;
		    padding-bottom: 50px;
		    padding-left: 0px;
		    background-position: 0 70px;
		    background-position-x: 0px;
		    background-position-y: 70px;
		    background-repeat: no-repeat;
		    background-repeat-x: no-repeat;
		    background-repeat-y: no-repeat;
			
			}
			.login_in a{
				    float: left;
				    width: 110px;
				    height: 43px;
				    color: #fff;
				    font-size: 38px;
				    line-height: 43px;
				    cursor: pointer;
				    text-decoration: none;
				    position: relative;
			}
			.logopic{
				width: 114px;
			}
			.body_login1{
				    float: right;
				    margin: 27px 95px;
				    width: 286px;
				    height: auto;
				    position: relative;
			}
			.loginway{
				width: 286px;
				height: 45px;
				line-height: 45px;
				text-align: center;
				font-size: 20px;
				font-weight: bold;
				background: rgba(0,0,0,.5);
			    background-image: initial;
			    background-position-x: initial;
			    background-position-y: initial;
			    background-size: initial;
			    background-repeat-x: initial;
			    background-repeat-y: initial;
			    background-attachment: initial;
			    background-origin: initial;
			    background-clip: initial;
			    background-color: rgba(75,115,150, 0.498039);
			}
			.login{
				    width: 220px;
				    padding: 0 31px 0 33px;
				    position: relative;
				    overflow: hidden;
				    border: 1px solid #a7a7a7;
			}
			.body_login2{
				    border: 1px solid transparent;
    				background: rgba(75,115,150,.4);
			}
			#loginb{
				width: 286px;
				height: 245px;
				margin-top: 5px;
			}
			.formtable{
				margin-top: 10px;
			}
			.checkbox{
				width: 220px;
			}
		   .foot{
		   	position: relative;
		    width: 100%;
		    height: 80px;
		    color: #fff;
		   }
		   #foot{
		   	height: 80px;
		   	width: 735px;
		   }
		
		   
		.all{
		   	       position: absolute;
				    width: 0;
				    height: 0;
				    top: 0;
				    left: 0;
				    overflow: hidden;
				    z-index: -2;
				width:100%;
                height: 659px;
                /*background: url(img/pic.jpg) ;*/
		   }
		   .bg_show{
		   	 opacity: 1;
		   }
		   .bg{
		   	    position: absolute;
			    width: 100%;
			    height: auto;
			    top: 0;
			    left: 0;
			    overflow: hidden;
			    opacity: 0;
			    filter: alpha(opacity=0);
			    -webkit-transition: opacity .8s ease;
			    -moz-transition: opacity .8s ease;
			    transition: opacity .8s ease;
		   }  
         .t_left li{
         	float: left;
         	margin-left: 30px;
         }
		</style>
				<script src="Public/js/admin/login.js"></script>
	</head>
	<body>
		<object type="application/x-shockwave-flash" data="https://g.alicdn.com/security/umflash/fp.swf" 
			width="1" height="1" id="umFlash" class="umidWrapper"><param name="movie" 
				value="https://g.alicdn.com/security/umflash/fp.swf">
		<param name="allowScriptAccess" value="always">
		</object>
		
		<div class="contain" id="contain">
			<!--标题栏-->
			<div class=>
				<div class="tit_contain clear">
					<ul class="t_left">
					<li left_item left_first >
						<img src="Public/images/5.gif" style="FILTER: alpha(opacity=90, finishOpacity=0,style=2)" height="150px" width="150px"/>
					</li>
					<li class="left_item left_first">
						<button class="btn btn-primary btn_size" data-toggle="modal" data-target="#myModal">
							  关于我们
						</button>	
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        <h4 class="modal-title" id="myModalLabel">Somethings About Us</h4>
							      </div>
							      <div class="modal-body">
								        <p style="text-indent: 2em;">我们是仲恺农业工程学院的新闻中心，你可以再这里观看校园的最新消息，我新闻
								              ，也可以通过联系我们把自己想要发布的消息通过管理员来发布到这里哦！！</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
							      </div>
							    </div><!-- /.modal-content -->
							  </div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
					</li></ul>
					<ul class="t_right">
						
						<li class="right_item">
							<a href="#" target="_blank" title="新闻首页">新闻中心首页</a>
						</li>
						<li class="right_sep">|</li>
						
						<li class="right_item">
							<a href="#" target="_blank" title="提建议">提建议</a>
						</li>
						<li class="right_sep">|</li>
						
						<li class="right_item">
							<a href="#" target="_blank" title="吐槽">吐槽</a>
						</li>
						<li class="right_sep">|</li>
						
					</ul>
					
				</div>
			</div>
			
			<!--输入窗口部分-->
			<div class="login_in clear">
				<div class="body_login1">
					<div class="loginway"><font color="#00090b">密码登录</font></div>
					<div class="body_login2 login" id="loginb">
						 <form class="form-horizontal formtable" role="form" method="post">
						 	<br />
							  <div class="form-group" >
							    <label for="inputEmail3" class="col-sm-1 " style="width:51px;height: 35px;
							    	line-height: 35px;padding: 0;font-size: 15px;">昵称：</label>
							    <div class="col-xs-8"style="width: 180px;padding: 0;">
							       <input type="text"  class="form-control" name="username" placeholder="请填写用户名" required autofocus>
							    </div>
							  </div>
							
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-1" style="width:51px;height: 35px;line-height: 35px;padding:0;font-size: 15px;">密码：</label>
							    <div class="col-sm-8" style="width: 180px;padding: 0;">
							      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <div class=" col-sm-10">
							      <div class="checkbox">
							        <label style="display: inline-block;float: left;margin-left: 20px;">
							          <input type="checkbox"><font color="#00090b" size="2.5" > remember me</font>
							        </label>
							       <a href="#" style="display:inline-block;float: right;font-size: 13px;height: 20px;width:50px;line-height: 19px;
							        	text-align: right;color: #00090b;font-size: 15px;font-weight: bold;margin-right: 10px;">注册</a>
							      </div>
							     
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10">
							      <button type="button" class="btn btn-default" onclick="login.check()"><font color="#00090b" size="2" >登录</font></button>
							      
							    </div>
							     
							  </div>
						</form>
					</div>
				</div>
				
			</div>
          
		</div>
		  <div class="all" id="all" >
		  	<img src="Public/images/book.jpg" style="width: 100%; height: 860px;" />
            </div>
        <script src="Public/js/dialog/layer.js"></script>
		<script src="Public/js/admin/login.js"></script>
		<script src="Public/js/dialog.js"></script>
      
	</body>
</html>