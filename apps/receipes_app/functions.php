<?php
    function isValidRecipe($recipe)
    {
        if ($recipe['is_enabled']===true) {
            $isEnabled = true;
        } else {
            $isEnabled = false;
        }
    
        return $isEnabled;
    }

    function getRecipes($recipes)
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}
function redirectToUrl(string $url):never
{
    header("location: {$url}");
    exit();
}
?>

    