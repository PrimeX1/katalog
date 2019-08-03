<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/k', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('front/index');
});
Route::get('/contact', function () {
    return view('front/contact');
});
Route::get('/product', 'BlogControl@T_laptop');
Route::post('/product', 'BlogControl@T_laptop');
Route::post('/product/harga','BlogControl@harga');
Route::get('/product/cari','BlogControl@cari');
Route::get('/product/merk','BlogControl@merk');
Route::get('/product/asus','BlogControl@asus');
 Route::get('/product/lenovo','BlogControl@lenovo');
 Route::get('/product/Acer','BlogControl@Acer');
 Route::get('/product/hp','BlogControl@hp');
 Route::get('/product/dell','BlogControl@dell');
 Route::get('/product/toshiba','BlogControl@toshiba');

Route::get('/product/detail/{id}','BlogControl@detail');
Route::group(['middleware'=>['isAdmin']],function()
{
    

    //hdd
    Route::get('/hardisk/edit/{id}' , 'hddControl@edit');
    Route::get('/hardisk/delete/{id}' , 'hddControl@delete');
    Route::post('/hardisk/save' , 'hddControl@save');
    Route::get('/hardisk/add' , 'hddControl@add');
    
    
    //os
    Route::get('/os/edit/{id}' , 'osControl@edit');
    Route::get('/os/delete/{id}' , 'osControl@delete');
    Route::post('/os/save' , 'osControl@save');
    Route::get('/os/add' , 'osControl@add');
   
    

    //laptop
    Route::get('/laptop/add' , 'laptopControl@add');
    Route::POST('/laptop/save', 'laptopControl@save');
    Route::get('/laptop/delete/{id}', 'laptopControl@delete');
    Route::get('/laptop/edit/{id}', 'laptopControl@edit');
   
   
    //merk
    Route::get('/merk/add', 'merkControl@add');
    Route::POST('/merk/save', 'merkControl@save');
    Route::get('/merk/delete/{id}', 'merkControl@delete');
    Route::get('/merk/edit/{id}', 'merkControl@edit');
    
    
    //ram
    Route::get('/ram/add' , 'ramControl@add');
    Route::post('/ram/save' , 'ramControl@save');
    Route::get('/ram/edit/{id}' , 'ramControl@edit');
    Route::get('/ram/delete{id}' , 'ramControl@delete');
    Route::get('/getram','ramControl@getram');
    
    //procesor
    Route::get('/procesor/add' , 'procesControl@add');
    Route::post('/procesor/save' , 'procesControl@save');
    Route::get('/procesor/edit/{id}' , 'procesControl@edit');
    Route::get('/procesor/delete/{id}' , 'procesControl@delete');

    //vga
    Route::get('/vga/add' , 'vgaControl@add');
    Route::post('/vga/save' , 'vgaControl@save');
    Route::get('/vga/edit/{id}' , 'vgaControl@edit');
    Route::get('/vga/delete/{id}' , 'vgaControl@delete');

    //H1
    //Route::POST('/h1/find', 'laptopControl@index');
   

    //user
    Route::get('/user','usercontrol@index');
    Route::get('user','UserControl@index');
    Route::get('user/add','UserControl@add');
    Route::get('user/edit/{id}','UserControl@edit');
    Route::post('user/save','UserControl@save');
    Route::get('user/delete/{id}','UserControl@delete');
    Route::get('/user/cetak/{id}','cetakcontrol@cetak');
    Route::get('cetak/{id}','cetakcontrol@cetak');
    Route::delete('user/{id}','usercontrol@destroy')->name('users.destroy');

    Route::get('/excel','ExcelControl@index'); //excel<======================
    Route::post('/excel/import' , 'ExcelControl@import');
    Route::get('/excel/edit/{id}' , 'ExcelControl@edit');
    Route::post('/excel/update','ExcelControl@update');
    Route::get('/excel/delete/{id}','ExcelControl@delete');

    //log
    Route::get('/log','logControl@index');

     //import proyektor
     Route::post('/proyektor/import','ProyektorControl@proimport');
     Route::get('/proyektor/edit/{id}', 'ProyektorControl@edit');
     Route::get('proyektor/add','ProyektorControl@add');
     Route::get('proyektor/delete/{id}','ProyektorControl@delete');
     Route::POST('proyektor/save','ProyektorControl@save');


    //Kategori Proyektor 
    
    Route::get('/ktgpro/add','KtgproControl@add');
    Route::get('/ktgpro/edit{id}','KtgproControl@edit');
    Route::post('/ktgpro/save','KtgproControl@save');
    Route::get('/ktgpro/delete{id}','KtgproControl@delete');

    //Merk Proyektor
    
    Route::get('/Merkpro/add','MerkproControl@add');
    Route::get('/Merkpro/edit{id}','MerkproControl@edit');
    Route::post('/Merkpro/save','MerkproControl@save');
    Route::get('/Merkpro/delete{id}','MerkproControl@delete');

    //Tipe Proyektor
    
    Route::get('/Tipepro/add','tipeproControl@add');
    Route::get('/Tipepro/edit{id}','tipeproControl@edit');
    Route::post('/Tipepro/save','tipeproControl@save');
    Route::get('/Tipepro/delete{id}','tipeproControl@delete');

    //Intensitas Cahaya Proyektor
    
    Route::get('/intPro/add','intControl@add');
    Route::get('/intPro/edit{id}','intControl@edit');
    Route::post('/intPro/save','intControl@save');
    Route::get('/intPro/delete{id}','intControl@delete');

    //Jenis Proyektor
    
    Route::get('/Jpro/add','JenisControl@add');
    Route::get('/Jpro/edit{id}','JenisControl@edit');
    Route::post('/Jpro/save','JenisControl@save');
    Route::get('/Jpro/delete{id}','JenisControl@delete');
});

