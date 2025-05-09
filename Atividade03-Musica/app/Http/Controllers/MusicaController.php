<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Musica; 

class MusicaController extends Controller
{
    public function exibirmusicas()

    {

        $musicas = Musica::all();

        return view('musicas.lista', compact('musicas'));

    }

    public function criarMusica()

    {

        return view('musicas.form');

    }

    public function armazenarMusica(Request $request)

    {

        Musica::create(

            [

                'nome_musica' => $request->input('nome_musica'),

                'autor' => $request->input('autor'),

                'album'=> $request->input('album'),

                'ano_publicacao' => $request->input('ano_publicacao'),

                'descricao' => $request->input('descricao')

            ]

        );

        return redirect('/musicas')->with('success', 'Musica criado com sucesso!');

    }

    public function editarMusica(Request $request)

    {

        $id = $request->input('id');

        $Musica = Musica::findOrFail($id);

        return view('musicas.form', ['musica' => $Musica]);

    }



    public function atualizarMusica(Request $request)

    {

        $id = $request->input('id');

        $Musica = Musica::findOrFail($id);

        $Musica->update(

            [

                'titulo' => $request->input('titulo'),

                'autor' => $request->input('autor'),

                'album'=> $request->input('album'),

                'ano_publicacao' => $request->input('ano_publicacao'),

                'descricao' => $request->input('descricao')

            ]

        );

        return redirect('/musicas')->with('success', 'Musica atualizado com sucesso!');

    }



    public function deletarMusica(Request $request)

    {

        $id = $request->input('id');

        $Musica = Musica::findOrFail($id);

        $Musica->delete();

        return redirect('/musicas')->with('success', 'Musica deletado com sucesso!');

    }
}
