<?php

use Illuminate\Support\Facades\Route;

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

use App\models\Produto;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-produto', function(Resquest $resquest){
    //dd($request->all());

    Produto::create([
        'nome' => $request->nome,
        'valor' =>$request->valor,
        'estoque' => $request->estoque,
    ]);

    echo "Produto criado com sucesso!";
});