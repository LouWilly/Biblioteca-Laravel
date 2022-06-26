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

use App\Models\Produto;
use Illuminate\Http\Request;

Route::get('/', function () {
    echo "<script>document.location = '/listar'</script>";
});

Route::get('/listar', function () {
    $produto = Produto::get();
    return view('listar', ['produto' => $produto]);
});

Route::get('/cadastrar', function(){
    return view('cadastrar');
});

Route::get('/editar/{id}', function($id){
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

Route::post('/cadastrar-produto', function(Request $request) {
    if($request->nome == '' || $request->valor == '' || $request->estoque == ''){
        echo "<script>alert('Campo Vazio!')</script>";
        echo "<script>document.location = '/cadastrar'</script>";
    }
    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);
    echo "<script>alert('Produto \"$request->nome\" cadastrado!')</script>";
    echo "<script>document.location = '/listar'</script>";

});

Route::post('/editar-produto/{id}', function(Request $request, $id){
    if($request->nome == '' || $request->valor == '' || $request->estoque == ''){
        echo "<script>alert('Produto sem Nome!')</script>";
        echo "<script>document.location = '/cadastrar'</script>";
    }
    $produto = Produto::find($id);
    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);
    echo "<script>alert('Produto $produto->nome editado!')</script>";
    echo "<script>document.location = '/listar'</script>";
});

Route::get('/deletar-produto/{id}', function($id){
    $produto = Produto::find($id);
    $produto->delete();
    echo "<script>alert('Produto $produto->nome deletado!')</script>";
    echo "<script>document.location = '/listar'</script>";
});