<?php
/* Smarty version 4.3.0, created on 2023-04-18 00:23:46
  from 'C:\xampp\htdocs\PAW3_4_Szablonowanie_Smart\app\widok.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643dc6f25c36c9_00246316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e01849cc37ffff0ca324069ad08b7a60c6cfcdd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW3_4_Szablonowanie_Smart\\app\\widok.tpl',
      1 => 1681770223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643dc6f25c36c9_00246316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1899278552643dc6f25bae16_73288190', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1281509603643dc6f25bb5d3_75887699', 'content');
?>

</body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1899278552643dc6f25bae16_73288190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1899278552643dc6f25bae16_73288190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dominik Jojko<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1281509603643dc6f25bb5d3_75887699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1281509603643dc6f25bb5d3_75887699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/kalkulator_kredytowy.php" method="post" class="pure-form pure-form-stacked"><br />
        <legend>Kalkulator kredytowy</legend>

        <fieldset>
            <label for="id_wartosc">Ile chcesz wziąć kredytu? </label>
            <input id="id_wartosc" type="text" name="wartosc" value="<?php echo $_smarty_tpl->tpl_vars['wartosc']->value;?>
" /><br />

            <label for="id_lata">Na ile lat? </label>
            <input id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['lata']->value;?>
" /><br />

            <label for="id_oprocentowanie">Jakie oprocentowanie ma podany kredyt? </label>
            <input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['oprocentowanie']->value;?>
" /><br />
        </fieldset>

        <input type="submit" name="submit" value="Oblicz koszt raty i sumę do spłaty" class="pure-button pure-button-primary" />
    </form>

    <div class="messages">
    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
            <p>błąd: </p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
             <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['wys_raty']->value))) {?>
    <p> koszt miesieczny: </p>
        <p class = "res">
        <?php echo $_smarty_tpl->tpl_vars['wys_raty']->value;?>
zł
        </p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['koszt']->value))) {?>
    <p> koszt suma: </p>
        <p class = "res">
        <?php echo $_smarty_tpl->tpl_vars['koszt']->value;?>
zł
        </p>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
