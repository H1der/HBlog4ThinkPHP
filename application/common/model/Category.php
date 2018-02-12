<?php

namespace app\common\model;

use houdunwang\arr\Arr;
use think\Model;

class Category extends Model
{
    protected $pk = 'cate_id';
    protected $table = 'blog_cate';

    /**
     * 获取树状结构
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getAll()
    {
        return Arr::tree(db('cate')->order('cate_sort desc,cate_id')->select(), 'cate_name', $fieldPri = 'cate_id', $fieldPid = 'cate_pid');
    }

    /**
     * 栏目添加
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return $data;
    }

    /**
     *
     * @param $cate_id
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getCateDate($cate_id)
    {
        //找到子集
        $cate_ids = $this->getSon(db('cate')->select(), $cate_id);
        //把自己追加进去
        $cate_ids[] = $cate_id;
        //除了他们之外的数据
        $field = db('cate')->whereNotIn('cate_id', $cate_ids)->select();
        return Arr::tree($field, 'cate_name', 'cate_id', 'cate_pid');

    }

    /**
     * 找子集
     * @param $data
     * @param $cate_id
     * @return array
     */
    public function getSon($data, $cate_id)
    {
        static $temp = [];
        foreach ($data as $k => $v) {
            if ($cate_id == $v['cate_pid']) {
                $temp[] = $v['cate_id'];
                $this->getSon($data, $v['cate_id']);
            }
        }
        return $temp;
    }

    //编辑栏目
    public function edit($data)
    {
        return $data;
    }

    public function del($cate_id)
    {
        //获取当前要删除的cate_pid
        $cate_pid = $this->where('cate_id', $cate_id)->value('cate_pid');
        //将当前要删除的$cate_id子集数据数据的pid修改成$cate_id
        $this->where('cate_pid', $cate_id)->update(['cate_pid' => $cate_pid]);
        if (Category::destroy($cate_id)) {
            return ['valid' => 1, 'msg' => '删除成功'];
        } else {
            return ['valid' => 0, 'msg' => '删除失败'];
        }
    }
}
