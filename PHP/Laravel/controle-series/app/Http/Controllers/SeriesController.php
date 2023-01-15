<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;


class SeriesController extends Controller
{
    public function index(Request $request){
    
        // $series = DB::select('select nome from series;');
        // $series = Serie::all();
        $series = Serie::query()->OrderBy('nome')->get();

        // dd($series);


        // $html = '<ul>';

        // foreach ($series as $serie) {
        //     $html .= "<li>$serie</li>";
        // }

        // $html .= '/ul';

        // return $html;

        //   return  $request->get('id');
        //   return  $request->method();
        //   return  $request->url();
        //   return response('', 302, ['Location'=>'https://google.com']);
        //   return redirect('https://google.com');
       
        // echo $request->get('nome');
        
        $mensagemDelete = $request->session()->get('mensagem.sucesso'); //session('mensagem.sucesso')
        // $request->session()->forget('mensagem.sucesso'); com o uso no flash no destroy, ela já é esquecida automaticamente
        $mensagemInserte = session('mensagem.inserte');


        return view('series.index', compact('series'))
        ->with('mensagemSucesso', $mensagemDelete)
        ->with('insertSucess', $mensagemInserte);
        // return view('listar-series',\compact('series'))->with('series', $series);
    }

    public function store(Request $request){
        // $nomeSerie = $request->input('nome');
        $nomeSerie = $request->nome;
        

        //     if (DB::insert('insert into series (nome) values (?)', [$nomeSerie])) {
        //         return redirect('/series');
        //    } else {
        //         return "NOT OK";
        //    }
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();
        Serie::create($request->all()); //atribuição em massa
        // Serie::create($request->only(['name_collumn'])); 
        // Serie::create($request->except(['name_collumn']));

        // $request->session()->flash('mensagem.inserte', 'Serie inserida');
        session(['mensagem.inserte'=>'Serie inserida']);

        

        // return redirect('/series');
        return to_route('series.index');

    }

    public function create(){
      
        return view('series.create');
    }

    public function destroy(Request $request){
        Serie::destroy($request->series);

        // $request->session()->put('mensagem.sucesso', 'Serie '.$request->series.' removida com sucesso');
        $request->session()->flash('mensagem.sucesso', 'Serie '.$request->series.' removida com sucesso');
        session(['key'=>'value']);

        return to_route('series.index');
    }
}
