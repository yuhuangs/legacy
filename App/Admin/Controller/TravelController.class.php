<?php
namespace Admin\Controller;
use Think\Controller;
//旅游管理控制器
class TravelController extends CommonController
{
    public function index()
    {
        $model=D('travel');
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


        $res=$model->where($where)->order(array('id' => 'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('res', $res);
        $this->assign('page', $show);

        $this->display();

        /* $model=D('goods');
         $res=$model->select();
         $this->assign('res',$res);
         $this->display();*/
    }
    public function add()
    {
        if (IS_POST) {
            $rst = $this->create('travel', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $this->success('添加成功', U('Travel/index'));
            //添加成功后查看景点
        } else {
            $this->display();
        }
    }

    public function revise(){
        $placeid=I('get.id',0, 'int');
        if(IS_POST){
            $this->reviseAction($placeid);
            return;
        }
        $model=D('travel');
        $res=$model->where("id=$placeid")->select();
        $this->assign('res',$res);
        $this->display();

    }
    public function reviseAction($id){
        $rst=$this->create('travel','save',2,array("id=$id"));
        if ($rst===false){
            $this->error("修改景点失败");
        }
        $this->success('修改成功', U('Travel/index'));
    }

    public function search(){
        // $orderid=I('get.orderid');
        //$order=D('order');
        //$data=$order->where("orderid=$orderid")->select();
        //$this->assign('orderid',$orderid);
        //$this->assign('data',$data);
        $this->display();

    }
    public function search_ok(){
        $place="'".I('get.place')."'";
        $goods=D('travel');
        $data=$goods->where("place=$place")->select();
        $this->assign('res',$data);
        $this->display();
    }
    public function delete(){
        $model=D('travel');
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
            $this->success("成功删除{$list}条！",U('Travel/index'));
        }else{
            $this->error('删除失败！');
        }
    }

}