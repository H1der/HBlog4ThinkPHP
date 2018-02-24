<?php /*a:2:{s:70:"G:\wamp64\www\HBlog4ThinkPHP\application/index/view\content\index.html";i:1519485097;s:61:"G:\wamp64\www\HBlog4ThinkPHP\application/index/view\base.html";i:1519484745;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>hdphp教学博客-首页</title>
    <!--描述和摘要-->
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <!--载入公共模板-->
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="/static/index/org/bootstrap-3.3.5-dist/css/bootstrap.min.css"/>
    <script src="/static/index/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/static/index/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript"
            charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="/static/index/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="/static/index/css/backTop.css"/>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>欢迎来到后盾BLOG教学系统</h1>
            </div>
        </div>
    </div>
</header>
<nav role="navigation" class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#example-navbar-collapse">

                        <span class="sr-only">切换导航</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="_menu">
                        <li class="_active"><a href="index.html">首页</a></li>
                        <li><a href="">新闻</a></li>
                        <li><a href="">军事</a></li>
                        <li><a href="">娱乐</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <!--标签规定文档的主要内容main-->
            <main class="col-md-8">

                <article>
                    <div class="_head">
                        <h1>处理上传文章的垃圾图片</h1>
                        <span>
								作者：
								<a href="">武斌</a>
								</span>
                        •
                        <!--pubdate表⽰示发布⽇日期-->
                        <time pubdate="pubdate" datetime="2015年8月31日星期一晚上9点44">2015年8月31日</time>
                    </div>
                    <div class="_digest">
                        <p>
                            当我构建 Envoyer 时，曾经写了两个小型的 “micro-services” 为其提供辅助支持。其中一个是用来做部署之后的健康检查的。这是个很小的应用程序，并且被部署在三个不同的
                            DigitalOcean 域上。最开始我是用 Silex 开发这个应用程序的；可是，后来我就必须要花时间重新研究如何创建 PDO 数据库连接了。我更希望有一个简化的
                            Laravel，并且内建的数据库可以支持 DB::update 。

                            另一个 Envoyer 服务是 “heartbeat” 定时任务监控。由于这些 URL 需要在每分钟被检查数百次，. Since these URLs could be called
                            every minute by hundreds, if not thousands of Cron jobs, I needed that to be very fast. So,
                            I used Slim for that service. 但是，后来，我必须要设置更多的健壮性方面的错误处理和数据库连接了。这是我再次希望能够有一个轻量级的 Laravel。

                            这就是 Lumen 诞生的起因。构造这个框架并找到让它足够快的解决方案至少花费了三四次重构的时间。在我能够让 Lumen 比 Silex 和 Slim
                            都更快之后才将其发布了。我不希望发布一个比相同方案还要慢的东西出来。
                            Lumen 这个名字有何缘由？

                            Lumen is a play on the “Illuminate” components that Laravel utilizes. The Illuminate
                            components are the individual pieces of the Laravel framework such as database, cache,
                            queue, etc. So, first, I think Lumen sounds cool as a name. It’s only two syllables, instead
                            of three like Laravel. That may sound crazy, but I think about that kind of thing and the
                            mental images that are conjured up when you say the word. Of course, it also continues the
                            tradition of “light” based names.
                            Being able to upgrade right into Laravel is huge. Was this the plan from the beginning?

                            Yes, and it’s really just a natural outcome of using the Illuminate components that make up
                            the full-stack Laravel framework. Since we use those components, it’s easy to provide a
                            really great upgrade story, and I feel like that is something missing from other
                            micro-framework solutions. Since the Laravel eco-system now contains both a full-stack
                            framework and a micro-framework that are “officially” supported, we can provide really great
                            upgrade stories.
                            How were you able to get the framework so fast, while still keeping so many great features?

                            This is again due to the great convenience of the Illuminate components. Basically, all I
                            needed to do was “glue” them together in a different way than a full-stack framework would
                            glue them together. This means instead of maximum flexibility in the bootstrapping process,
                            Lumen opts for maximum speed. The actual Lumen framework repository is probably only a dozen
                            files or so. The rest is made up of the Illuminate components. This allowed me to flesh out
                            the features of the framework very quickly, though it did take me three or four iterations
                            to find a solution that was really, really fast while still providing very powerful
                            features.
                        </p>
                    </div>
                    <div class="_footer">
                        <i class="glyphicon glyphicon-tags"></i>
                        <a href="">热门</a>、
                        <a href="">火爆</a>
                    </div>
                </article>

            </main>
            <aside class="col-md-4 hidden-sm hidden-xs">
                <div class="_widget">
                    <h4>关于后盾</h4>
                    <div class="_info">
                        <p>最认真的PHP培训机构 只讲真功夫的PHP培训机构 最火爆的IT课程</p>
                        <p>
                            <i class="glyphicon glyphicon-volume-down"></i>
                            <a href="http://www.houdunwang.com" target="_blank">北京后盾网</a>
                        </p>
                    </div>
                </div>
                <div class="_widget">
                    <h4>分类列表</h4>
                    <div>
                        <a href="">娱乐</a>
                    </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">
                        <a href="">PHP</a>
                        <a href="">PHP</a>
                        <a href="">PHP</a>
                    </div>
                </div>

            </aside>
        </div>
    </div>
</section>
<footer class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="_title">最新文章</h4>
                <div id="" class="_single">
                    <p><a href="">标题</a></p>
                    <time>2010年11月06日11:24:16</time>
                </div>
                <div id="" class="_single">
                    <p><a href="">标题</a></p>
                    <time>2010年11月06日11:24:16</time>
                </div>
            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                    <a href="">PHP</a>
                    <a href="">PHP</a>
                    <a href="">PHP</a>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div id="" class="_single">
                    <p><a href="" target="_blank">百度</a></p>
                    <p><a href="" target="_blank">百度</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="">网站名称</a>
                |
                <a href="">版权信息</a>
                |
                <a href="">admin@163.com</a>
            </div>
        </div>
    </div>
</div>
<!--返回顶部自己写的插件-->
<script src="/static/index/js/backTop.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(function () {
        //插件使用
        $('.back_top').backTop({right: 30});
    })
</script>
<div class="back_top hidden-xs hidden-md">
    <i class="glyphicon glyphicon-menu-up"></i>
</div>
</body>
</html>