<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        echo "#$post->id Título: $post->title<br>";
        echo "Subtitulo: $post->subtitle<br>";
        echo "Conteúdo: $post->description<br>";
        echo "Data de criação: $post->createdFmt<br><hr>";

        // $post->title = 'Teste de título do artigo!';
        // $post->save();


        $postAuthor = $post->author()->first();

        if($postAuthor){
            echo "<h1>Dados do Usuário</h1><br>";
            echo "Nome do usuário: $postAuthor->name<br>";
            echo "E-mail: $postAuthor->email<br>";
        }

        $postCategories = $post->categories()->get();

        if($postCategories){
            echo "<h1>Categorias</h1><br>";

            foreach($postCategories as $category){
                echo "Categoria: #$category->id - $category->name<br>";
            }
        }

        //$post->categories()->attach([4]);
        //$post->categories()->detach([2,4]);

        //$post->categories()->sync([5, 10]);
        //$post->categories()->syncWithoutDetaching([5, 10, 8]);

        // $post->comments()->create([
        //     'content' => 'Testando Comments'
        // ]);

        $comments = $post->comments()->get();

        if($comments){
            echo "<h1>Comentários</h1><br>";

            foreach($comments as $comment){
                echo "Comentário: #$comment->id - $comment->content<br>";
            }
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
