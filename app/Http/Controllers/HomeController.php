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
            'base_uri' => 'https://models.arcee.ai/v1/',
            'headers'=> [
                
                'Authorization' => 'Bearer ' . env('ARCEE_API_KEY'),
                'Content-Type' => 'application/json'
            ]
        ]);

        $response = $client->post('chat/completions', [
            'json' => [
                'model' => "auto",
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => 
                            "Gere uma receita incrível sem adicionar mais nenhum item. E no modo de preparo seja o mais breve".
                            "SOMENTE com os seguintes ingredientes: " . $r->ingredientes . ". ".
                            "Importante: você não deve incluir ingredientes extras e faça isso de forma curta e a resposta deve ser em Pt-Br ".
                            ''
                    ]
                ],

                'temperature' => 0.2,
                'max_tokens' => 250
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
