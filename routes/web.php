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

-> Registra as rotas no estilo tradicional web (processa pág no backend e serve no frontend), permitindo cookies e sessão
|
*/


/* ROTAS DA APLICAÇÃO */

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
//nome, categoria, assunto, mensagem

Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::get('/clientes', function(){ return 'Clientes'; })->name('site.clientes');

Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('site.fornecedores');

Route::get('/produtos', function(){ return 'Produtos'; })->name('site.produtos');








////////////////////////////////////////////////////////////
/* REDIRECIONAMENTO DE ROTAS */

/* Route::get('/rota1', function(){ 
    echo 'Rota 1';
})->name('site.rota1'); */

// Redireciona da rota2 pra rota1 no contexto da função de callback ou controlador...
/* Route::get('/rota2', function(){ 
    return redirect()->route('site.rota1');
})->name('site.rota2'); */

/* 
// ...ou, redireciona da rota2 pra rota1 pela função redirect
Route::redirect('/rota2', '/rota1');
 */

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

////////////////////////////////////////////////////////////
// ROTA DE FALLBACK (CONTINGÊNCIA) - direciona para página tratada quando a rota não existir

Route::fallback( function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para página inicial';
});




////////////////////////////////////////////////////////////

/* 
// colocando ? ao lado do parâmetro na rota, indica ser opcional. De ser definido valor padrão como na $mensagem 
Route::get(
    '/contato/{nome}/{categoria}/{assunto}/{mensagem?}', 
    function (
        string $nome, 
        string $categoria, 
        string $assunto, 
        string $mensagem = 'msg não informada'
        ) {
            echo "Olá: ".$nome." - ".$categoria." - ".$assunto." - ".$mensagem;
});

//Tratando parâmetros com expressões regulares
Route::get(
    '/contato/{nome}/{categoria_id}/', 
    function (
        string $nome = 'Desconhecido', 
        int $categoria_id = 1                       //informação
        ) {
            echo "Olá: $nome - $categoria_id";
        }
)->where('categoria_id', '[0-9]+')->where('nome', '[a-zA-Z]+'); //trata o erro caso não receba o tipo estabelecido
 */

