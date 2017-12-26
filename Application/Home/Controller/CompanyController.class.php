<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller 
{
    public function index()
    {
        $strWhere = '1=1';
        if(isset($_GET['company_name']) && $_GET['company_name']){
            $strWhere = "company_name like '%".$_GET['company_name']."%'";
        }else{
            $_GET['company_name'] = '';
        }
        $arrCompany = M('Company')->where($strWhere)->select();
        $this->assign('arrCompany',$arrCompany);
        $this->assign('company_name',$_GET['company_name']);
        $this->display();
    }

    public function add()
    {
        if($_POST)
        {
            $data['company_name'] = $_POST['company_name'];
            $data['state'] = $_POST['state'];
            $data['created'] = time();
            D('Company')->add($data);
            $this->success('新增成功', U('Home/Company/index'));
        }else{
            $this->display();
        }
    }

    public function delete()
    {
        D('Company')->where('id='.$_GET['id'])->delete();
        $this->success('删除成功', U('Home/Company/index'));
    }

    public function update()
    {
        if($_POST)
        {
            $data['company_name'] = $_POST['company_name'];
            $data['state'] = $_POST['state'];
            D('Company')->where('id='.$_POST['company_id'])->save($data);
            $this->success('修改成功', U('Home/Company/index'));
        }else{
            $arrCompany = M('Company')->where('id='.$_GET['id'])->find();
            $this->assign('arrCompany',$arrCompany);
            $this->display();
        }
    }
}