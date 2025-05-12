<?php

namespace Pusher;

use Pusher\Pusher as PusherClient; 

class PusherInstance
{
    private static $instance = null;
    private static $app_id = '1990392';
    private static $secret = '690a0689023958211929';
    private static $api_key = '6d7d51c13b5451452dd9';
    private static $cluster = 'eu';

    /**
     * Get the Pusher singleton instance.
     *
     * @return PusherClient
     * @throws \Pusher\PusherException
     */
    public static function get_pusher()
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        self::$instance = new PusherClient(
            self::$api_key,
            self::$secret,
            self::$app_id,
            [
                'cluster' => self::$cluster,
                'useTLS' => true
            ]
        );

        return self::$instance;
    }
}
