<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 14:48:01
         compiled from "./Application/Admin/View\Goods\add_sell_info.html" */ ?>
<?php /*%%SmartyHeaderCode:17036581adbe9c4af24-13077464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb710fcdef63d83173b7391b27c58f0d1ee6f98' => 
    array (
      0 => './Application/Admin/View\\Goods\\add_sell_info.html',
      1 => 1478155661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17036581adbe9c4af24-13077464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581adbe9db644',
  'variables' => 
  array (
    's_category_info' => 0,
    '_v' => 0,
    's_brand_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581adbe9db644')) {function content_581adbe9db644($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加购房信息</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：购房管理-》添加购房信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="./admin.php?c=goods&a=showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>购房人</td>
                    <td><input type="text" name="buy_name" /></td>
                </tr>
                <tr>
                    <td>房号</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <!--<tr>
                    <td>商品分类</td>
                    <td>
                        <select name="f_goods_category_id">
                            <option value="0">请选择</option>
                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_category_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['category_name'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>-->
               <!-- <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="f_goods_brand_id">
                            <option value="0">请选择</option>
                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_brand_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['brand_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['brand_name'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>-->
                <tr>
                    <td>执行价格日期</td>
                    <td><input type="text" name="exe_price_date" /></td>
                </tr>
                <tr>
                    <td>购房时基价</td>
                    <td><input type="text" name="base_price" /></td>
                </tr>
                <tr>
                    <td>开盘价</td>
                    <td><input type="text" name="before_price" /></td>
                </tr>
                <tr>
                    <td>购房价</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>房屋面积</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>房屋价款</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>储藏室号</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>储藏室面积</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>公式合算</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>购房款</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>定金</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>首付</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <tr>
                    <td>签约日期</td>
                    <td><input type="text" name="buy_price" /></td>
                </tr>
                <!--<tr>
                    <td>商品图片</td>
                    <td><input type="file" name="goods_image" /></td>
                </tr>-->
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_introduce"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>