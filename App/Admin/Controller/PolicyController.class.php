<?php
namespace Admin\Controller;
use Think\Controller;
//政策管理控制器
class PolicyController extends CommonController
{
    //政策管理首页
    public function index()
    {
        $model=D('policy');
        $where=array('status'=>'1');
        $count=$model->count();
        $Page=new \Think\Page($count,5);
        foreach($where as $key=>$val){
            $Page->parameter[$key]=urlencode($val);
        }
        $Page->lastSuffix=false;
        $Page->setConfig('header','共%TOTAL_PAGE%页，当前是第%NOW_PAGE%页<br>');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %DOWN_PAGE% %END%');
        $show=$Page->show();

        $list=$model->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('res',$list);
        $this->assign('page',$show);
        $this->display();

        /* $model=D('goods');
         $res=$model->select();
         $this->assign('res',$res);
         $this->display();*/
    }
    //添加政策
    public function add()
    {
        if (IS_POST) {
            $rst = $this->create('policy', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $this->success('添加成功', U('Policy/index'));
            //添加成功后查看政策
        } else {
            $this->display();
        }
    }
    //详细展示政策内容
    public function content(){
        $id=I('get.id');
        $model=D('policy');
        $res=$model->where("id=$id")->select();
        $this->assign('page',$res);
        $this->display();
    }

    //删除政策
    public function delete(){
        $model=D('policy');
        $id = $_GET['id'];
        //判断id是数组还是一个数值
        if(is_array($id)){
            $where = 'id in('.implode(',',$id).')';
        }else{
            $where = 'id='.$id;
        }
        //dump($where);
        $list=$model->where($where)->delete();
        if($list!==false) {
            $this->success("成功删除{$list}条！",U('Policy/index'));
        }else{
            $this->error('删除失败！');
        }
    }
    /**
     **删除函数支持删除多条和一个
     **/
    public function delAll(){
        //dump($_GET['id']);
        //$name = strtolower($_GET['_URL_'][0]); //获取当前模块名
//        $name = $this->getActionName();
        $model = D('policy');//获取当期模块的操作对象
        $id = $_GET['id'];
        //判断id是数组还是一个数值
        if(is_array($id)){
            $where = 'id in('.implode(',',$id).')';
        }else{
            $where = 'id='.$id;
        }
        //dump($where);
        $list=$model->where($where)->delete();
        if($list!==false) {
            $this->success("成功删除{$list}条！");
        }else{
            $this->error('删除失败！');
        }
    }
    //修改政策
    public function revise(){
        $id=I('get.id',0, 'int');
        if(IS_POST){
            $this->reviseAction($id);
            return;
        }
        $model=D('policy');
        $res=$model->where("id=$id")->select();
        $this->assign('res',$res);
        $this->display();

    }
    public function reviseAction($id){
        $rst=$this->create('policy','save',2,array("id=$id"));
        if ($rst===false){
            $this->error("修改政策失败");
        }
        $this->success('修改成功', U('Policy/index'));
    }



}