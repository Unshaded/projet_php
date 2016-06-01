<?php echo validation_errors(); ?>
<?php echo form_open('contacts/create',array('class'=>'form-horizontal')); ?>


<fieldset>

<!-- Form Name -->
<legend>Ajouter un contact</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nom">Nom</label>
  <div class="controls">
  <input value="<?=set_value('nom')?>" id="nom" name="nom" placeholder="Nom" class="input-large" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="prenom">Prénom</label>
  <div class="controls">
  <input value="<?=set_value('prenom')?>" id="prenom" name="prenom" placeholder="Prénom" class="input-large" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
  <input value="<?=set_value('email')?>" id="email" name="email" placeholder="Adresse Mail" class="input-large" required="" type="email">

  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="envoyer"></label>
  <div class="controls">
	<button id="envoyer" name="envoyer" class="btn btn-primary">Créer</button>
<?=anchor("/","Abandonner",array('class'=>'btn btn-danger'))?>
  </div>
</div>

</fieldset>
</form>
