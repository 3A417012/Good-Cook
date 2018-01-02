<?php
return [

    /**
     * Set Imgur application client_id and secret key.
     */

    'client_id' => env('IMGUR_CLIENT_ID'),

    'client_secret' => env('IMGUR_CLIENT_SECRET', null),
//    IMGUR_CLIENT_ID = d553166e71f376b
//    IMGUR_CLIENT_SECRET = 58f30bac407cee616910e44df7132d74d335c574
// debug curl.cainfo  https://laracasts.com/discuss/channels/general-discussion/curl-error-60-ssl-certificate-problem-unable-to-get-local-issuer-certificate/replies/37017
];