<?php
$coordonnees = array (
    'T-shirt rouge' => 15.50,
    'T-shirt vert' => 15.50, 
    'T-shirt argent' => 16.50,
    'Short bleu' => 19.99, 
    'Short vert' => 19.99, 
	'Veste argent' => 35);
	


function affichage_produits($coordonnees) {
	$total=0; 
	
	echo"<table>";
foreach($coordonnees as $element => $v)
{
echo "$element $v<br>";

echo"<tr>";
echo"<td>";
echo"$coordonnees";
echo"</td>";
echo"<td>";
echo"$element";
echo"</td>";
echo"</tr>";

}
echo"</table>";
}

affichage_produits($coordonnees);