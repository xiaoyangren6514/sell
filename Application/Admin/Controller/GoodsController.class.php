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
                    'exts' => array(), //允许上传的文件后缀
                    'rootPath' => './Uploads/', //保存根路径
                );
                $up = new Upload($config);
                dump($up);
                // uploadOne方法会返回上传附件存储在服务器的 名字 路径等信息
                $z = $up->uploadOne($_FILES['goods_image']);
                dump($z);
                // 把上传好的图片保存到数据表中
                $bigPathName = $up->rootPath . $z['savepath'] . $z['savename'];
                $_POST['goods_big_img'] = ltrim($bigPathName, './');
                // 给上传好的图片制作缩略图
                $im = new Image();
                $im->open($bigPathName);
                $im->thumb(125, 125, 6);
                $smallPathName = $up->rootPath . $z['savepath'] . "small_" . $z['savename'];
                $im->save($smallPathName);
                $_POST['goods_small_img'] = ltrim($smallPathName, './');
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
//            $z = $goods->add($_POST);
//            if ($z) {// add success
//                $this->redirect('showList', array(), 2, '商品添加成功');
//            } else {// add fail
//                $this->redirect('add', array(), 2, '商品添加失败');
//            }
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

}