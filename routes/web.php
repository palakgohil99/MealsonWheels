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

Route::get('/examp', function () {
    return view('examp');
});

Route::get('/examp_menu', function () {
    return view('examp_menu');
});

Route::get('/examp_service', function () {
    return view('examp_service');
});
Route::get('/registration', function () {
    return view('registration');
});
// category
Route::get('/add_cat', function () {
    return view('add_cat');
});
Route::get('/show_cat', function () {
    return view('show_cat');
});

Route::get('/check_out', function () {
    return view('check_out');
});

Route::get('/order_confirmation', function () {
    return view('order_confirmation');
});

Route::get('/place_order', function () {
    return view('place_order');
});

//admin
Route::get('/admin_add', function () {
    return view('admin_add');
});
//deliveryboy
Route::get('/add_delboy', function () {
    return view('add_delboy');
});
//menu
Route::get('/add_item', function () {
    return view('add_item');
});
//feedback
Route::get('/add_feed', function () {
    return view('add_feed');
});
//payment type
Route::get('/add_pmt_type', function () {
    return view('add_pmt_type');
});

//order
Route::get('/add_order', function () {
    return view('add_order');
});

Route::post('save-data',"RootController@add")->name('saveData');
Route::get('disp_data','RootController@show');
Route::get('/delete/{Uid}','RootController@delete')->name('deletePost');
Route::get('/update/{Uid}','RootController@update')->name('updatePost');
Route::post('/save-updated-data','RootController@saveUpdated')->name('saveUpdatePost');

//category
Route::post('save-cat',"RootController@add_cat")->name('saveCat');
Route::get('/show_cat',"RootController@show_cat");
Route::get('/delete-cat/{cat_id}',"RootController@delete_cat")->name('deleteCat');
Route::get('/update-cat/{cat_id}',"RootController@update_cat")->name('updateCat');
Route::post('/save-updated-cat','RootController@saveUpdatedCat')->name('saveUpdateCat');

//admin
Route::post('save-add',"RootController@add_admin")->name('saveAdd');
Route::get('show_add','RootController@show_add');
Route::get('/delete-add/{a_id}',"RootController@delete_add")->name('deleteAdd');
Route::get('/update-add/{a_id}',"RootController@update_add")->name('updateAdd');
Route::post('/save-updated-Add','RootController@saveUpdatedAdd')->name('saveUpdateAdd');

//deliveryboy
Route::post('save-db',"RootController@add_db")->name('saveDB');
Route::get('/show_delboy','RootController@show_db');
Route::get('/delete-db/{del_boy_id}',"RootController@delete_db")->name('deleteDb');
Route::get('/update-db/{del_boy_id}',"RootController@update_db")->name('updateDb');
Route::post('/save-updated-db',"RootController@saveUpdatedDB")->name('saveUpdateDb');

//menu
Route::post('save-item',"RootController@item_add")->name('saveItem');
Route::get('/show_item',"RootController@item_show");
Route::get('/delete-item/{item_id}',"RootController@delete_item")->name('deleteItem');
Route::get('/update-item/{item_id}',"RootController@update_item")->name('updateItem');
Route::post('/save-updated-item',"RootController@saveUpdatedItem")->name('saveUpdateItem');

//feedback
Route::post('save-feed',"RootController@feed_add")->name('saveFeed');
Route::get('/show_feed',"RootController@feed_show");
Route::get('/delte-feed/{feed_id}',"RootController@delete_feed")->name('deleteFeed');
Route::get('/update-feed/{feed_id}',"RootController@update_feed")->name('updateFeed');
Route::post('/save-updated-feed',"RootController@saveUpdatedFeed")->name('saveUpdateFeed');

//payment type
Route::post('save-ptype',"RootController@add_pType")->name('savePtype');
Route::get('/show_ptype',"RootController@ptype_show");
Route::get('/delete-ptype/{p_t_id}',"RootController@delete_ptype")->name('deletePtype');
Route::get('/update-ptype/{p_t_id}',"RootController@update_ptype")->name('updatePtype');
Route::post('/save-updated-ptype',"RootController@saveUpdatedPtype")->name('saveUpdatePtype');

//order
Route::post('save-order',"RootController@add_order")->name('saveOrder');
Route::get('/show_order',"RootController@order_show");
Route::get('/delete-order/{order_id}',"RootController@delete_order")->name('deleteOrder');
Route::get('/update-order/{order_id}',"RootController@update_order")->name('updateOrder');
Route::post('/save-updated-order',"RootController@saveUpdatedOrder")->name('saveUpdateOrder');

//order details
Route::get('/add_odetail', function () {
    return view('add_odetail');
});
Route::post('save-odetail',"RootController@add_odetail")->name('saveOdetail');
Route::get('/show_odetail',"RootController@odetail_show");
Route::get('/delete-odetail/{o_d_id}',"RootController@delete_odetail")->name('deleteOdetail');
Route::get('/update-odetail/{o_d_id}',"RootController@update_odetail")->name('update_Odetail');
Route::post('/save-updated-odetail',"RootController@saveUpdatedOdetail")->name('saveUpdateOdetail');

//invoice
Route::get('/add_inv', function () {
    return view('add_inv');
});
Route::post('save-inv',"RootController@inv_add")->name('saveInv');
Route::get('/show_inv',"RootController@inv_show");
Route::get('/delete-inv/{inv_no}',"RootController@delete_inv")->name('deleteInv');
Route::get('/update-inv/{inv_no}',"RootController@update_inv")->name('updateInv');
Route::post('/save-updated-inv',"RootController@saveUpdatedInv")->name('saveUpdateInv');

Route::post('/check-out',"RootController@checkout")->name('saveCheck');
Route::post('/add-order',"RootController@o_place")->name('oPlace');
Route::post('/o-confirm',"RootController@o_confirm")->name('oConfirm');