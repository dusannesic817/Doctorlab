<?php

namespace App\Core;

use Pusher\Pusher as PusherClient;

class Pusher
{
    private PusherClient $pusher;

    public function __construct()
    {
        $config = $this->getConfig();

        $this->pusher = new PusherClient(
            $config['key'],
            $config['secret'],
            $config['app_id'],
            [
                'cluster' => $config['cluster'],
                'useTLS' => $config['useTLS']
            ]
        );
    }

    private function getConfig(): array
    {
        return [
            'app_id' => '1990392',
            'key' => '6d7d51c13b5451452dd9',
            'secret' => '690a0689023958211929',
            'cluster' => 'eu',
            'useTLS' => true
        ];
    }

    public function trigger(string $channel, string $event, array $data): void
    {
        $this->pusher->trigger($channel, $event, $data);
    }
}
