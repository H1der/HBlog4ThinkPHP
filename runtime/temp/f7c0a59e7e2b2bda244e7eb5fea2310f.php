<?php /*a:2:{s:69:"G:\wamp64\www\HBlog4ThinkPHP\application/admin/view\article\edit.html";i:1519045406;s:61:"G:\wamp64\www\HBlog4ThinkPHP\application/admin/view\base.html";i:1519221502;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>博客网后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/static/admin/bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/admin/css/site.css" rel="stylesheet">
    <link href="/static/admin/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/wangEditor.min.css">
    <script src="/static/admin/js/jquery.min.js"></script>
    <script src="/static/admin/bootstrap-3.3.0-dist/dist/js/bootstrap.min.js"></script>
    <!--<script src="resource/hdjs/app/util.js"></script>-->
    <!--<script src="resource/hdjs/require.js"></script>-->
    <!--<script src="resource/hdjs/app/config.js"></script>-->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script>
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
    <style>
        i {
            color: #337ab7;
        }
    </style>
</head>
<body>
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="index.html"
                                                                                         style="color: white;margin-left: -14px">HBlog</a>
                </h4>
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="http://www.kancloud.cn/manual/thinkphp5/118003" target="_blank"><i
                                        class="fa fa-w fa-file-code-o"></i>
                                首页</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            <?php echo session('admin.admin_username'); ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('admin/entry/pass'); ?>">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="panel panel-default" id="menus">
                <!--栏目管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample"
                     aria-expanded="false" aria-controls="collapseExample"
                     style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">栏目管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample">
                    <a href="<?php echo url('admin/category/index'); ?>" class="list-group-item">
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        栏目列表
                    </a>
                </ul>
                <!--栏目管理 end-->

                <!--标签列表-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">标签管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample2">
                    <a href="<?php echo url('admin/tag/index'); ?>" class="list-group-item">
                        <i class="fa fa-tags" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        标签列表
                    </a>
                </ul>
                <!--标签列表 end-->

                <!--文章管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">文章管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample3">
                    <a href="<?php echo url('admin/article/index'); ?>" class="list-group-item">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        文章列表
                    </a>
                    <a href="<?php echo url('admin/article/recycle'); ?>" class="list-group-item">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        <span class="pull-right" href="<?php echo url('admin/article/recycle'); ?>"></span>
                        回收站
                    </a>
                </ul>
                <!--文章管理 end-->
                <!--友链管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample4"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">友链管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample4" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample4">
                    <a href="" class="list-group-item">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        友链列表
                    </a>
                </ul>
                <!--友链管理 end-->
                <!--站点管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample5"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">站点管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample5" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample5">
                    <a href="" class="list-group-item">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        网站配置
                    </a>
                </ul>
                <!--站点管理 end-->
            </div>
        </div>
        <!--右侧主体区域部分 start-->
        <div class="col-xs-12 col-sm-9 col-lg-10">

            <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
                <li>
                    <a href=""><i class="fa fa-cogs"></i>
                        文章管理</a>
                </li>
                <li class="active">
                    <a href="">文章编辑</a>
                </li>
            </ol>
            <ul class="nav nav-tabs" role="tablist">
                <li><a href="<?php echo url('index'); ?>">文章管理</a></li>
                <li class="active"><a href="">文章编辑</a></li>
            </ul>
            <form class="form-horizontal" id="form" action="" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">文章管理</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">文章标题</label>
                            <div class="col-sm-9">
                                <input type="text" name="arc_title" class="form-control" placeholder=""
                                       value="<?php echo htmlentities($oldData['arc_title']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">文章作者</label>
                            <div class="col-sm-9">
                                <input type="text" name="arc_author" class="form-control" placeholder=""
                                       value="<?php echo htmlentities($oldData['arc_author']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">文章排序</label>
                            <div class="col-sm-9">
                                <input type="number" name="arc_sort" class="form-control" placeholder=""
                                       value="<?php echo htmlentities($oldData['arc_sort']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">所属分类</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single form-control" name="cate_id">
                                    <option value="0">请选择分类</option>
                                    <?php if (is_array($cateData) || $cateData instanceof \think\Collection || $cateData instanceof \think\Paginator): if (count($cateData) == 0) : echo ""; else: foreach ($cateData as $key => $vo): ?>
                                        <option {if condition="$oldData['cate_id']==$vo['cate_id']" } selected {
                                        /if} value="<?php echo htmlentities($vo['cate_id']); ?>"><?php echo htmlentities($vo['_cate_name']); ?></option>
                                    <?php endforeach; endif; else: echo "";endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">标签</label>
                            <div class="col-sm-9">
                                <?php if (is_array($tagData) || $tagData instanceof \think\Collection || $tagData instanceof \think\Paginator): if (count($tagData) == 0) : echo ""; else: foreach ($tagData as $key => $vo): ?>
                                    <label class="checkbox-inline">
                                        <input <?php if (in_array($vo['tag_id'], $tag_ids)): ?> checked <?php endif; ?>
                                                type="checkbox"
                                                name="tag[]"
                                                value="<?php echo htmlentities($vo['tag_id']); ?>"> <?php echo htmlentities($vo['tag_name']); ?>
                                    </label>
                                <?php endforeach; endif; else: echo "";endif; ?>
                            </div>
                        </div>
                        <!--<div class="form-group">-->
                        <!--<label for="" class="col-sm-2 control-label">缩略图</label>-->
                        <!--<div class="col-sm-9">-->
                        <!--<div class="input-group">-->
                        <!--<div class="input-group-btn">-->
                        <!--<input type="file" class="btn btn-default" name="">-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--<label for="" class="col-sm-2 control-label">文章摘要</label>-->
                        <!--<div class="col-sm-9">-->
                        <!--<textarea type="text" name="digest" class="form-control" placeholder=""></textarea>-->
                        <!--</div>-->
                        <!--</div>-->
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">文章内容</label>
                            <div class="col-sm-9" id="content">
                                <!--<textarea type="text" name="content" class="form-control" placeholder=""></textarea>-->
                                <p><?php echo htmlentities($oldData['arc_content']); ?></p>
                            </div>
                            <textarea hidden id="arc_content" name="arc_content"
                                      style="width:100%; height:200px;"></textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="arc_id" value="<?php echo input('param.arc_id'); ?>">
                <button class="btn btn-primary" type="submit" id="submit">确定</button>
            </form>


        </div>
    </div>
    <!--右侧主体区域部分结束 end-->
</div>
</div>
<div class="master-footer" style="margin-top: 150px">
    <a href="http://www.2hider.com">个人博客</a>
    <a href="http://www.2hider.com">个人博客</a>
    <a href="http://www.2hider.com">个人博客</a>
    <br>
    Powered by HBlog v2.0 © 2018-2022 www.2hider.com
</div>
</body>
</html>
<script src="//unpkg.com/wangeditor/release/wangEditor.min.js"></script>
<script type="text/javascript">
    var E = window.wangEditor

    var editor = new E('#content')
    var $arc_content = $('#arc_content')
    // 或者 var editor = new E( document.getElementById('editor') )
    editor.customConfig.onchange = function (html) {
        // 监控变化，同步更新到 textarea
        $arc_content.val(html)
    }
    editor.create()
    // 初始化 textarea 的值
    $arc_content.val(editor.txt.html())
</script>
