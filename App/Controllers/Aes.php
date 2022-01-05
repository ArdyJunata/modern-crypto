<?php

namespace App\Controllers;

use \Core\View;
use PhpAes\Aes as a;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Aes extends \Core\Controller
{
    public $aes;
    /**
     * Show the index page
     *
     * @return void
     */

    public function encryptAction()
    {
        $plain = $_POST['plaintext'];
        $key = $_POST['key'];

        $this->aes = new a($key, 'ECB');

        $encrypted = $this->aes->encrypt($plain);

        echo(base64_encode($encrypted));

    }

    public function decryptAction()
    {
        $encrypted = base64_decode($_POST['encrypted']);
        $key = $_POST['key'];

        $this->aes = new a($key, 'ECB');

        $decrypted = $this->aes->decrypt($encrypted);

        echo($decrypted);

    }
}
