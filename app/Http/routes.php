<?php

use Illuminate\Support\Facades\DB;
use App\Researcher;
use App\Paper;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $papers = Paper::orderBy('id', 'asc')->get();
    
    return view('welcome',  [
        'papers' => $papers
    ]);
});


/*
|--------------------------------------------------------------------------
| Sobre Nós
|--------------------------------------------------------------------------
*/
Route::get('/sobrenos', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('AboutUs.sobrenos',  [
        'papers' => $papers
    ]);
});

Route::get('/sobrenos/missao', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('AboutUs.missao',  [
        'papers' => $papers
    ]);
});

Route::get('/sobrenos/visao', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('AboutUs.visao', [
    'papers' => $papers
    ]);
});

Route::get('/sobrenos/estrategia', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('AboutUs.estrategia', [
        'papers' => $papers
    ]);
});



/*
|--------------------------------------------------------------------------
| Linhas de Pesquisa
|--------------------------------------------------------------------------
*/
Route::get('/linhasdepesquisa', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.linhasdepesquisa', [
        'papers' => $papers
    ]);
});
    Route::get('/linhasdepesquisa/TNS', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.TNS', [
            'papers' => $papers
        ]);
    });
    
    Route::get('/linhasdepesquisa/rTMS', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.rTMS', [
            'papers' => $papers
        ]);
    });
    
    Route::get('/linhasdepesquisa/TDCS', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.TDCS', [
            'papers' => $papers
        ]);
    });
    
    Route::get('/linhasdepesquisa/Neurofeedback', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.Neurofeedback', [
            'papers' => $papers
        ]);
    });
    
    Route::get('/linhasdepesquisa/RemediacaoCognitiva', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.RemediacaoCognitiva', [
            'papers' => $papers
        ]);
    });

    Route::get('/linhasdepesquisa/QEEG', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.QEEG', [
            'papers' => $papers
        ]);
    });

    Route::get('/linhasdepesquisa/EyeTracking', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.EyeTracking', [
            'papers' => $papers
        ]);
    });

    
    Route::get('/linhasdepesquisa/FMRI', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.FMRI', [
            'papers' => $papers
        ]);
    });
    
    
    Route::get('/linhasdepesquisa/Genetica', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.Genetica', [
            'papers' => $papers
        ]);
    });
    
    
    Route::get('/linhasdepesquisa/Eletrofisiologia', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.Eletrofisiologia', [
            'papers' => $papers
        ]);
    });


/*
|--------------------------------------------------------------------------
| Pessoas
|--------------------------------------------------------------------------
*/
Route::get('/pessoas', function(){

    $researchers = Researcher::orderBy('name','asc')->get();

    return view('People.pessoas', [
        'researchers' => $researchers
    ]);
});

Route::post('/pessoas/pesquisar/', function( Request $request){
    $researchers = Researcher::where( 'name', 'like', '%'.$request->searchbar.'$')->orWhere('bio','like',  '%'.$request->searchbar.'$')->get();

    return view('People.pessoas', [
        'researchers' => $researchers
    ]);
});

/*
|--------------------------------------------------------------------------
| Produções
|--------------------------------------------------------------------------
*/
Route::get('/producoes', function(){
    $papers = Paper::orderBy('name', 'asc')->get();
    
    return view('Productions.producoes', [
        'papers' => $papers
    ]);
});

Route::post('/producoes/pesquisar', function( Request $request){
    $searchbar = $request->searchbar;
    $papers = DB::table('papers')->where( 'name', 'like','%'.$searchbar.'$')
        ->orWhere('fields','like','%'.$searchbar.'$')
        ->orWhere('summary','like','%'.$searchbar.'$')
        ->orWhere('authors','like','%'.$searchbar.'$')
        ->get();

    return $papers;
//    return view('Productions.producoes', [
//        'papers' => $papers
//    ]);
});


