<?php

    namespace midtrans;
    session_start();
    
    

    require_once dirname(__FILE__) . '\midtrans-lib\Midtrans.php';

    Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    Config::$clientKey = env('MIDTRANS_CLIENT_KEY');

    // Enable sanitization
    Config::$isSanitized = true;
    

    // Enable 3D-Secure
   Config::$is3ds = true;

    $nama = $_GET['namaPengirim'];
    $email = $_GET['email'];
    $phone = $_GET['nomorTelepon'];

    $amount = $_GET['hargaTotal'];

    $orderid = rand();

    $transaction_details = array(
        'order_id' => $orderid,
        'gross_amount' => $amount, // no decimal allowed for creditcard
    );

    $customer_details = array(
        'first_name'    => $nama,
        'last_name'     => "",
        'email'         => $email,
        'phone'         => $phone,
        
    );

    $transaction = array(
        'transaction_details'  => $transaction_details,
        'customer_details' => $customer_details

    );

    $snap_token = '';
    try {
        $snap_token = Snap::getSnapToken($transaction);
    }
    catch (\Exception $e) {
        echo $e->getMessage();
    };




?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
    body {
            background-color: #f0f2f5;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #1e90ff;
            border-radius: 20px 20px 0 0;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        .card-body {
            padding: 30px;
        }
        #pay-button {
            background-color: #1e90ff;
            border-color: #1e90ff;
        }
        #pay-button:hover {
            background-color: #0077cc;
            border-color: #0077cc;
        }
        .card-footer {
            font-size: 16px;
            text-align: center;
        }
</style>
<html>
    <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Total : Rp.<?php echo $amount; ?>
                    </div>
                    <div class="card-body">
                        <button id="pay-button" class="btn btn-primary btn-block">Bayar Sekarang</button>
                    </div>
                    <div class="card-footer text-muted">
                        <small class="text-center">
                            Payment Token: <?php echo $snap_token; ?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php env('MIDTRANS_CLIENT_KEY');?>"></script>
        <script type="text/javascript">
            document.getElementById('pay-button').onclick = function(){
                // SnapToken acquired from previous step
                
                snap.pay('<?php echo $snap_token?>', {
                    // Optional
                    onSuccess: function(result) {
                        window.close();

                    // Mengaktifkan kembali tombol di halaman sebelumnya
                    if (window.opener && !window.opener.closed) {
                        var form = window.opener.document.getElementById('form');
                        if (form) {
                            form.submit();
                        }
                    }

                    },

                    
                    // Optional
                    onError: function(result){
                      alert("Transaction failed. Try Again");
                        
                    }
                });
            };
        </script>
        </body>
</html>
