<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
    public function index()
    {
        $strWhere = '1=1';
        //筛选发货人
        if(isset($_GET['consignor']) && $_GET['consignor']){
            $strWhere .= " and consignor like '%".$_GET['consignor']."%'";
        }else{
            $_GET['consignor'] = '';
        }
        //筛选收货人
        if(isset($_GET['receiver']) && $_GET['receiver']){
            $strWhere .= " and receiver like '%".$_GET['receiver']."%'";
        }else{
            $_GET['receiver'] = '';
        }
        //筛选发货人单位
        if(isset($_GET['department']) && $_GET['department']){
            $strWhere .= " and department like '%".$_GET['department']."%'";
        }else{
            $_GET['department'] = '';
        }
        $arrDispatchingList = M('DispatchingList')->where($strWhere)->select();
        $arrCompany = $this->changeIndexBy(D('Company')->select());
        $arrUnit = $this->changeIndexBy(D('Unit')->select());

        $this->assign('arrDispatchingList',$arrDispatchingList);
        $this->assign('arrCompany',$arrCompany);
        $this->assign('arrUnit',$arrUnit);
        $this->assign('arrWhere',$_GET);
        $this->assign('strWhere',base64_encode($strWhere));
        $this->display();
    }

    public function export()
    {
        $strWhere = base64_decode($_GET['strWhere']);
        $arrDispatchingList = M('DispatchingList')->where($strWhere)->select();
        $arrCompany = $this->changeIndexBy(D('Company')->select());
        $arrUnit = $this->changeIndexBy(D('Unit')->select());

        vendor("PHPExcel.PHPExcel");
        $objPHPExcel = new \PHPExcel();
        //设置居中
        $objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);

        $objPHPExcel->setActiveSheetIndex(0) 
            ->setCellValue('A1','发货公司')
            ->setCellValue('B1','发货时间')
            ->setCellValue('C1','托运单号')
            ->setCellValue('D1','托运单位及电话')
            ->setCellValue('E1','货物名称')
            ->setCellValue('F1','数量')
            ->setCellValue('G1','目的地')
            ->setCellValue('H1','发货人')
            ->setCellValue('I1','收货人及电话')
            ->setCellValue('J1','收货人单位')
            ->setCellValue('K1','费用总计')
            ->setCellValue('L1','备注');
        //设置行高
        $objPHPExcel->getActiveSheet(0)->getRowDimension('1')->setRowHeight(20);
        //设置宽度
        $arrA = array_column($arrCompany, 'company_name');
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('A')->setWidth($this->getItem($arrA));
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('B')->setWidth(12);
        //托运单号宽度
        $intC = $this->getItem(array_column($arrDispatchingList,'check_number'));
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('C')->setWidth($intC+4);
        //托运单位及电话宽度
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('D')->setWidth($this->getItem(array_column($arrDispatchingList,'check')));
        //货物名称宽度
        $e = $this->getItem(array_column($arrDispatchingList,'goods_name'));
        $e = $e < 12 ? 12 : $e; 
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('E')->setWidth($e);
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('F')->setWidth(10);
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('G')->setWidth(15);
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('H')->setWidth(15);
        //收货人及电话宽度
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('I')->setWidth($this->getItem(array_column($arrDispatchingList,'receiver')));
        //收货人单位宽度
        $j = $this->getItem(array_column($arrDispatchingList,'goods_name'));
        $j = $j < 15 ? 15 : $j; 
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('J')->setWidth($j);
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('K')->setWidth(12);
        //设置备注宽度
        $objPHPExcel->getActiveSheet(0)->getColumnDimension('L')->setWidth($this->getItem(array_column($arrDispatchingList,'remark')));
        //循环数据
        foreach($arrDispatchingList as $k => $v){  
            $num = $k + 2;  
            $objPHPExcel->setActiveSheetIndex(0) 
                ->setCellValue('A'.$num,$arrCompany[$v['company_id']]['company_name'])
                ->setCellValue('B'.$num,$v['dispatching_time'])
                ->setCellValue('C'.$num,$v['check_number'])
                ->setCellValue('D'.$num,$v['check'])
                ->setCellValue('E'.$num,$v['goods_name'])
                ->setCellValue('F'.$num,$v['goods_number'])
                ->setCellValue('G'.$num,$v['destination'])
                ->setCellValue('H'.$num,$v['consignor'])
                ->setCellValue('I'.$num,$v['receiver'])
                ->setCellValue('J'.$num,$v['department'])
                ->setCellValue('K'.$num,$v['freight_total'])
                ->setCellValue('L'.$num,$v['remark']);
            $objPHPExcel->getActiveSheet(0)->getRowDimension("$num")->setRowHeight(20);
        }
        $objPHPExcel->getActiveSheet()->setTitle('北京鑫琪晟物流有限公司');
        header('Content-Type: applicationnd.ms-excel');
        header('Content-Disposition: attachment;filename="发货详情单.xls"');  
        header('Cache-Control: max-age=0');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

    public function getItem($array) {
        $index = 0;
        foreach ($array as $k => $v) {
            if (strlen($array[$index]) < strlen($v))
                $index = $k;
        }
        return strlen($array[$index]);
    }

    public function add()
    {
        if($_POST)
        {
            $_POST['unit_name'] = trim($_POST['unit_name']);
            $_POST['created'] = time();
            if(D('DispatchingList')->add($_POST)){
                $this->success('新增成功', U('Home/Index/index'));
            }else{
                $this->error('新增失败', U('Home/Index/add'));
            }
        }else{
            $arrCompany = D('Company')->select();
            $arrUnit = D('Unit')->select();
            $this->assign('arrCompany',$arrCompany);
            $this->assign('arrUnit',$arrUnit);
            $this->display();
        }
    }

    public function delete()
    {
        D('DispatchingList')->where('id='.$_GET['id'])->delete();
        $this->success('删除成功', U('Home/Index/index'));
    }

    public function update()
    {
        if($_POST)
        {
            $_POST['remark'] = trim($_POST['remark']);
            $insertRes = M('DispatchingList')->where('id='.$_POST['index_id'])->save($_POST);
            if($insertRes){
                $this->success('修改成功', U('Home/Index/index'));
            }else{
                $this->error('修改失败', U('Home/Index/update',['id' => $_POST['index_id']]));
            }
        }else{
            $arrCompany = D('Company')->select();
            $arrUnit = D('Unit')->select();
            $arrDispatchingList = M('DispatchingList')->where('id='.$_GET['id'])->find();
            $this->assign('arrCompany',$arrCompany);
            $this->assign('arrUnit',$arrUnit);
            $this->assign('arrDispatchingList',$arrDispatchingList);
            $this->display();
        }
    }

    public function changeIndexBy($arr)
    {
        $arrResult = [];
        foreach ($arr as $key => $value) {
            # code...
            $arrResult[$value['id']] = $value;
        }

        return $arrResult;
    }
}