<?php

require_once('config/sample_config.php');

use Craftgate\Model\Currency;
use Craftgate\Model\PaymentGroup;

$request = array(
    'price' => 100,
    'paidPrice' => 100,
    'walletPrice' => 0,
    'installment' => 1,
    'currency' => Currency::TL,
    'paymentGroup' => PaymentGroup::PRODUCT,
    'conversationId' => '456d1297-908e-4bd6-a13b-4be31a6e47d5',
    'callbackUrl' => 'https://www.your-website.com/craftgate-3DSecure-callback',
    'card' => array(
        'cardHolderName' => 'Haluk Demir',
        'cardNumber' => '5258640000000001',
        'expireYear' => '2044',
        'expireMonth' => '07',
        'cvc' => '000'
    ),
    'items' => array(
        array(
            'externalId' => uniqid(),
            'name' => 'Item 1',
            'price' => 30,
            'subMerchantMemberId' => 1,
            'subMerchantMemberPrice' => 27
        ),
        array(
            'externalId' => uniqid(),
            'name' => 'Item 2',
            'price' => 50,
            'subMerchantMemberId' => 2,
            'subMerchantMemberPrice' => 42
        ),
        array(
            'externalId' => uniqid(),
            'name' => 'Item 3',
            'price' => 20,
            'subMerchantMemberId' => 3,
            'subMerchantMemberPrice' => 18
        )
    )
);

$response = FunctionalTestConfig::craftgate()->payment()->init3DSPayment($request);

print_r($response);