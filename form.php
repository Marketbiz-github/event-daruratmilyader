<?php
ob_start();
require 'config.php';

// File JSON tempat data akan disimpan
$jsonFile = 'data.json';

// Membaca data dari file JSON jika ada
if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $dataArray = json_decode($jsonData, true);
    if (!is_array($dataArray)) {
        $dataArray = []; // Jika file kosong atau rusak, mulai dengan array kosong
    }
} else {
    $dataArray = []; // Jika file belum ada, mulai dengan array kosong
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : '';
    $business = isset($_POST['business']) ? htmlspecialchars($_POST['business']) : '';
    $whatsapp = isset($_POST['whatsapp']) ? htmlspecialchars($_POST['whatsapp']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $tickets = isset($_POST['tickets']) ? htmlspecialchars($_POST['tickets']) : '';
    $referenceId = isset($_POST['referenceId']) ? htmlspecialchars($_POST['referenceId']) : '';

    $va = $vaCon; 
    $apiKey = $apiKeyCon; 
    //$url = 'https://sandbox.ipaymu.com/api/v2/payment'; // Development mode URL
    $url = 'https://my.ipaymu.com/api/v2/payment';
    
    $method = 'POST'; 
    $product = 'Unlimited Reach Conversion Campaign & Viral SEO';
    $thumbnail = 'https://daruratmilyader.com/img/banner.jpeg';
    $price = 150000;

        // Request Body
        $body = [
            'buyerName' => $fullname,
            'buyerPhone' => $whatsapp,
            'buyerEmail' => $email,
            'product' => [$product],
            'imageUrl' => [$thumbnail],
            'qty' => [$tickets],
            'price' => [intval(str_replace('.', '', $price))],
            'notifyUrl' => 'https://daruratmilyader.com/notify.php',
            'returnUrl' => null,
            'cancelUrl' => null,
            'referenceId' => $referenceId,
        ];
        
        // Generate Signature
        // *Don't change this
        $jsonBody     = json_encode($body, JSON_UNESCAPED_SLASHES);
        $requestBody  = strtolower(hash('sha256', $jsonBody));
        $stringToSign = strtoupper($method) . ':' . $va . ':' . $requestBody . ':' . $apiKey;
        $signature    = hash_hmac('sha256', $stringToSign, $apiKey);
        $timestamp    = Date('YmdHis');
        //End Generate Signature

        // Initialize cURL
        $ch = curl_init($url);

        $headers = [
            'Accept: application/json',
            'Content-Type: application/json',
            'va: ' . $va,
            'signature: ' . $signature,
            'timestamp: ' . $timestamp
        ];

        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, count($body));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonBody);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $response = curl_exec($ch);
        if ($response === false) {
            die('Curl error: ' . curl_error($ch));
        }

        curl_close($ch);

        $decode = json_decode($response, true);

        if (isset($decode['Data']['Url'])) {
            $urlPayment = $decode['Data']['Url'];
        } else {
            $urlPayment = '';
        }

    $nomor = '6287820837778'; // Nomor WhatsApp yang dituju
    $pesan = urlencode("Halo! Terima kasih atas minat Anda untuk bergabung dalam Bootcamp Eksklusif \"*Unlimited Reach Conversion Campaign & Viral SEO*\".

Untuk menyelesaikan pendaftaran Anda, silakan lakukan pembayaran melalui tautan berikut:

🔗 Link Pembayaran: $urlPayment

Detail Acara:
📅 Tanggal: 18 September 2024
🕒 Waktu: 14.30 - 18.00 WIB
📍 Lokasi: CGV Pacific Place, Jakarta

Acara ini akan menghadirkan pembicara terbaik dalam bidang digital marketing:
1. Gita Wiryawan (Host of Endgame)
2. Riyeke Ustadiyanto (Master Growth Hacking)
3. M. Fahrian (CEO Ethix)

Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, hubungi kami melalui WhatsApp di 082221024582 (Saskia).

Terima kasih, dan kami tunggu kehadiran Anda!" );

    $link = "https://wa.me/$nomor?text=$pesan";

    // Menambahkan data baru ke array
    $dataArray[] = [
        'fullname' => $fullname,
        'business' => $business,
        'whatsapp' => $whatsapp,
        'email' => $email,
        'tickets' => $tickets,
        'referenceId' => $referenceId,
        'urlPayment' => $urlPayment,
        'timestamp' => date('Y-m-d H:i:s') // Menyimpan timestamp
    ];

    // Menyimpan data ke file JSON
    file_put_contents($jsonFile, json_encode($dataArray, JSON_PRETTY_PRINT));
    

    // Prepare the data to be sent
    $postData = array(
        'fullname' => $fullname,
        'business' => $business,
        'whatsapp' => $whatsapp,
        'email' => $email,
        'tickets' => $tickets,
        'referenceId' => $referenceId,
        'urlPayment' => $urlPayment,
        'timestamp' => date('Y-m-d H:i:s')
    );

    // Convert data to URL-encoded query string
    $postData = http_build_query($postData);

    // Initialize cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $scriptURL);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === false) {
        echo 'Error sending data to Google Sheets: ' . curl_error($ch);
    } else {
        echo 'Success! Data sent to Google Sheets.';
    }

    curl_close($ch);


    header('Location: ' . $link);
    exit;


}
ob_end_flush();
?>