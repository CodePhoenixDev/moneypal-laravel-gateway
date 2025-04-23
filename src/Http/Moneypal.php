<?php

namespace Moneypal\Gateway;

use Illuminate\Support\Facades\Http;

class Moneypal
{
    public function request($amount, $description)
    {
        $response = Http::asForm()->post('https://moneypal.ir/invoice/request', [
            'api_key' => config('moneypal.api_key'),
            'amount' => $amount,
            'callback_url' => config('moneypal.callback_url'),
            'description' => $description,
        ]);

        return $response->json();
    }

    public function getRedirectUrl($invoiceKey)
    {
        return "https://moneypal.ir/invoice/pay/{$invoiceKey}";
    }

    public function verify($invoiceKey)
    {
        $response = Http::asForm()->post("https://moneypal.ir/invoice/check/{$invoiceKey}", [
            'api_key' => config('moneypal.api_key'),
        ]);

        return $response->json();
    }
}
