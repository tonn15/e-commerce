<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaimentsController extends BaseController
{
    public function stripe()
    {
        session_start();
        foreach ($_SESSION['pannier'] as $key => $pannier) {
            ($pannier['prix_pro'] > 0) ? $prix = $pannier['prix_pro'] : $prix = $pannier['prix'];
            $products_for_stripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $prix*100,
                    'product_data' => [
                        'name' => $pannier['titre'],
                        'images' => [
                            base_url() . '/images/' . $pannier['image']
                        ],
                    ]
                ],
                'quantity' => 1,
            ];
        }
        // This is your test secret API key.
        Stripe::setApiKey(getenv('stripe.secret'));

        $YOUR_DOMAIN = 'http://localhost:8080';

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                $products_for_stripe
            ],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/success',
            'cancel_url' => $YOUR_DOMAIN . '/cancel',
        ]); 
        header("HTTP/1.1 303 See Other");
        return redirect()->to($checkout_session->url);
    }
}
