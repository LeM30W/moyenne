<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
 	
 	 <div id="DIVcontent">
      <div id="DIVsaisie" contenteditable="true"></div>
      <button id="BUTenvoi">Envoyer</button>
      <button id="BUTmoyenne">Moyenne</button>
    </div>

    <div id="DIVanalyse">
      <div id="DIVlettre">
        <p class="pbre">Nombre de lettre: </p>
        <p class="SPAmoyenne">Moyenne: </p>
      </div>
      <div id="DIVmot">
        <p class="pbre">Nombre de mot: </p>
        <p class="SPAmoyenne">Moyenne: </p>
      </div>
      <div id="DIVphrase">
        <p class="pbre">Nombre de lettre: </p>
        <p class="SPAmoyenne">Moyenne: </p>
      </div>

    </div>
    
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>