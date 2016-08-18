<?php
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

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Sobre Nós
|--------------------------------------------------------------------------
*/
Route::get('/sobrenos', function(){
    return view('AboutUs.sobrenos');
});

Route::get('/sobrenos/missao', function(){
    return view('AboutUs.missao');
});

Route::get('/sobrenos/visao', function(){
    return view('AboutUs.visao');
});

Route::get('/sobrenos/estrategia', function(){
    return view('AboutUs.estrategia');
});



/*
|--------------------------------------------------------------------------
| Linhas de Pesquisa
|--------------------------------------------------------------------------
*/
Route::get('/linhasdepesquisa', function(){
    return view('Fields.linhasdepesquisa');
});
    Route::get('/linhasdepesquisa/TNS', function(){
        return view('Fields.LinhasDePesquisa.TNS');
    });
    
    Route::get('/linhasdepesquisa/rTMS', function(){
        return view('Fields.LinhasDePesquisa.rTMS');
    });
    
    Route::get('/linhasdepesquisa/TDCS', function(){
        return view('Fields.LinhasDePesquisa.TDCS');
    });
    
    Route::get('/linhasdepesquisa/Neurofeedback', function(){
        return view('Fields.LinhasDePesquisa.Neurofeedback');
    });
    
    Route::get('/linhasdepesquisa/RemediacaoCognitiva', function(){
        return view('Fields.LinhasDePesquisa.RemediacaoCognitiva');
    });

    Route::get('/linhasdepesquisa/QEEG', function(){
        return view('Fields.LinhasDePesquisa.QEEG');
    });

    Route::get('/linhasdepesquisa/EyeTracking', function(){
        return view('Fields.LinhasDePesquisa.EyeTracking');
    });

    
    Route::get('/linhasdepesquisa/FMRI', function(){
        return view('Fields.LinhasDePesquisa.FMRI');
    });
    
    
    Route::get('/linhasdepesquisa/Genetica', function(){
        return view('Fields.LinhasDePesquisa.Genetica');
    });
    
    
    Route::get('/linhasdepesquisa/Eletrofisiologia', function(){
        return view('Fields.LinhasDePesquisa.Eletrofisiologia');
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

/*
|--------------------------------------------------------------------------
| Produções
|--------------------------------------------------------------------------
*/
Route::get('/producoes', function(){
    $papers = Paper::orderBy('timestamps', 'asc')->get();
    return view('Productions.producoes', [
        'papers' => $papers
    ]);
});
