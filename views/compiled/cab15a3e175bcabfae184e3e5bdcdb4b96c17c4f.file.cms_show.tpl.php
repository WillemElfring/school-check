<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 11:42:16
         compiled from "views\cms_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31019583571b0374223-47422752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab15a3e175bcabfae184e3e5bdcdb4b96c17c4f' => 
    array (
      0 => 'views\\cms_show.tpl',
      1 => 1479897732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31019583571b0374223-47422752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_583571b03bf742_62686486',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583571b03bf742_62686486')) {function content_583571b03bf742_62686486($_smarty_tpl) {?>  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<tr>      

        <td><h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1></td>
        <td><content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content></td>
        <td><a href="?action=admin&cms_action=edit">Edit</a></td>
        <td><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></td>
        
           
    </tr>  
    <?php } ?><?php }} ?>
