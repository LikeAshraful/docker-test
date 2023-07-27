<?php

namespace App\Services;

use Google\Client;
use PlainContentEncoder;
use Google\Service\Gmail;
use Google\Service\Gmail\Message;

class GmailService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
        // $this->client->setAuthConfig(storage_path('credentials.json'));
        // $this->client->addScope(Gmail::GMAIL_SEND);
        $this->client->setAccessToken($this->getAccessToken());
    }

    public function sendEmailUsingGmailAPI($to, $subject, $messageBody)
    {
        $service = new Gmail($this->client);
        $message = new Message();
        $rawMessage = "From: maipalash35@gmail.com\r\n";
        $rawMessage .= "To: $to\r\n";
        $rawMessage .= "Subject: $subject\r\n";
        $rawMessage .= "Content-Type: text/html; charset=UTF-8\r\n";
        $rawMessage .= "\r\n" . $messageBody;
        $message->setRaw(base64_encode($rawMessage));
        $service->users_messages->send('me', $message);
    }

    private function getAccessToken()
    {
        $this->client->setAuthConfig(storage_path('gigalogy-service-account.json'));
        $this->client->setScopes(Gmail::GMAIL_SEND);
        $accessToken = $this->client->fetchAccessTokenWithAssertion();
        $access_token = $accessToken['access_token'];
        return $access_token;
    }
}
