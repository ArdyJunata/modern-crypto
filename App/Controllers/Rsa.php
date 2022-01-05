<?php

namespace App\Controllers;

use \Core\View;
use \Pikirasa\RSA as r;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Rsa extends \Core\Controller
{
    public $rsa;
    /**
     * Show the index page
     *
     * @return void
     */
    public function generateKeyAction()
    {
        $this->rsa = new r(null, null);
        $this->rsa->create();

        $data = [
            "public_key" => $this->rsa->getPublicKeyFile(),
            "private_key" => $this->rsa->getPrivateKeyFile()
        ];

        echo json_encode($data);
    }

    public function encryptAction()
    {
        $plain = $_POST['plaintext'];
        $key = $_POST['key'];

        $this->rsa = new r($key, null);

        $encrypted = $this->rsa->base64Encrypt($plain);

        echo($encrypted);

    }

    public function decryptAction()
    {
        $encrypted = $_POST['encrypted'];
        $key = $_POST['key'];

        $this->rsa = new r(null, $key);

        $decrypted = $this->rsa->base64Decrypt($encrypted);

        echo($decrypted);

    }
}
