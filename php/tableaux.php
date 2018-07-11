<?php

/*
$BU[] = 'TDnext';
$BU[] = 'Vitalbase';
$BU[] = 'Pipletz';

//var_dump($BU[0]);

$BU[2] = 'TDnext';
$BU[1] = 'Vitalbase';
$BU[0] = 'Pipletz';

//var_dump($BU[1]);


$BU['TDnext'] = 'Module TD1208r';
$BU['Vitalbase'] = 'Vibby OAK';
$BU['Pipletz'] = 'Tracker';

var_dump($BU);



$BU['Technologie']['TDnext'] = 'Module TD1208r';
$BU['Santé']['Vitalbase'] = 'Vibby OAK';
$BU['Sécurité']['Pipletz'] = 'Tracker';

var_dump($BU);



$TD['TD1207r']['BU'] = 'TDnext';
//$TD['TD1207r']['Activité'] = 'Technologie';
$TD['TD1208r']['BU'] = 'TDnext';
$TD['TD1205p']['BU'] = 'TDnext';
$TD['TD1508']['BU'] = 'TDnext';

$TD['Vibby OAK']['BU'] = 'Vitalbase';
$TD['Vibby LEAF']['BU'] = 'Vitalbase';
$TD['VBC5']['BU'] = 'Vitalbase';

$TD['Pack Home']['BU'] = 'Pipletz';
$TD['Pack Tracker']['BU'] = 'Pipletz';
$TD['Détecteur vidéo']['BU'] = 'Pipletz';
$TD["Détecteur d'ouverture"]['BU'] = 'Pipletz';

var_dump($TD);




$TD = array(
	"TD1207r" => array('BU' => "TDnext"),
	"TD1208r" => array('BU' => "TDnext"),
	"TD1205p" => array('BU' => "TDnext"),
	"TD1204" => array('BU' => "TDnext"),
	);


var_dump($TD);

*/
?>

<html>

<?php

	var_dump($_POST);

?>

<form method="POST" action ="">
	<p><input type="text" name="firstname" placeholder="Prénom"></input></p>
	<p><input type="text" name="name" placeholder="Nom"></input></p>
	<p><input type="email" name="email" placeholder="Email"></input></p>
	<p><input type="password" name="password" placeholder="Mot de passe"></input></p>
	<button type="submit">ENVOYER</button>

</form>

<a href="http://local.dev/lab/php/get_tab.php?id=1&title=testtableauget&objectif=rien">http://local.dev/lab/php/get_tab.php?id=1&title=testtableauget&objectif=rien</a><br>
<a href="http://local.dev/lab/php/get_tab.php?toto=896&token=jeton&param=titi">http://local.dev/lab/php/get_tab.php?toto=896&token=jeton&param=titi</a>

</html>