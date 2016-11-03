<?php
/**
 * Created by PhpStorm.
 * User: zhonglongquan
 * Date: 2016/11/3
 * Time: 11:43
 */

namespace Admin\Controller;


use Admin\Model\GoodsModel;
use Admin\Tools\page;
use Think\Controller;
use Think\Image;
use Think\Upload;

class GoodsController extends Controller
{

    var $data = null;

    function add()
    {
        $goods = new GoodsModel();
        if (!empty($_POST)) {
            /**
             * 'name' => string 'debug.log' (length=9)
             * 'type' => string 'application/octet-stream' (length=24)
             * 'tmp_name' => string 'C:\wamp\tmp\php4FA5.tmp' (length=23)
             * 'error' => int 0
             * 'size' => int 6123
             */
            $fileErrorNo = $_FILES['goods_image']['error'];
            if ($fileErrorNo == 0) {
                // 初始化上传配置信息
                $config = array(
                    'exts' => array('jpg', 'jpeg', 'png', 'bmp'), //允许上传的文件后缀
                    'rootPath' => './Uploads/', //保存根路径
                );
                $up = new Upload($config);
                // uploadOne方法会返回上传附件存储在服务器的 名字 路径等信息
                /**
                 * array (size=9)
                 * 'name' => string 'debug.log' (length=9)
                 * 'type' => string 'application/octet-stream' (length=24)
                 * 'size' => int 6123
                 * 'key' => int 0
                 * 'ext' => string 'log' (length=3)
                 * 'md5' => string '88c9f4aba7287131ede4c9f21d64683e' (length=32)
                 * 'sha1' => string '9369b5f5f40e68ba01146ac07819882c1dec98ad' (length=40)
                 * 'savename' => string '581b197e70fdf.log' (length=17)
                 * 'savepath' => string '2016-11-03/' (length=11)
                 */
                $z = $up->uploadOne($_FILES['goods_image']);
                if ($z) {// upload success
                    // 把上传好的图片保存到数据表中
                    //  ./Uploads/2016-11-03/581b19ec127ff.log
                    $bigPathName = $up->rootPath . $z['savepath'] . $z['savename'];
                    $_POST['goods_big_img'] = ltrim($bigPathName, './');
                    // 给上传好的图片制作缩略图
                    $im = new Image();// 实例化image对象
                    $im->open($bigPathName);// 打开目标文件
                    $im->thumb(125, 125, 6);// 制作缩略图 默认有自适应效果
                    $smallPathName = $up->rootPath . $z['savepath'] . "small_" . $z['savename'];
                    $im->save($smallPathName);// 保存图片到服务器
                    $_POST['goods_small_img'] = ltrim($smallPathName, './');
                    $z = $goods->add($_POST);
                    if ($z) {// add success
                        $this->redirect('showList', array(), 2, '商品添加成功');
                    } else {// add fail
                        $this->redirect('add', array(), 2, '商品添加失败');
                    }
                } else {
                    $this->redirect('add', array(), 1, $up->getError());
                }
            } else if ($fileErrorNo == 1) {
                $this->redirect('add', array(), 1, '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值');
            } else if ($fileErrorNo == 2) {
                $this->redirect('add', array(), 1, '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值');
            } else if ($fileErrorNo == 3) {
                $this->redirect('add', array(), 1, '文件只有部分被上传');
            } else if ($fileErrorNo == 4) {
                $this->redirect('add', array(), 1, '没有文件被上传');
            } else if ($fileErrorNo == 5) {
                $this->redirect('add', array(), 1, '上传文件大小为0');
            }
        } else {
            $this->display();
        }
    }

    function showList()
    {
        $goods = new GoodsModel();
        // 获取总条数
        $count = $goods->count();
        $per = 7;
        // 实例化分类对象
        $pageTools = new page($count, $per);
        // 拼接sql查询
        $sql = "select * from sw_goods order by goods_id desc " . $pageTools->limit;
        $info = $goods->query($sql);
        $data = $info;
        // 获得页码列表
        $pageList = $pageTools->fpage(array(3, 4, 5, 6, 7, 8));
        $this->assign('info', $info);
        $this->assign('pagelist', $pageList);
        $this->display();

//        $result = $goods->select();
//        $this->assign('info', $result);
//        $this->display();
    }

    function update($goods_id)
    {
        $goods = new GoodsModel();
        if (!empty($_POST)) {
            $z = $goods->save($_POST);
            if ($z) {
                $this->redirect('showList', array(), 2, '商品修改成功');
            } else {
                $this->redirect('showList', array(), 2, '商品修改成功');
            }
        } else {
            $result = $goods->find($goods_id);
            $this->assign('info', $result);
            $this->display();
        }
    }

    function delete($goods_id)
    {
        $goods = D('goods');
        $result = $goods->delete($goods_id);
        if ($result) {
            $this->redirect('showList', array(), 1, '删除成功');
        } else {
            $this->redirect('showList', array(), 1, '删除失败');
        }
    }

    function zhanshi()
    {
        $this->display();
    }

    /**
     * 数组转xls格式的excel文件
     * @param  array $data 需要生成excel文件的数组
     * @param  string $filename 生成的excel文件名
     *      示例数据：
     * $data = array(
     * array(NULL, 2010, 2011, 2012),
     * array('Q1',   12,   15,   21),
     * array('Q2',   56,   73,   86),
     * array('Q3',   52,   61,   69),
     * array('Q4',   30,   32,    0),
     * );
     */
    function create_xls()
    {
        $filename = 'simple.xls';
        $goods = D('goods');
        $sql = "select goods_id,goods_name,goods_number,goods_price,goods_brand_id,goods_create_time from sw_goods";
        $data = $goods->query($sql);
        $titleArray = array(array('id', 'name', 'number', 'price', 'branch_id', 'create_time'));
        $data = $titleArray+ $data;
//        dump($data);
//        return
//        $data = $goods->select();
//        $data = array(
//            array(NULL, 2010, 2011, 2012),
//            array('Q1', 12, 15, 21),
//            array('Q2', 56, 73, 86),
//            array('Q3', 52, 61, 69),
//            array('Q4', 30, 32, 0),
//        );
        ini_set('max_execution_time', '0');
        Vendor('PHPExcel.PHPExcel');
        $filename = str_replace('.xls', '', $filename) . '.xls';
        $phpexcel = new \PHPExcel();
        $phpexcel->getProperties()
            ->setCreator("Maarten Balliauw")
            ->setLastModifiedBy("Maarten Balliauw")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Test result file");
        $phpexcel->getActiveSheet()->fromArray($data);
        $phpexcel->getActiveSheet()->setTitle('Sheet1');
        $phpexcel->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename=$filename");
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objwriter = \PHPExcel_IOFactory::createWriter($phpexcel, 'Excel5');
        $objwriter->save('php://output');
        exit;
    }

}