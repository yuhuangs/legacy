<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理系统</title>
    <style type="text/css">
        .dropdown-submenu { position: relative; } .dropdown-submenu>.dropdown-menu { top: 0; left: 100%; margin-top: -6px; margin-left: -1px; -webkit-border-radius: 0 6px 6px 6px; -moz-border-radius: 0 6px 6px; border-radius: 0 6px 6px 6px; } .dropdown-submenu:hover>.dropdown-menu { display: block; } .dropdown-submenu>a:after { display: block; content: " "; float: right; width: 0; height: 0; border-color: transparent; border-style: solid; border-width: 5px 0 5px 5px; border-left-color: #ccc; margin-top: 5px; margin-right: -10px; } .dropdown-submenu:hover>a:after { border-left-color: #fff; } .dropdown-submenu.pull-left { float: none; } .dropdown-submenu.pull-left>.dropdown-menu { left: -100%; margin-left: 10px; -webkit-border-radius: 6px 0 6px 6px; -moz-border-radius: 6px 0 6px 6px; border-radius: 6px 0 6px 6px; }
    </style>
    <link href="/EPP_Project/legacy/Public/Admin/css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" />
    <script src="/EPP_Project/legacy/Public/bootstrap/js/jquery.js"></script>
    <script src="/EPP_Project/legacy/Public/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript"></script>
</head>
<body>
<!--页头-->
<div class="header">
    <nav>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">非遗后台管理系统</a>
            </div>
            <!--Collect the nav linnks, forms, and other content for toggling-->
            <div class="collapse navbar-collapse navbar-ex1-collapse " id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/EPP_Project/legacy/Admin/Index/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页</a></li>
                    <li class="dropdown">
                        <a href="/EPP_Project/legacy/Admin/Guest/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> 顾客管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/EPP_Project/legacy/Admin/Guest/index">查看顾客信息</a></li>
                            <li><a href="/EPP_Project/legacy/Admin/Guest/searchguest">查询顾客</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/EPP_Project/legacy/Admin/Goods/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 商品管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/EPP_Project/legacy/Admin/Goods/index">查看商品</a></li>
                            <li><a href="/EPP_Project/legacy/Admin/Goods/add">添加商品</a></li>
                            <li><a href="/EPP_Project/legacy/Admin/Goods/index">删除商品</a></li>
                            <li><a href="/EPP_Project/legacy/Admin/Goods/index">修改商品</a></li>
                            <li><a href="/EPP_Project/legacy/Admin/Goods/search">查询商品</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/EPP_Project/legacy/Admin/Travel/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 旅游管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/EPP_Project/legacy/Admin/Travel/index">查看旅游景点</a></li>
                            <li><a href="/EPP_Project/legacy/Admin/Travel/add">增加旅游景点</a></li>
                            <li><a href="/EPP_Project/legacy/Admin/Travel/search">查询旅游景点</a></li>
                            <li><a href="/EPP_Project/legacy/Admin/Travel/index">修改旅游景点</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/EPP_Project/legacy/Admin/Notice/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 信息管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="/EPP_Project/legacy/Admin/Notice/index">公告管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/EPP_Project/legacy/Admin/Notice/index">查看公告</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Notice/add">增加公告</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Notice/revise">修改公告</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/EPP_Project/legacy/Admin/Dynamic/index" class="dropdown-toggle" data-toggle="dropdown">动态管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/EPP_Project/legacy/Admin/Dynamic/index">查看动态</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Dynamic/add">增加动态</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Dynamic/revise">修改动态</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/EPP_Project/legacy/Admin/Inheritor/index" class="dropdown-toggle" data-toggle="dropdown">传承人管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/EPP_Project/legacy/Admin/Inheritor/index">查看传承人</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Inheritor/add">增加传承人</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Inheritor/delete">删除传承人</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Inheritor/revise">修改传承人</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/EPP_Project/legacy/Admin/Inheritor/index" class="dropdown-toggle" data-toggle="dropdown">政策管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/EPP_Project/legacy/Admin/Policy/index">查看政策</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Policy/add">增加政策</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Policy/delete">删除政策</a></li>
                                    <li><a href="/EPP_Project/legacy/Admin/Policy/revise">修改政策</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/EPP_Project/legacy/Admin/Message/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 留言管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/EPP_Project/legacy/Admin/Message/index">查看留言</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/EPP_Project/legacy/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>前台首页</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>个人设置</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>账户中心</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>我的收藏</a></li>
                        </ul>
                    </li>
                    <li><a href="/EPP_Project/legacy/Admin/Login/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>退出</a></li>
                </ul>
            </div>
        </nav>
    </nav>
</div>
<div id="content">
    <div class="item"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        /*内容编辑*/
        .data-edit{border:1px solid #ddd;background:#F7F7F7;max-width:550px;padding:20px 40px;}
        .data-edit label{font-weight:normal;text-align:right;vertical-align:top;}
        .data-edit label{padding:0 10px;}
        .data-edit select{min-width:100px;height:26px;}
        .data-edit .file{font-size:12px;}
        .data-edit textarea{width:200px;height:50px;}
        .data-edit input{width:200px;}
    </style>
</head>
<body>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    <ul class="list-group">
        <a href="/EPP_Project/legacy/Admin/Goods/index" class="list-group-item">查看商品</a>
        <a href="/EPP_Project/legacy/Admin/Goods/add" class="list-group-item ">添加商品</a>
        <a href="/EPP_Project/legacy/Admin/Goods/index" class="list-group-item  active">修改商品</a>
        <a href="/EPP_Project/legacy/Admin/Goods/search" class="list-group-item">查询商品</a>
    </ul>
</div>
<!--右侧主要内容-->
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>商品管理</h1>
        </div>
        <div class="panel-body">
            <div class="data-edit" align="center">
                <!--<form method="post" enctype="multipart/form-data">
                    <h2>增加商品</h2>
                    <table>
                        <tr><th>商品名字：</th><td><input type="text" name="goodname" /></td></tr>
                        <tr><th>商品价格：</th><td><input type="text" name="price" /></td></tr>
                        <tr><th>上架时间：</th><td><input type="text" name="time" /></td></tr>
                        <tr><th>总的数量：</th><td><input type="text" name="total"/></td></tr>
                        <tr><th>商品标号：</th><td><input type="text" name="biaohao"/></td></tr>
                        <tr><th>商品产地：</th><td><input type="text" name="place"/></td></tr>
                        <tr><th>商品图片：</th><td><input type="file" name="picname" class="file" /></td></tr>
                        <tr class="tr_btn center">
                            <td colspan="2"><input type="submit" value="确定" /><input type="reset" value="重置" /></td>
                        </tr>
                    </table>
                </form>-->
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row form-group" style="padding: 20px 0">
                            <div class="col-lg-5 col-md-6">
                                <h3>修改商品</h3>
                            </div>
                        </div>
                        <?php if(is_array($res)): foreach($res as $key=>$v): ?><div class="row form-group">
                                <label class="control-label col-lg-1" for="goodname">商品名称：</label>
                                <div class="col-lg-5 col-md-6">
                                    <input class="form-control" name="goodname" id="goodname" type="text" value="<?php echo ($v["goodname"]); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-lg-1" for="price">商品价格：</label>
                                <div class="col-lg-5 col-md-6">
                                    <input class="form-control" name="price" id="price" type="text"  value="<?php echo ($v["price"]); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-lg-1" for="time">上架时间：</label>
                                <div class="col-lg-5 col-md-6">
                                    <input class="form-control" name="time" id="time" type="text" value="<?php echo ($v["time"]); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-lg-1" for="total">总的数量：</label>
                                <div class="col-lg-5 col-md-6">
                                    <input class="form-control" name="total" id="total" type="text" value="<?php echo ($v["total"]); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-lg-1" for="biaohao">商品标号：</label>
                                <div class="col-lg-5 col-md-6">
                                    <input class="form-control" name="biaohao" id="biaohao" type="text" value="<?php echo ($v["biaohao"]); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-lg-1" for="place">商品产地：</label>
                                <div class="col-lg-5 col-md-6">
                                    <input class="form-control" name="place" id="place" type="text" value="<?php echo ($v["place"]); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-lg-1" for="picname">商品图片：</label>
                                <div class="col-lg-5 col-md-6">
                                    <input  type="file" name="picname" class="file" id="picname" value="<?php echo ($v["picname"]); ?>"/>

                                </div>
                            </div><?php endforeach; endif; ?>
                        <div class="row form-group">
                            <div class="col-lg-5 col-md-6">
                                <input class="btn btn-info" type="submit" value="确定" />  <a class="btn btn-info" href="javascript:window.history.back();">返回</a> <input class="btn btn-info" type="reset" value="重置" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
</body>
</html></div>
</div>

</body>
</html>