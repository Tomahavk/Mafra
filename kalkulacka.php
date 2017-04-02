<form method="post" action = ./kalkulacka.php>
<input type="text" name="a" value="<? echo $_POST['a']; ?>">
<input type="text" name="b" value="<? echo $_POST['b']; ?>">
<input type="submit" value="spocitej">
</form>
<? if(($_POST['a']!="")and($_POST['b']!="")) { ?>
<div>soucet: <? echo $_POST['a'] + $_POST['b']; ?></div>
<div>rozdil: <? echo $_POST['a'] - $_POST['b']; ?></div>
<div>nasobek: <? echo $_POST['a'] * $_POST['b']; ?></div>
<div>podil: <? echo $_POST['a'] / $_POST['b']; ?></div>
<? } ?>
