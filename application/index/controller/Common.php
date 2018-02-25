<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);

        //读取配置项
        $webset = $this->loadWebSet();
        $this->assign('_webset', $webset);

        //获取栏目的数据
        $cateData = $this->loadCateData();
        $this->assign('_cateData', $cateData);

        //获取全部栏目数据
        $allCateData = $this->loadAllCateData();
        $this->assign('_allCateData', $allCateData);

        //获取标签数据
        $tagData = $this->loadTagData();
        $this->assign('_tagData', $tagData);

        //最新文章
        $articleData = $this->loadArticle();
        $this->assign('_articleData', $articleData);

        //友情链接
        $linkData = $this->loadLinkData();
        $this->assign('_linkData', $linkData);

    }

    /**
     * 读取配置项
     */
    private function loadWebSet()
    {
        return db('webset')->column('webset_value', 'webset_name');
    }

    /**
     *获取顶级分类数据
     */
    private function loadCateData()
    {
        return db('cate')->where('cate_pid', 0)->order('cate_sort desc')->select();
    }

    /**
     * 获取全部分类数据
     */
    private function loadAllCateData()
    {
        return db('cate')->order('cate_sort desc')->select();
    }

    //获取标签数据
    private function loadTagData()
    {
        return db('tag')->select();
    }

    //获取最新文章
    private function loadArticle()
    {
        return db('article')->order('sendtime desc')->limit(2)->field('arc_id,arc_title,sendtime')->select();
    }

    //获取友情链接
    private function loadLinkData()
    {
        return db('link')->order('link_sort desc')->select();
    }
}
