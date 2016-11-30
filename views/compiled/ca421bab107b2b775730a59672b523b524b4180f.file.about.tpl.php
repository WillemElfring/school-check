<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 20:34:29
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21357fe2dd5a9d7e3-88338412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1478115231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21357fe2dd5a9d7e3-88338412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe2dd5b68770_54519166',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'nr_pages' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe2dd5b68770_54519166')) {function content_57fe2dd5b68770_54519166($_smarty_tpl) {?><h1 class="h1">About The Players</h1>
<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<div id="kop20">
    <img id="imgabout" src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>
    <div id="subkop">
    <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
   <content> <div id="kop3"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</div></content>
    <h4><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</h4>
       
        <video width="300" controls>
            <source src="video/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['video'];?>
" type="video/mp4">

            Your browser does not support HTML5 video.
        </video>
    </div>


</div>
<?php } ?>
</section>
<div id="ul12">
    <ul id="pli">
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <li class="li"><a href="?action=about&page_nr=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
        <?php }} ?>

    </ul>
</div><?php }} ?>
