<?php 
Route::get('/',function(){
	return view('admin.dashboard');
});
Route::get('list',function(){
	return view('admin.category.list');
})->name('cate.list');
 ?>