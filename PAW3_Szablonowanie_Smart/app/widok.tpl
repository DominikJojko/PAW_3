{extends file="../templates/main.html"}

{block name=footer}Dominik Jojko{/block}

{block name=content}

    <form action="{$app_url}/app/kalkulator_kredytowy.php" method="post" class="pure-form pure-form-stacked"><br />
        <legend>Kalkulator kredytowy</legend>

        <fieldset>
            <label for="id_wartosc">Ile chcesz wziąć kredytu? </label>
            <input id="id_wartosc" type="text" name="wartosc" value="{$wartosc}" /><br />

            <label for="id_lata">Na ile lat? </label>
            <input id="id_lata" type="text" name="lata" value="{$lata}" /><br />

            <label for="id_oprocentowanie">Jakie oprocentowanie ma podany kredyt? </label>
            <input id="id_oprocentowanie" type="text" name="oprocentowanie" value="{$oprocentowanie}" /><br />
        </fieldset>

        <input type="submit" name="submit" value="Oblicz koszt raty i sumę do spłaty" class="pure-button pure-button-primary" />
    </form>

    <div class="messages">
    {if isset($messages) }
        {if count($messages) > 0 }
            <p>błąd: </p>
            {foreach $messages as $msg}
             {strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}
</div>

{if isset($wys_raty) }
    <p> koszt miesieczny: </p>
        <p class = "res">
        {$wys_raty}zł
        </p>
{/if}

{if isset($koszt) }
    <p> koszt suma: </p>
        <p class = "res">
        {$koszt}zł
        </p>
{/if}

</div>
{/block}
</body>
</html>