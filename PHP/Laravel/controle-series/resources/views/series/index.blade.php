<x-layout title="Series">
    <a href="/series/criar" class="btn btn-dark mb-2">Criar Series</a>
   {{-- <?php// foreach ($series as $value):?>
    <li><?= // $value;?></li>
    <?php// endforeach;?> --}}

    <ul class="list-group">
        @foreach ($series as $value)
            <li class="list-group-item"> {{$value->nome}}</li>
        @endforeach
    </ul>
    @{{ignorado}}

    <script>
        const ser = {{Js::from($series)}};
    </script>
</x-layout>