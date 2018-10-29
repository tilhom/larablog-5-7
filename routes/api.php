<?php

use Illuminate\Http\Request;

use App\Category;

Route::get('categories', function(){
	return Category::latest()->orderBy('created_at', 'desc')->get();
});

  // Get Single Category
Route::get('categories/{id}', function($id){
	return Category::findOrFail($id);
});

  // Add Category
Route::post('categories/store', function(Request $request){
	return Category::create(['name' => $request->input(['name'])]);
});

  // Update Category
Route::patch('categories/{id}', function(Request $request, $id){
	Category::findOrFail($id)->update(['name' => $request->input(['name'])]);
});

  // Delete Category
Route::delete('categories/{id}', function($id){
	return Category::destroy($id);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});
