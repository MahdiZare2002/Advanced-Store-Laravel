<?php

namespace App\Http\Services\Payment;

use Zarinpal\Zarinpal;
use Zarinpal\Clients\GuzzleClient;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Client\RequestException;


class PaymentService
{
    public function zarinpal($amount, $order, $onlinePayment)
    {
        $merchentID = Config::get('payment.zarinpal_api_key');
        $sandbox = false;
        $zarinpalGate = false;
        $client = new GuzzleClient($sandbox);
        $zarinpalGatePSP = '';
        $lang = 'fa';
        $zarinpal = new Zarinpal($merchentID, $client, $lang, $sandbox, $zarinpalGate, $zarinpalGatePSP);
        $payment = [
            'callback_url' => route('customer.sales-process.payment-call-back', [$order, $onlinePayment]),
            'amount' => (int)$amount * 10,
            'description' => 'the order',
        ];
        try {
            $response = $zarinpal->request($payment);
            $code = $response['data']['code'];
            $message = $zarinpal->getCodeMessage($code);
            if ($code === 100) {
                $onlinePayment->update(['bank_first_response' => ($response)]);
                $authority = $response['data']['authority'];
                return $zarinpal->redirect($authority);
            }
        } catch (RequestException $exception) {

            return false;
        }
    }
}
