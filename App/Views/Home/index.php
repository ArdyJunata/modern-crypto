<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>RSA</title>
</head>

<body>
    <div class="container mb-5">
        <div class="row my-4 justify-content-center">
            <div class="col-12 text-center">
                <h3>Modern Cryptography</h3>
            </div>
            <div class="col-5">
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-5">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" id="aes" class="btn btn-primary text-white" disabled>Symmetry (AES)</button>
                    <button type="button" id="rsa" class="btn btn-primary text-white">Asymmetry (RSA)</button>
                </div>
            </div>
            <div class="col-5">
            </div>
        </div>
        <section id="aes-section">

            <div class="row justify-content-center mt-5">
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>AES Encryption</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="aes-en-plaintext" class="form-label">Enter Plain Text</label>
                            <textarea class="form-control" placeholder="enter plain text" id="aes-en-plaintext"
                                rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="aes-en-key" class="form-label">Enter Key</label>
                            <textarea class="form-control" placeholder="enter key" id="aes-en-key" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <button onclick="aesEncrypt()" class="btn btn-primary">Encrypt</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="aes-en-result" class="form-label">Encrypted Output (Base64):</label>
                            <textarea class="form-control" placeholder="result here" id="aes-en-result"
                                rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>AES Decryption</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="aes-de-encrypted" class="form-label">Enter Encrypted Text (Base64)</label>
                            <textarea class="form-control" placeholder="enter ecrypted text (base64)"
                                id="aes-de-encrypted" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="aes-de-key" class="form-label">Enter Key</label>
                            <textarea class="form-control" placeholder="enter key" id="aes-de-key" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <button onclick="aesDecrypt()" class="btn btn-primary btn-block">Decrypt</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="aes-de-result" class="form-label">Decrypted Output:</label>
                            <textarea class="form-control" placeholder="result here" id="aes-de-result"
                                rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="rsa-section">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>Public Key</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control" placeholder="the key will appear here" id="gen-public-key"
                                rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>Private Key</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control" placeholder="the key will appear here" id="gen-private-key"
                                rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-auto">
                    <button onclick="generateKey()" class="btn btn-success">Generate Key</button>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>RSA Encryption</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="gen-public-key" class="form-label">Enter Plain Text</label>
                            <textarea class="form-control" placeholder="enter plain text" id="en-plaintext"
                                rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="gen-public-key" class="form-label">Enter Public Key</label>
                            <textarea class="form-control" placeholder="enter public key" id="en-key"
                                rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <button onclick="encrypt()" class="btn btn-primary">Encrypt</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="gen-public-key" class="form-label">Encrypted Output (Base64):</label>
                            <textarea class="form-control" placeholder="result here" id="en-result" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>RSA Decryption</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="gen-public-key" class="form-label">Enter Encrypted Text (Base64)</label>
                            <textarea class="form-control" placeholder="enter ecrypted text (base64)" id="de-encrypted"
                                rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="gen-public-key" class="form-label">Enter Private Key</label>
                            <textarea class="form-control" placeholder="enter private key" id="de-key"
                                rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <button onclick="decrypt()" class="btn btn-primary btn-block">Decrypt</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="gen-public-key" class="form-label">Decrypted Output:</label>
                            <textarea class="form-control" placeholder="result here" id="de-result" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="http://localhost/mvc-template/public/aes.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        $("#rsa-section").hide();

        $('#aes').click(function () {
            $("#aes-section").show();
            $("#rsa-section").hide();
            $('#aes').attr("disabled", true);
            $('#rsa').attr("disabled", false);
        });

        $('#rsa').click(function () {
            $("#aes-section").hide();
            $("#rsa-section").show();
            $('#rsa').attr("disabled", true);
            $('#aes').attr("disabled", false);
        });

        function generateKey() {
            $.ajax({
                type: 'get',
                url: 'http://localhost/mvc-template/public/rsa/generate',
                success: function (data) {
                    var key = JSON.parse(data);
                    $("#gen-public-key").val(key.public_key)
                    $("#gen-private-key").val(key.private_key)
                },
            });
        }

        function encrypt() {
            var body = {
                'plaintext': $("#en-plaintext").val(),
                'key': $("#en-key").val(),
            }

            $.ajax({
                type: 'post',
                url: 'http://localhost/mvc-template/public/rsa/encrypt',
                data: body,
                success: function (data) {
                    $("#en-result").html(data);
                },
            });

        }

        function decrypt() {
            var body = {
                'encrypted': $("#de-encrypted").val(),
                'key': $("#de-key").val(),
            }

            $.ajax({
                type: 'post',
                url: 'http://localhost/mvc-template/public/rsa/decrypt',
                data: body,
                success: function (data) {
                    $("#de-result").html(data);
                },
            });

        }

        function aesEncrypt() {
            var length = $("#aes-en-key").val().length;
            if (length != 16) {
                alert("key length must be 16");
            } else {
                var body = {
                    'plaintext': $("#aes-en-plaintext").val(),
                    'key': $("#aes-en-key").val(),
                }

                $.ajax({
                    type: 'post',
                    url: 'http://localhost/mvc-template/public/aes/encrypt',
                    data: body,
                    success: function (data) {
                        $("#aes-en-result").html(data);
                    },
                });
            }
        }

        function aesDecrypt() {
            var length = $("#aes-de-key").val().length;
            if (length != 16) {
                alert("key length must be 16");
            } else {
                var body = {
                    'encrypted': $("#aes-de-encrypted").val(),
                    'key': $("#aes-de-key").val(),
                }

                $.ajax({
                    type: 'post',
                    url: 'http://localhost/mvc-template/public/aes/decrypt',
                    data: body,
                    success: function (data) {
                        $("#aes-de-result").html(data);
                    },
                });
            }

        }
    </script>

    <!-- <script>
        var aes_key_a;
        var aes_key_b;

        function aesKey() {
            var key = new AES.Crypto(AES.generateKey());
            var input_key = $("#aes-key");
            key.setCounter(key.key);
            input_key.val(String.fromCharCode.apply(null, key.key));

            aes_key_a = key
            aes_key_b = new AES.Crypto(aes_key_a.key);
            aes_key_b.setCounter(aes_key_a.key);
        }

        function aesEncrypt() {
            if (aesKeyCheck() == true) {
                var plain = $("#aes-plain-text").val();
                var result = aes_key_a.encrypt(plain);

                $("#aes-chiper-text").val(result);
            } else {
                console.log("something wrong");
            }
        }

        function aesDecrypt() {
            if (aesKeyCheck() == true) {
                var chiper = $("#aes-chiper-text").val();
                var result = aes_key_b.decrypt(chiper);

                $("#aes-plain-text").val(result);
            } else {
                console.log("something wrong");
            }
        }

        function aesKeyCheck() {
            var key = $("#aes-key");
            if (key.val() == "") {
                alert("key / vector tidak boleh kosong !");
                return false;
            } else {
                if (key.val().length >= 16) {
                    if (aes_key_a != null && aes_key_b != null) {
                        return true;
                    } else {}
                    _key = key.val();

                    arr_key = [];
                    for (var i = 0; i < _key.length; i++) {
                        var y = _key.charCodeAt(i);
                        arr_key.push(y);
                    }

                    aes_key_a = new AES.Crypto(arr_key).setCounter(arr_key)
                    aes_key_b = new AES.Crypto(aes_key_a.key);
                    aes_key_b.setCounter(aes_key_a.key);

                    return true;
                } else {
                    alert("Panjang key / vector harus 16")
                }
            }
        }
    </script> -->

</body>

</html>