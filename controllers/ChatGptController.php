<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Services\GptService;
use Pusher\PusherInstance;

class ChatGptController extends Controller{


    public function index(){
        $prompt = filter_input(INPUT_POST, "prompt");
        $userPrompt = trim($prompt ?? '');

        if (!empty($userPrompt)) {
            $gptService = new GptService();
            $gptResponse = $gptService->askGpt($userPrompt);

            if (!empty($gptResponse)) {
                $pusher = PusherInstance::get_pusher();
                $pusher->trigger('my-channel', 'gpt', ['message' => $gptResponse]);

            }

        
        }
        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);

    }
}

