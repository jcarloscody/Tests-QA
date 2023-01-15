<x-layout title="Series">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Criar Series</a>
   {{-- <?php// foreach ($series as $value):?>
    <li><?= // $value;?></li>
    <?php// endforeach;?> --}}

    @isset($mensagemSucesso)
    <div class="alert alert-sucess">
        {{$mensagemSucesso}}
    </div>
    @endisset

    @isset($insertSucess)
    <div class="alert alert-sucess">
        {{$insertSucess}}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $value)
            <li class="list-group-item d-flex justify-content-between align-items-center"> {{$value->nome}}
              
                <form action="{{route('series.destroy', $value->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">apagar</button>
                </form>
            </li>
            
        @endforeach
    </ul>
    @{{ignorado}}

    <script>
        const ser = {{Js::from($series)}};
    </script>
</x-layout>