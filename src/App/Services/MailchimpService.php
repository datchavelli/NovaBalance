<?php

declare(strict_types=1);

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpService
{
    private ApiClient $mailchimp;
    private string $listId;

    public function __construct()
    {
        $this->mailchimp = new ApiClient();
        $this->mailchimp->setConfig([
            'apiKey' => $_ENV['MAILCHIMP_API_KEY'],
            'server' => $_ENV['MAILCHIMP_SERVER_PREFIX']
        ]);

        $this->listId = $_ENV['MAILCHIMP_LIST_ID']; // Audience ID
    }

    public function addSubscriber(array $data)
    {
        try {
            return $this->mailchimp->lists->addListMember($this->listId, [
                'email_address' => $data['email'],
                'status' => 'subscribed', // or 'pending' for double opt-in
                'merge_fields' => [
                    'FNAME' => $data['name'],
                    'MERGE3' => $data['address'],
                    'PHONE' => $data['phone'],
                    'COMPANY' => $data['pib']
                ]
            ]);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