Route::group(['middleware'=>['isOperator']],function()
{

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/dashboard' , 'HomeController@index'); 
    
//Crud Hardisk
Route::get('/hardisk' , 'hddControl@index');
//os
Route::get('/os' , 'osControl@index');
//CRUD LAPTOP
Route::get('/laptop' , 'laptopControl@index');
Route::get('/laptop/search_cpu/{id}', 'laptopControl@search_cpu');
Route::POST('/laptop' , 'laptopControl@index');
//CRUD MERK
Route::get('/merk' , 'merkControl@index');
//CRUD RAM
Route::get('/ram' , 'ramControl@index');
//CRUD Procesor
Route::get('/procesor' , 'procesControl@index');
//CRUD VGA
Route::get('/vga' , 'vgaControl@index');

//proyektor
Route::get('/ktgpro','KtgproControl@index');
Route::get('/Merkpro','MerkproControl@index');
Route::get('/Tipepro','tipeproControl@index');
Route::get('/intPro','intControl@index');
Route::get('/Jpro','JenisControl@index');
Route::get('/proyektor', 'proyektorControl@index');
});

Route::group(['middleware'=>['Umum']],function()
{

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/dashboard' , 'HomeController@index'); 
    
//Crud Hardisk
Route::get('/hardisk' , 'hddControl@index');
//os
Route::get('/os' , 'osControl@index');
//CRUD LAPTOP
Route::get('/laptop' , 'laptopControl@index');
Route::get('/laptop/search_cpu/{id}', 'laptopControl@search_cpu');
Route::POST('/laptop' , 'laptopControl@index');

//CRUD MERK
Route::get('/merk' , 'merkControl@index');
//CRUD RAM
Route::get('/ram' , 'ramControl@index');
//CRUD Procesor
Route::get('/procesor' , 'procesControl@index');
//CRUD VGA
Route::get('/vga' , 'vgaControl@index');

//proyektor
Route::get('/ktgpro','KtgproControl@index');
Route::get('/Merkpro','MerkproControl@index');
Route::get('/Tipepro','tipeproControl@index');
Route::get('/intPro','intControl@index');
Route::get('/Jpro','JenisControl@index');

Route::get('/blog/harga','BlogControl@harga');

Route::get('/blog','BlogControl@harga');
});




//compare
Route::get('/compare','compareControl@index');
Route::post('/compare','compareControl@add');
Route::get('/compare/delete','compareControl@delete');
