<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function fetch()
    {
        $client = new Client();
        $response = $client->get('https://api.spoonacular.com/recipes/complexSearch?apiKey=e8cd8c00f4cf4bbebd02f135cbd1309f&diet=diabetic&number=100&sort=calories&sort=protein&sort=max-used-ingredients&sort=min-missing-ingredients&sort=total-fat&sort=price');


        // sort[0]=calories:asc&sort[1]=protein:desc');

        // $response = $client->get('https://api.spoonacular.com/recipes/search?apiKey=YOUR_API_KEY&diet=diabetic&number=100');


        $recipes = json_decode($response->getBody(), true);
        dd($recipes);

        foreach ($recipes['results'] as $recipe) {
            $newRecipe = new Recipe();
            $newRecipe->title = $recipe['title'];
            $newRecipe->instructions = $recipe['instructions'];
            $newRecipe->ingredients = json_encode($recipe['extendedIngredients']);
            $newRecipe->servings = $recipe['servings'];
            $newRecipe->calories = $recipe['nutrition']['nutrients'][0]['amount'];
            $newRecipe->protein = $recipe['nutrition']['nutrients'][1]['amount'];
            $newRecipe->fat = $recipe['nutrition']['nutrients'][2]['amount'];
            $newRecipe->carbohydrates = $recipe['nutrition']['nutrients'][3]['amount'];
            $newRecipe->save();
        }

        // return $response;
        // return redirect()->route('recipes.index');
    }

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Display recipes with calorie count less than 500.
     */
    public function lowCalorieRecipes()
    {
        $recipes = Recipe::where('calories', '<', 500)->get();
        return view('recipes.low-calorie', compact('recipes'));
    }

    /**
     * Display recipes sorted by calorie count in ascending order.
     */
    public function sortedRecipes()
    {
        $recipes = Recipe::orderBy('calories', 'asc')->get();
        return view('recipes.sorted', compact('recipes'));
    }
}
