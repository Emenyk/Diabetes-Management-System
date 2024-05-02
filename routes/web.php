<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationalMaterialController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\MedicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->group(function(){
    Route::get('/education', [EducationalMaterialController::class, 'index'])->name('education');
    Route::get('/health', [HealthController::class, 'index'])->name('health.index');
    Route::get('/health/create', [HealthController::class, 'create'])->name('health.create');
    Route::get('/meal', [MealController::class, 'index'])->name('meal.index');
    Route::get('/meal/plans', [MealController::class, 'plan'])->name('meal.plan');
    Route::get('/meal/create', [MealController::class, 'create'])->name('meal.create');
    Route::get('/medications', [MedicationController::class, 'index'])->name('medication.index');
    Route::get('/reminder/create', [MedicationController::class, 'create'])->name('reminder.create');
})->middleware('auth');



// Route::resource('educational/materials', EducationalMaterialController::class);
Route::get('/fetch/recipes', [RecipeController::class, 'fetch'])->name('recipes.fetch');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/recipes/low-calorie', [RecipeController::class, 'lowCalorieRecipes'])->name('recipes.low-calorie');
Route::get('/recipes/sorted', [RecipeController::class, 'sortedRecipes'])->name('recipes.sorted');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
