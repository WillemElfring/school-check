<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 15:30:56
         compiled from "views\schema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14254580f03d0c34c31-02639300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295056efdd3a7f56de855f3a4990e7bb88eb837' => 
    array (
      0 => 'views\\schema.tpl',
      1 => 1478183431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14254580f03d0c34c31-02639300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580f03d0c54539_08424683',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f03d0c54539_08424683')) {function content_580f03d0c54539_08424683($_smarty_tpl) {?>

    
    
        
            
                
                
            
            
                
                
            
                
            
            
                
                    
                
            
            
            
        
    





    
        
        
    
    
    
    


<h1 class="h1">Schema</h1>
<section>
<table id="schema">
    <tr>
        <td class="schema"><strong>Thuis</strong></td>
        <td class="schema"><strong>Uit</strong></td>
        <td class="schema"><strong>Datum</strong></td>
        <td class="schema"><strong>Competitie</strong></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <tr>
            <td class="schema"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['thuis'];?>
</td>
            <td class="schema"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['uit'];?>
</td>
            <td class="schema" class="weg"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>
</td>
            <td class="schema" class="weg"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Competitie'];?>
</td>

        </tr>
    <?php } ?>
</table>
</section><?php }} ?>
