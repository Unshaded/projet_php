<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<p class="text-right">
<?=anchor('contacts/create', 'Ajouter', array('class'=>'btn btn-normal'))?>
</p>
<?php
$this->table->set_heading(array('Nom', 'Prénom', 'Email',''));
$template = array(
	'table_open' => '<table class="table table-striped   table-condensed">'
);

$this->table->set_template($template);
foreach ($contacts as $contact){
	$this->table->add_row(
		$contact->nom,
		$contact->prenom,
		$contact->email,
		array(
		'data'=>anchor('contacts/delete/'.$contact->id,
		'<i class="icon-remove-sign"></i>',
		array('class'=>'btn btn-danger'))." ".
		anchor('contacts/edit/'.$contact->id,
		'<i class="icon-search"></i>',
		array('class'=>'btn btn-info')),
		'style'=>"text-align:right")
	);
}

echo $this->table->generate();
?>

