<!--
In the spirit of having this be a modular app that can be optionally included in the world of zugra game, I am creating a complete
combat system inside the pet module that will handle any instances of the pet attacking at a monster. In order to accomplish this I will
first note that the game has a table with one cell containing buttons that handle the game combat... This is displayed only when face-to-face
with some monster entity. As of now the two choices are 'fight' and 'flee' giving the player the option to make their character either
oppose the opponent or take a roll towards getting away. In this section a new button is to be added titled: 'Send Pet' which by doing will
be indicating that the player's charaqcter has decided to send in their pet for an attack against the opponent.
-->
<?php
if($comb_act == 'pet_attack') {
  <!--link to the pet_combat.php file "forget how this goes at the moment will be looking up what I am looking for here" -->
}
?>
<!-- We would place the above in the file 'combat.php' in the world of zugra game as well as create the button on the table
when that button is called we will be moved to this file -->
<?php
include "header.php";

function endfight(){
	$disp_msg= $_SESSION['disp_msg'];
	$charfrom= @$_SESSION['charfrom'];

	session_unset();
	session_destroy();

	flush();

	if(@$_SESSION['charfrom'] == "arena"){
		return "arena.php";
	} else if($charfrom == "dungeon"){
		return "travel_dungeon.php?finish";
	} else {
		return "travel.php";
	}
}

function sayOpponents(){
	global $oppcharacter;
	$more=  (@$_SESSION['num_of_opps']>1)? ' and '.($_SESSION['num_of_opps']-1).' more foes':"";
	return "$oppcharacter->name Level $oppcharacter->level $more";
}


/* part Copyright 2005 peter.schaefer@gmail.com */

session_start();

// INITIAL SETUP

include_once "class_character.php";
function roll_damage($mindamage, $maxdamage) {
	$delta= $maxdamage-$mindamage;
	if($delta < 1){
		$delta= 1;
	}

	$damage = floor($mindamage+exp(rand(0,floor(137.0*log($delta)))/137.0)+rand(0,99)*0.01);
	DEBUG AND $_SESSION['disp_msg'][] = "DEBUG: damage between $mindamage-$maxdamage = $damage";
	return $damage;
}
$pet=new pet($PHP_zugra_PETID);
?>

<!-- I think I now have the initial set up of the battle between character's pet and opponent -->
<!-- More to come, wifi access limited at this point -->
