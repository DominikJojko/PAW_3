<?php
/* Smarty version 4.3.0, created on 2023-04-23 23:02:58
  from 'C:\xampp\htdocs\PAW4_Obiektowosc\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64459d0267b7d5_96737042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba597d4a04c693da41e309036d1be31754bb0b6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW4_Obiektowosc\\app\\CalcView.html',
      1 => 1682283773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64459d0267b7d5_96737042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47389546264459d02672193_16617594', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203077853164459d02672a07_72026258', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_47389546264459d02672193_16617594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_47389546264459d02672193_16617594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dominik Jojko<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_203077853164459d02672a07_72026258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_203077853164459d02672a07_72026258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post" class="pure-form pure-form-stacked"><br />
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
        <?php if ((isset($_smarty_tpl->tpl_vars['msgs']->value)) && $_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <p>błąd: </p>
        <ol>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    <?php }?>
    
    
    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->wys_raty))) {?>
        <p> koszt miesieczny: </p>
        <p class = "res">
        <?php echo $_smarty_tpl->tpl_vars['res']->value->wys_raty;?>
zł
        </p>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->koszt))) {?>
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
