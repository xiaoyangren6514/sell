<?php
/**
 * Created by PhpStorm.
 * User: zhonglongquan
 * Date: 2016/11/3
 * Time: 15:35
 */

namespace Admin\Model;


use Think\Model;

class ManagerModel extends Model
{

    function checkNamePwd($name, $pwd)
    {
        return $this->where(" mg_name = '$name' and mg_pwd = '$pwd' ")->find();
    }

}