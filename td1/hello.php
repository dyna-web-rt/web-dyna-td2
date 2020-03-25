// Hello world 

<?php
echo 'Hello world!';
?>
a
<hr>
<?php
$version = phpversion();
echo "<h1>php $version is great!</h1>";
?>

// Exo 1 

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
    <a href="/TP1/hello.php?message=Hello">Afficher Hello</a>
    <a href="?size=30">en 30</a>
 </body>
</html>
<?php
echo "<div style='font-size: {$size}px;'>Message de taille {$size}px en rouge</div>";  
echo("Hello world !");
echo "Vous êtes sur la page n°".$_GET["page"];
 ?>



    


// EX 2 

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Exercice n°2</title>
</head>
<body>
	<a href="?message=Rouge&size=15&couleur=red">Rouge en 15</a><br>
	<a href="?message=Vert&size=30&couleur=green">Vert en 30</a><br>
	<a href="?message=Bleu&size=50&couleur=blue">Bleu en 50</a><br>
	<hr>
	<div style='font-size: 10px; color: black ;'>Message de taille 10px en Pas de message</div>	<hr>
	<form method="GET">
		<label for="message">Message : </label>
		<input type="text" value="Pas de message" name="message" id="message">
		<label for="size">Size : </label>
		<input type="number" value="10" name="size" id="size">
		<label for="couleur">Couleur : </label>
		<input type="color" value="black" name="couleur" id="couleur">
		<hr>
		<input type="submit" value="Valider">
		<input type="submit" name="update" value="+">
		<input type="submit" name="update" value="-">
	</form>

</body>
</html>
    
    
    
    
    


// Exo 3 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Exercice n°3</title>
</head>
<body>
	<?php
	$size = $_POST['size'] ?? 10;
	$color = $_POST['couleur'] ?? 'black';
	$message = $_POST['message'] ?? 'Pas de message';
	$update = $_POST['update'] ?? null;
	if ($update == "+") {
		$size = $size + 2;
	} elseif ($update == "-") {
		$size = $size - 2;
	}
	echo "<div style='font-size: {$size}px; color: {$color} ;'>Message de taille {$size}px en {$message}</div>";
	?>
	<hr>
	<form method="POST">
		<label for="message">Message : </label>
		<textarea name="message" id="message"><?=$message?></textarea>
		<label for="size">Size : </label>
		<input type="number" value="<?=$size?>" name="size" id="size">
		<label for="couleur">Couleur : </label>
		<input type="color" value="<?=$color?>" name="couleur" id="couleur">
		<hr>
		<input type="submit" value="Valider">
		<input type="submit" name="update" value="+">
		<input type="submit" name="update" value="-">
	</form>
</body>
</html>


// Exo 4
<!DOCTYPE html>
<html>                                                  
  <head>
	<meta charset="UTF-8">
	<title>Exercice n°4</title>
</head>                                                  
<body>

<form method="GET" action=""></form>
    <table border='1'>
    <tbody>
        <tr>
            <td>0-0</td>
            <td>0-1</td>
			<td>0-2</td>
			<td>0-3</td>
			<td>0-4</td>
			<td>0-5</td>
			<td>0-6</td>
			<td>0-7</td>
			<td>0-8</td>
			<td>0-9</td>
			<td>0-10</td>
			<td>0-11</td>
        </tr>
        <tr>
            <td>1-0</td>
            <td>1-1</td>
			<td>1-2</td>
			<td>1-3</td>
			<td>1-4</td>
			<td>1-5</td>
			<td>1-6</td>
			<td>1-7</td>
			<td>1-8</td>
			<td>1-9</td>
			<td>1-10</td>
			<td>1-11</td>
        </tr>
		<tr>
            <td>2-0</td>
            <td>2-1</td>
			<td>2-2</td>
			<td>2-3</td>
			<td>2-4</td>
			<td>2-5</td>
			<td>2-6</td>
			<td>2-7</td>
			<td>2-8</td>
			<td>2-9</td>
			<td>2-10</td>
			<td>2-11</td>
        </tr>
    </tbody>
</table>
    <input type="color" name="color" value="color">  <input/>
    
      </body>
</html>

$nbColonnes=$_GET["c"]??10;
echo "<h2>Tableau de $nbLignes par $nbColonnes</h2>";
?>

<table border='1'>
    <tbody>
       <?php for($i=0;$i<$nbLignes;$i++){
        $gras=($i%2==0)?"bold":"normal";
      ?>
        <tr>
         <?php for($j=0;$j<$nbColonnes;$j++){
            $couleur=($j%2==0)?"red":"black";
            ?>
            <td style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$i - $j"?></td>
        <?php }?>
        </tr>
      <?php }?>
    </tbody>
</table>
<?php
include "include/footer.php";
 ?>


// Exo 5

<?php
$title='Exercice n°4 (Itérations)';
include "include/header.php";
include "include/fonctions.php";

?>
<a href="?l=2&c=2">Tableau 2 x 2</a><br>
<a href="?l=5&c=5">Tableau 5 x 5</a><br>
<a href="?l=10&c=8">Tableau 10 x 8</a><br>
<hr>
<?php
//Récupère les paramètres l et c passés dans l'url
$nbLignes=$_GET["l"]??10;
$nbColonnes=$_GET["c"]??10;

echo div("Test de message avec la fonction div");

include "include/footer.php";
 ?>