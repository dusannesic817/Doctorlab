<?php
namespace App\Services;

use GuzzleHttp\Client;


class GptService
{
    private $client;
    private $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = \Configruation::GPT_API_KEY;
    }

   public function askGpt($prompt){
    $response = $this->client->post('https://api.openai.com/v1/chat/completions', [
        'headers' => [
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type'  => 'application/json',
        ],
        'json' => [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Ti si stručni doktor imas poliklinuku. Daješ kratke, korisne i praktične savete korisnicima koji imaju zdravstvene tegobe. 
                                  Upozori ih kada je važno otići kod pravog lekara, dajes im savete sta mogu koristiti da bi smanjili tegobe. 
                                  Savetujes ih po simptomima kog doktora bi trebali posetiti da bi resili svoj problem.'
                ],
                [
                    'role' => 'user',
                    'content' => $prompt
                ],
                 'temperature' => 0.7,
            ],
        ]
    ]);

    $body = json_decode($response->getBody(), true);
    return $body['choices'][0]['message']['content'] ?? '';
}


      
}
