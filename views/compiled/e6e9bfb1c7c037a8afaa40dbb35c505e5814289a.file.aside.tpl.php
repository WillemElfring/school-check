<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 11:12:54
         compiled from "views\aside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23953580e0a1c659625-64349510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6e9bfb1c7c037a8afaa40dbb35c505e5814289a' => 
    array (
      0 => 'views\\aside.tpl',
      1 => 1478451091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23953580e0a1c659625-64349510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580e0a1c67f3a1_67012436',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580e0a1c67f3a1_67012436')) {function content_580e0a1c67f3a1_67012436($_smarty_tpl) {?><div id="bug">
<aside>
    <h1 id="ash1">Last News</h1>
    <section id="sec">
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <div id="kop69">
                <h2><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h2>
                <div id="kopaside"><content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content></div>
                <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>
                <h4><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</h4>
            </div>
        <?php } ?>
    </section>
</aside><?php }} ?>
