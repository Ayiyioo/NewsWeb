<?php if (!defined('THINK_PATH')) exit(); $config = D("Basic")->select(); $navs = D("Menu")->getBarMenus(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo ($config["title"]); ?></title>
  <meta name="keywords" content="<?php echo ($config["keywords"]); ?>" />
  <meta name="description" content="<?php echo ($config["description"]); ?>" />
  <link rel="stylesheet" href="Public/css/bootstrap.min.css" type="text/css" />
  <script type="text/javascript" src="Public/js/jquery.js" ></script>
  <link rel="stylesheet" href="Public/css/home/main.css" type="text/css" />
</head>
<body>
<header id="header">
  <div class="navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a href="/">
          <img src="Public/images/logo.jpg" alt="">
        </a>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="/NewsWeb/index.php" <?php if($result['catId'] == 0): ?>class="curr"<?php endif; ?>>首页</a></li>
        <!-- 	前端标签的显示 -->
        <?php if(is_array($navs)): foreach($navs as $key=>$vo): ?><li><a href="/NewsWeb/index.php?c=cat&id=<?php echo ($vo["menu_id"]); ?>" <?php if($vo['menu_id'] == $result['catId']): ?>class="curr"<?php endif; ?>><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
      </ul>
      <!--//增加搜索框-->
      <form action="http://localhost/NewsWeb/index.php?c=search&a=index" method="post" target="_blank">
      	<div class="input-group" id="reserch" style="margin-top:20px;float: right;">
              <input class="form-control" name="title" type="text" value="" placeholder="文章标题" style="width: 320px;"/>
                <span >
                  <button id="sub_data" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                </span>
         </div>
      </form>
    </div>
  </div>
</header>
	<section>
		<div class="container" style="text-align:center;">
			<h1 style="color:red"><?php echo ($message); ?></h1>
			<h3 id="location" >系统将在<span style="color:red">3</span>秒后自动跳转到首页</h3>
		</div>
	</section>
</body>
<script src="Public/js/jquery.js"></script>
<script>
  //首页
  var url = "/";
  var time = 3;
  setInterval("refer()",1000);
  function refer() {
	if(time==0) {
	  location.href=url;
	}
	$("#location span").html(time);
	time--;
  }
</script>
</html>