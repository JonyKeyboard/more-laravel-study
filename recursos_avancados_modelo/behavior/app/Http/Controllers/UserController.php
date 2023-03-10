<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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
        $user = User::find($id);
        echo "<h1> Dados do usuário </h1><br>";
        echo "Nome do Usuário: {$user->name}<br>";
        echo "E-mail: {$user->email}<br>";

        $userAddress = $user->addressDelivery()->get()->first();

        if($userAddress){
            echo "<h1>Endereco de entrega</h1>";
            echo "Endereço: { $userAddress->address }, { $userAddress->number }<br>";
            echo "Complemento: { $userAddress->complement }, CEP: { $userAddress->zipcode }<br>";
            echo "Cidade/Estado: { $userAddress->city }/{ $userAddress->state }<br>";
        }

        // $address = new Address([
        //     'address' =>  'Rua do Lobos',
        //     'number' =>  '777',
        //     'complement' =>  'Casa 04',
        //     'zipcode' =>  '58400-640',
        //     'city' =>  'Campina Grande',
        //     'state' => 'CG'
        // ]);

        // $user->addressDelivery()->save($address);

        // $address = new Address();

        // $address->address = 'Rua dos Tonto';
        // $address->number = '222';
        // $address->complement = 'Apto 89';
        // $address->zipcode = '58400-640';
        // $address->city =  'Campina Grande';
        // $address->state = 'CG';

        // $user->addressDelivery()->save($address);

        // $users = User::with('addressDelivery')->get();
        // dd($users);

        $posts = $user->posts()->orderBy('id', 'DESC')->get();

        if($posts){
            echo "<h1>Artigos</h1>";

            foreach($posts as $post){
                echo "#$post->id Título: $post->title<br>";
                echo "Subtitulo: $post->subtitle<br>";
                echo "Conteúdo: $post->description<br>";
            }
        }

        // $comments = $user->commentsOnMyPost()->get();

        // if($comments){
        //     echo "<h1>Comentários nos meus Artigos</h1>";

        //     foreach ($comments as $comment){
        //         echo "Post: #$comment->post User: #$comment->user $comment->content<br>";
        //     }
        // }

        // $user->comments()->create([
        //     'content' => 'Testando Comments de User'
        // ]);

        $comments = $user->comments()->get();

        if($comments){
            echo "<h1>Comentários</h1><br>";

            foreach($comments as $comment){
                echo "Comentário: #$comment->id - $comment->content<br>";
            }
        }

        $students = User::students()->get();

        if ($students) {
            echo "<h1>Alunos</h1><br>";

            foreach($students as $student){
                echo "Nome do Usuário: {$user->name}<br>";
                echo "E-mail: {$user->email}<br>";
            }
        }

        $admins = User::admins()->get();

        if ($admins) {
            echo "<h1>Administradores</h1><br>";

            foreach($admins as $admin){
                echo "Nome do Usuário: {$admin->name}<br>";
                echo "E-mail: {$admin->email}<br>";
            }

        }

        $users = User::all();
        echo '<pre>';
        var_dump($users->makeVisible('created_at')->toArray());
        echo '-------------------------------------------------<br>';
        var_dump($users->makeHidden('created_at')->toJson(JSON_PRETTY_PRINT));
        echo '</pre>';

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
