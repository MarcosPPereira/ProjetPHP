<?
	require_once "apostilaCrud.class.php";
	$apostilaCRUD = new ApostilaCRUD();

	if(isset($_GET['userId'])){
		$userId = $_GET['userId'];
		$user = $apostilaCRUD->readById($userId);
	}
	if(isset($_POST['delete'])){
		$apostilaCRUD->delete($_POST['userId']);
  	    header('Location:../Model/apostila.php');
	}
	if(isset($_POST['cancel'])){
		header('Location:../Model/apostila.php');
	}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Deletar Apostila</title>
</head>
<body>
	<form action="" method="post">
		<input type="hidden" name="userId" value="<?=$userId?>">
		<p>Deseja excluir Apostila<?=$userId?></p>
		<input type="submit" name="delete" value="Confirmar">
		<input type="submit" name="cancel" value="Voltar">
	</form>
</body>
</html>

