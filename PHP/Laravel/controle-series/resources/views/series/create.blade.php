<x-layout title="create">
    
    <form action="/series/salvar" method="post">
        @csrf
        <label for="nome" >Nome</label>
        <input type="text" id="nome" name="nome">
        <button class="btn btn-primary">ok</button>
    </form>

</x-layout>