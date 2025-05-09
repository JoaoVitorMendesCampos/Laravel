<x-layout>

    <x-slot:titulo>Novo musica</x-slot:titulo>

    

<form method="POST" action="/musicas/{{ isset($musica) ? 'atualizar' : 'armazenar' }}">

@csrf

<input type="hidden" name="id" value="{{ $musica->id ?? ''}}">

<div>

    <label for="nome_musica">Nome_Musica:</label><br>

    <input type="text" id="nome_musica" name="nome_musica" value="{{ $musica->nome_musica ?? '' }}" required>

</div>

<div>

    <label for="autor">Autor:</label><br>

    <input type="text" id="autor" name="autor" value="{{ $musica->autor ?? '' }}" required>

</div>

<div>

    <label for="album">Album:</label><br>

    <input type="number" id="album" name="album" value="{{ $musica->album ?? '' }}"

        required>

</div>

<div>

    <label for="ano_publicacao">Ano de publicação:</label><br>

    <input type="number" id="ano_publicacao" name="ano_publicacao" value="{{ $musica->ano_publicacao ?? '' }}"

        required>

</div>

<div>

    <label for="descricao">Descrição:</label><br>

    <textarea id="descricao" name="descricao" required>{{ $musica->descricao ?? '' }}</textarea>

</div>

<button type="submit">Criar</button>

</form>

</x-layout>