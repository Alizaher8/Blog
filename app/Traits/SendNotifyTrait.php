<?php

namespace App\Traits;

use App\Models\AdminNotify;
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;
use App\Models\PushSubscription;


trait SendNotifyTrait
{


    public function sendNotify($title, $body, $url=null)
    {

        $webPush = new WebPush([
            "VAPID" => [
                "publicKey" => "BHAlSEA8SRgdrtk7x5jSgNaRB-gOaF-5eDfss9qjlPyBjc8eElZPZR0RNsBIEqngFe6K9MZdMExhii4iF9WPc-k",
                "privateKey" => "cayIvnRHghW9sb39XzglvkeTcwrHQSuf1ySc_2AKqRs",
                "subject" => "http://127.0.0.1"
            ]
        ]);




        $subscriptions =  PushSubscription::select('data')->get()->toArray();

        foreach ($subscriptions as $subscription) {

            $result = $webPush->sendOneNotification(
                Subscription::create(json_decode($subscription['data'], true)),
                json_encode([
                    'title' => $title,
                    'body' => $body,
                    'url' => $url


                ])
            );
           AdminNotify::create([
               'data'=>  json_encode(['title' => $title,'body' => $body,'url' => $url])
           ]);
        }
    }
}
