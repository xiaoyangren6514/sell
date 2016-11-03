<?php
/**
 * Created by PhpStorm.
 * User: zhonglongquan
 * Date: 2016/11/3
 * Time: 11:08
 */

namespace Admin\Controller;


use Admin\Model\ManagerModel;
use Think\Controller;
use Think\Verify;

class ManagerController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            $verify = new Verify();
            $name = $_POST['admin_user'];
            $pwd = $_POST['admin_psd'];
            if (!empty($name)) {
                session('admin_user_name', $name);
            }
            $manageModel = new ManagerModel();
            if ($verify->check($_POST['captcha'])) {
                $result = $manageModel->checkNamePwd($name, $pwd);
                if (!empty($result)) {
                    session('admin_id' . $result['mg_id']);
                    session('admin_name', $result['mg_name']);
                    $this->redirect('Index/index');
                } else {
                    $this->redirect('login', array(), 1, '用户名或密码错误');
                }
            } else {
                $this->redirect('login', array(), 1, '验证码输入错误');
            }
        } else {
            $this->display();
        }
    }

    /**
     * 生成验证码
     */
    function verifyImg()
    {
        $config = array(
            'fontSize' => 15,              // 验证码字体大小(px)
            'useCurve' => true,            // 是否画混淆曲线
            'useNoise' => true,            // 是否添加杂点
            'imageH' => 35,               // 验证码图片高度
            'imageW' => 100,               // 验证码图片宽度
            'length' => 3,               // 验证码位数
            'fontttf' => '1.ttf',              // 验证码字体，不设置随机获取
            'codeSet' => '1234567890',             // 验证码字符集合
        );
        $verify = new Verify($config);
        $verify->entry();
    }

}