<?php
namespace Home\Controller;
use Think\Controller;
class UnitController extends Controller 
{
    public function index()
    {
        $arrUnit = M('Unit')->select();
        $this->assign('arrUnit',$arrUnit);
        $this->display();
    }

    public function add()
    {
        if($_POST)
        {
            $data['unit_name'] = $_POST['unit_name'];
            $data['state'] = $_POST['state'];
            $data['created'] = time();
            D('Unit')->add($data);
            $this->success('新增成功', U('Home/Unit/index'));
        }else{
            $this->display();
        }
    }

    public function delete()
    {
        D('Unit')->where('id='.$_GET['id'])->delete();
        $this->success('删除成功', U('Home/Unit/index'));
    }

    public function update()
    {
        if($_POST)
        {
            $data['unit_name'] = $_POST['unit_name'];
            $data['state'] = $_POST['state'];
            D('Unit')->where('id='.$_POST['unit_id'])->save($data);
            $this->success('修改成功', U('Home/Unit/index'));
        }else{
            $arrUnit = M('Unit')->where('id='.$_GET['id'])->find();
            $this->assign('arrUnit',$arrUnit);
            $this->display();
        }
    }
}