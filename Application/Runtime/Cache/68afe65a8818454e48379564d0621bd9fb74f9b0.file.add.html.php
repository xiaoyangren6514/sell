<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 17:20:28
         compiled from "./Application/Admin/View\Goods\add.html" */ ?>
<?php /*%%SmartyHeaderCode:28385581ac886a339a5-67618362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68afe65a8818454e48379564d0621bd9fb74f9b0' => 
    array (
      0 => './Application/Admin/View\\Goods\\add.html',
      1 => 1478164052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28385581ac886a339a5-67618362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ac886b6c22',
  'variables' => 
  array (
    's_category_info' => 0,
    '_v' => 0,
    's_brand_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ac886b6c22')) {function content_581ac886b6c22($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>添加商品</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
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
                <td>商品名称</td>
                <td><input type="text" name="goods_name"/></td>
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
                <td>商品价格</td>
                <td><input type="text" name="goods_price"/></td>
            </tr>
            <tr>
                <td>商品重量</td>
                <td><input type="text" name="goods_weight"/></td>
            </tr>
            <tr>
                <td>商品数量</td>
                <td><input type="text" name="goods_number"/></td>
            </tr>
            <tr>
                <td>商品图片</td>
                <td><input type="file" name="goods_image"/></td>
            </tr>
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