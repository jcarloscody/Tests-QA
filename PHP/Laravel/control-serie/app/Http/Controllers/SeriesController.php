<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // return response('', 302, ['Location'=>'https://google.com']);
        //   return redirect('https://google.com');

        echo $request->get('nome');

        return view('series.index',\compact('series'));
        // return view('listar-series',\compact('series'))->with('series', $series);
    }

    public function store(Request $request){
        $nomeSerie = $request->input('nome');


    //     if (DB::insert('insert into series (nome) values (?)', [$nomeSerie])) {
    //         return redirect('/series');
    //    } else {
    //         return "NOT OK";
    //    }
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect('/series');

    }

    public function create(){
        return view('series.create');
    }
}
