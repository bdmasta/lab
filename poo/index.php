<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");

$harry = new Personnage("Harry");

$harry->setVie('100000');
var_dump($harry->getVie());

$harry->setNom('Harry Potter');
var_dump($harry->getNom());

$merlin->setNom('Voldemort');
var_dump($merlin->getNom());


require 'Form.php';
?>

<form action="#" method="post">

<?php
$form = new Form($_POST);

$form->setTag('p');

echo $form->input('surname', 'text');
echo $form->input('firstname','text');
echo $form->input('company','text');
echo $form->input('password','password');
echo $form->submit();
?>
</form>