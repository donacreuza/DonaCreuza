<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use GuzzleHttp\Client;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    public function receitas1(): View {
        return \view('receitas1');
    }

    public function receitas2(): View {
        return \view('receitas2');
    }

    public function receitas3(): View {
        return \view('receitas3');
    }

    public function receitas4(): View {
        return \view('receitas4');
    }

    public function welcome(): View {
        return \view('welcome');
    }

    public function login(): View {
        return \view('login');
    }

    public function index(Request $r): View
    {
        return view('login');
    }

    public function ingredientesAcao(Request $r): View
    {
        $client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers'=> [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY')
            ]
        ]);

        $response = $client->post('chat/completions', [
            'json' => [
                'model' => "gpt-3.5-turbo",
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => 
                            "Gere uma receita incrível sem adicionar mais nenhum item. ".
                            "SOMENTE com os seguintes ingredientes: " . $r->ingredientes . ". ".
                            "Importante: você não deve incluir ingredientes extras. ".
                            ''
                    ]
                ],

                'temperature' => 0.9,
                'max_tokens' => 500
            ]
        ]);

        if($response->getStatusCode() == 200){
            $data = json_decode($response->getBody(), true);
            $viewData['receita'] = $data['choices'][0]['message']['content'] ?? 'Sem resposta';
            $viewData['ingredientes'] = $r->ingredientes;
            return view('welcome', $viewData);
        }else{
            return view(['error' => 'Deu algum erro']);
        }
        

    }

}
