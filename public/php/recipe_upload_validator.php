<?php
require_once ('connect.php');

$recipe = $_POST["recipeName"];
$prepTime = $_POST["prepTime"];
$cookTime = $_POST["cookTime"];
$directions = $_POST["cookingDirections"];
$ingredientName = $_POST["ingredient"];

echo $ingredientName;
/*
$mealTimes = $_POST["meal-time"];
$prepTime = $_POST["prep-time"];
$cookTime = $_POST["cook-time"];
$cookingDirections = $_POST["cooking-directions"];

$ingredients = $_POST["ingredient-name"];
$ingredientUnit = $_POST["ingredient-unit"];
$ingredientQty = $_POST["ingredient-qty"];
*/


/*

//Checkbox validation
//Assign one to all checked boxes
$breakfast = 0;
$lunch = 0;
$dinner = 0;

//Handle rest of validation here


//End validation





//Check for checked boxes validation
//Make a function for this
//Breakfast
if(in_array('breakfast', $mealTimes)){
	$breakfast = 1;
	echo "breakfast";
	//Give breakfast a 1
}
//Lunch
if(in_array('lunch', $mealTimes)){
	$lunch = 1;
	echo "lunch";
	//Give breakfast a 1
}
//Dinner
if(in_array('dinner', $mealTimes)){
	$dinner = 1;
	echo "dinner";
	//Give breakfast a 1
}
/*
//Terrible, don't ever do this when concat integers
//Stores breakfast, lunch, and dinner in db with a series of 0 and 1s
$bld = $breakfast.$lunch.$dinner;



//Function for uid
//MD5 the name of the recipe and concat with microtime to allow duplicate entries 
function createUID($myString){
	
	$md5 = md5($myString);
	$myUid = uniqid();
	
	return $md5.$myUid;
}

$uid = createUID($recipe);
//echo $uid;



//Create directory for the created recipe
function createDirectory($dirName){
		
	
		$curDir = realpath(dirname(__FILE__));
		$targetDir = $curDir . '/../img/recipes/';
		$theFolderToMake = $targetDir . $dirName;
		mkdir($theFolderToMake, 0777, false);
	}


//Upload to DB
//FIX ME!  If the server is interrupted, the recipe and recipe_ingredients could be off

//Upload the recipe to recipe table
$recipe_query = "INSERT INTO recipes (recipe_name, recipe_meal_time, recipe_prep_time, recipe_cook_time, recipe_directions, recipe_directory) VALUES ( '$recipe', '$bld', '$prepTime', '$cookTime', '$cookingDirections', '$uid')";
mysqli_query($conn, $recipe_query);

//get recipe id
$recipeID = mysqli_insert_id($conn);

createDirectory($uid);





//Loop through ingredients and add them to ingredients table
for($i = 0; $i < count($ingredients); $i++){
	
	//Adding ingredients to ingredients table
	$ing = $ingredients[$i]; //change my name!
	$ingredients_query = "INSERT INTO ingredients (ingredient_name) VALUES ('$ing') ";
	mysqli_query($conn, $ingredients_query);
	
	
	$ingredientID = mysqli_insert_id($conn);
	//Adding to recipe_ingredients table
	
	$hashMap = "INSERT INTO recipe_ingredients (recipe_id, ingredient_id, qty, units) VALUES ('$recipeID', '$ingredientID', '$ingredientQty[$i]', '$ingredientUnit[$i]' ) ";
	mysqli_query($conn, $hashMap);
	
	
	//Populate recipe_ingredients table with recipe and ingredient data, including the quantity

	
}

echo "CALLIN BACK FROM PHP!" . $recipe;
mysqli_close($conn);

*/
?>