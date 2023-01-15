<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;
use App\Http\Requests\SeriesFormRequest;


class SeriesController extends Controller
{
    public function index(SeriesFormRequest $request){
    
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

    public function store(SeriesFormRequest $request){
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
        // Serie::create($request->only(['name_collumn'])); 
        // Serie::create($request->except(['name_collumn']));

       

        $s = Serie::create($request->all()); //atribuição em massa

         $request->session()->flash('mensagem.inserte', 'Serie inserida '. $s->nome);
        // session(['mensagem.inserte'=>'Serie inserida '. $s->nome]);


        // return redirect('/series');
        return to_route('series.index');

    }

    public function create(){
      
        return view('series.create')
        ->with('meth', 'POST')
        ->with('act', 'series.store');
    }

    public function destroy(SeriesFormRequest $request){
        $s = Serie::find($request->series);
        Serie::destroy($request->series);

        // $request->session()->put('mensagem.sucesso', 'Serie '.$request->series.' removida com sucesso');
        // $request->session()->flash('mensagem.sucesso', 'Serie '.$s->nome.' removida com sucesso');
        //session(['key'=>'value']);

        return to_route('series.index')->with('mensagem.sucesso', 'Serie '.$s->nome.' removida com sucesso');
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}
