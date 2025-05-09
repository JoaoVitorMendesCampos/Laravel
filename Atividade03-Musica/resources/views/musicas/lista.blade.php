
<x-layout>

    <x-slot:titulo>Musicas</x-slot:titulo>



    @session('success')

        {{ session('success') }}

    @endsession



    @if (count($musicas) > 0)

    <table border="1">

<thead>

    <tr>

        <th>ID</th>

        <th>Nome_Musica</th>

        <th>Autor</th>

        <th>Album</th>

        <th>Ano</th>

        <th>Descrição</th>

        <th>Ações</th>

    </tr>

</thead>

<tbody>

    @foreach ($musicas as $musica)

        <tr>

            <td>{{ $musica->id }}</td>

            <td>{{ $musica->nome_musica }}</td>

            <td>{{ $musica->autor }}</td>

            <td>{{ $musica->album }}</td>

            <td>{{ $musica->ano_publicacao }}</td>

            <td>{{ $musica->descricao }}</td>

            <td>

                <form action="/musicas/editar" method="post">

                    @csrf

                    <input type="hidden" name="id" value="{{ $musica->id }}">

                    <button type="submit">Editar</button>

                </form>

                <form action="/musicas/deletar" method="post">

                    @csrf

                    <input type="hidden" name="id" value="{{ $musica->id }}">

                    <button type="submit">Deletar</button>

                </form>

            </td>

        </tr>

    @endforeach

</tbody>

</table>

    @else

        <p>Nenhum Musica encontrado.</p>

    @endif

</x-layout>

