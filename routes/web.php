<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('layouts.app');
});

Route::post('/consultores', function (Request $request)
{
    $meses = [
        'Fev' => 'Feb',
        'Mar' => 'Mar',
        'Abr' => 'Apr',
        'Mai' => 'May',
        'Jun' => 'Jun',
        'Jul' => 'Jul',
        'Ago' => 'Aug',
        'Set' => 'Sep',
        'Out' => 'Oct',
        'Nov' => 'Nov',
        'Dez' => 'Dec'
    ];

    $date_inicio = date('Y-m-d', strtotime($meses[$request->inicio['mes']] . ' ' . $request->inicio['ano']));
    $date_final = date('Y-m-d', strtotime($meses[$request->final['mes']] . ' ' . $request->final['ano']));

    $sql = "SELECT
        cli.co_usuario,
        JSON_ARRAYAGG(
            JSON_OBJECT(
                'data_emissao', fat.data_emissao,
                'valor_fatura', fat.valor,
                'imposto', fat.total_imp_inc,
                'comissao', fat.comissao_cn,
                'renda_liquida', fat.valor - (fat.total_imp_inc / 100) * fat.valor,
                'custo_fixo', sal.brut_salario,
                'comissao', fat.comissao_cn / 100 * (fat.valor - (fat.total_imp_inc / 100 * fat.valor)),
                'lucro', fat.valor - (fat.total_imp_inc / 100) * fat.valor - sal.brut_salario - ((fat.comissao_cn / 100) * (fat.valor - (fat.total_imp_inc / 100 * fat.valor)))
            )
        ) as operacoes
    FROM
        cao_fatura fat
            INNER JOIN
        cao_os os ON fat.co_os = os.co_os
            INNER JOIN
        cao_usuario cli ON cli.co_usuario = os.co_usuario
            INNER JOIN
        cao_salario sal ON sal.co_usuario = cli.co_usuario
    WHERE
        fat.data_emissao BETWEEN DATE('$date_inicio') AND DATE('$date_final')
    GROUP BY cli.co_usuario";

    $result = DB::select(DB::raw($sql));

    return response()->json($result);
})->name('consultores');

// Route::get('/listarConsultor', function () {
//     return view('pages/listar_consultores');
// })->name('listarConsultor');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
