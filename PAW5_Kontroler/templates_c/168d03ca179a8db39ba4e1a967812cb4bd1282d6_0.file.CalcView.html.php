<?php
/* Smarty version 3.1.30, created on 2023-05-08 17:44:15
  from "C:\xampp\htdocs\PAW5_Kontroler\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645918cf37d038_85847632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '168d03ca179a8db39ba4e1a967812cb4bd1282d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW5_Kontroler\\app\\views\\CalcView.html',
      1 => 1683560643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/main.html' => 1,
  ),
),false)) {
function content_645918cf37d038_85847632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208602408645918cf36f585_79878836', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1740267253645918cf37ca33_26637301', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_208602408645918cf36f585_79878836 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dominik Jojko<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1740267253645918cf37ca33_26637301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" class="pure-form pure-form-stacked"><br />
        <legend>Kalkulator kredytowy</legend>

        <fieldset>
            <label for="id_wartosc">Ile chcesz wziąć kredytu? </label>
            <input id="id_wartosc" type="text" name="wartosc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->wartosc;?>
" /><br />

            <label for="id_lata">Na ile lat? </label>
            <input id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
" /><br />

            <label for="id_oprocentowanie">Jakie oprocentowanie ma podany kredyt? </label>
            <input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" /><br />
        </fieldset>

        <input type="submit" name="submit" value="Oblicz koszt raty i sumę do spłaty" class="pure-button pure-button-primary" />
    </form>

    <div class="messages">
        <?php if (isset($_smarty_tpl->tpl_vars['msgs']->value) && $_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <p>błąd: </p>
        <ol>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ol>
    <?php }?>
    
    
    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->wys_raty)) {?>
        <p> koszt miesieczny: </p>
        <p class = "res">
        <?php echo $_smarty_tpl->tpl_vars['res']->value->wys_raty;?>
zł
        </p>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->koszt)) {?>
        <p> koszt suma: </p>
        <p class = "res">
        <?php echo $_smarty_tpl->tpl_vars['res']->value->koszt;?>
zł
        </p>
    <?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
