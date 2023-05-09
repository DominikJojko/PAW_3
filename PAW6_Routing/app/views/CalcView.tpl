{extends file="main.tpl"}

{block name=content}

<a href="{$conf->action_url}logout" class="pure-button pure-button-active">Wyloguj usera: <b>{$user->login}</b></a>

<form action="{$conf->action_root}calcCompute" method="post" class="pure-form pure-form-stacked"><br />
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
		<label for="id_wartosc">Kwota kredytu: </label>
                <input id="id_wartosc" type="number" name="wartosc" max="1000000" value="{$form->wartosc}" /><br />
                <label for="id_lata">Liczba lat: </label>
                <input id="id_lata" type="number" name="lata" min="1" value="{$form->lata}" /><br />
                <label for="id_oprocentowanie">Oprocentowanie: </label>
                <input id="id_oprocentowanie" type="number" name="oprocentowanie" min="0" value="{$form->oprocentowanie}" /><br />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" /><br />
</form>	

{include file='messages.tpl'}
{/block}
{block name=footer}
<h2>Dominik Jojko</h2>
{/block}