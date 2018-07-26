<?php
session_start();

require('controller/frontend.php');

try
{
	if(isset($_GET['action']))
	{
		if($_GET['action'] == 'accueil')
		{
			accueil();
		}
		else
		{
			throw new Exception('Erreur : Aucune page correspondante');
		}
	}
	else
	{
		header('Location: index.php?action=accueil');
	}
}
catch(Exception $e)
{	
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}

?>
