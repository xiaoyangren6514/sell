<?php /* Smarty version Smarty-3.1.6, created on 2016-11-03 16:44:55
         compiled from "./Application/Admin/View\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:27583581ad8d5b51ba6-74007530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e78eb414bd5ccefea74bfad4105e0be48c2d9c5' => 
    array (
      0 => './Application/Admin/View\\Index\\left.html',
      1 => 1478162691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27583581ad8d5b51ba6-74007530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ad8d60ca89',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ad8d60ca89')) {function content_581ad8d60ca89($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 
               background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bg.jpg border=0>
               <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(1) 
                                    href="javascript:void(0);">关于我们</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child1 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>公司简介</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>荣誉资质</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>分类管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>子类管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(2) 
                                    href="javascript:void(0);">新闻中心</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child2 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>公司新闻</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>分类管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>子类管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(3) 
                                    href="javascript:void(0);">产品中心</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child3 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="<?php echo @__MODULE__;?>
/Goods/showList"
                                   target=right>产品展示</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>最新产品</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>分类管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>子类管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(4) 
                                    href="javascript:void(0);">客户服务</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child4 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>客户服务</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>分类管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>子类管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(5) 
                                    href="javascript:void(0);">经典案例</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child5 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>分类管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>子类管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(6) 
                                    href="javascript:void(0);">高级管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child6 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>广告管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>访问统计</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>邮件发送设置</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>联系部门</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>用户留言</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>招聘职位</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>应聘人员</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>留言簿</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>产品订购</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>链接管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>文件管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>信息转移</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(7) 
                                    href="javascript:void(0);">系统管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child7 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>基本设置</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>样式管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>栏目管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>功能管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>菜单管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>首页设置</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>管理员列表</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(0) 
                                    href="javascript:void(0);">个人管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child0 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>修改口令</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                   href="http://www.865171.cn" 
                                   target=_top>退出系统</a></td></tr></table></td>
                <td width=1 bgcolor=#d1e6f7></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>