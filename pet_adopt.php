
<!-- Okay what we are looking for here is a form that would give the option of adopting a pet
the pets possible will be displayed as they are organized in folders based on the character's sex and race
images/pets/$charactersex/$characterrace/option1 ... optionx etc. 
There could be a cost associated with adoption perhaps option1 costs low and optionx costs high
upon submit subtract cost from characters gold inventory and place an entry for the pet into that characters database.
Also on this form the naming of the pet should be handled by an input field presented to the player
Obviously this is starting from scratch which I keep saying on here because I only just began using github for these purposes
More to come-->

<!--
That being said, Let us now discuss what the zugra_pets table should look like:
'id','petname','owner','healthpoints','xp','mindam','maxdam','search','opt1','opt2','opt3'

id- unique key auto_increment
petname- string defined by player at time of adoption
owner- some value that identifies the player's character of the player that adopted the pet
healthpoints- a value when < 0 signifies a dead pet
xp- a value of experience points towards the next pet level
mindam- the smallest amount of dmg the pet will do towards an opponents armor
maxdam- the most amount of dmg the pet will do towards an opponents armor
search- correlates to the search skill characters may have
opt1,2,3- Optional database fields that can be utilized for quest tracking etc.

Now we seem to be getting somewhere on mapping this thing out let's pound out the code for it soon!
-->
<?php

INSERT INTO zugra_pet ('petname','owner','healthpoints','xp','mindam','maxdam','search','opt1','opt2','opt3')
VALUES ($petname, $charactername, $pethp, '0', $petnindam, $petmaxdam, $search, null,null,null);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!-- 
is that correct using null for a value that would have no value at this point?
-->
