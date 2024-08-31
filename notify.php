<?php
if (isset($_POST['status']) && $_POST['status'] === 'berhasil') {
    // Mengambil data dari request POST
    $trx_id = $_POST['trx_id'];
    $sid = $_POST['sid'];
    $sub_total = $_POST['sub_total'];
    $total = $_POST['total'];
    $fee = $_POST['fee'];
    $status_code = $_POST['status_code'];
    $va = $_POST['va'];
    $via = $_POST['via'];
    $channel = $_POST['channel'];
    $reference_id = $_POST['reference_id'];

    // Load JSON data from the file
    $jsonFile = 'data.json'; // Path to your JSON file
    if (file_exists($jsonFile)) {
        $jsonData = file_get_contents($jsonFile);
        $dataArray = json_decode($jsonData, true); // Decode JSON to PHP array

        // Search for the matching referenceId
        $foundEntry = null;
        foreach ($dataArray as $entry) {
            if (isset($entry['referenceId']) && $entry['referenceId'] === $reference_id) {
                $foundEntry = $entry;
                break;
            }
        }

        if ($foundEntry) {
            // Prepare data to send to Google Sheet
            $scriptURL = 'https://script.google.com/macros/s/AKfycbzD1np0VwElKiQpNcgtWdBUhiIfA2M-Ica7AQOgiA8ly3pWIt-Bl443Lr1q6hMm3pjQGw/exec'; // Replace with your Apps Script URL
            $postData = http_build_query($foundEntry);

            // Send data to Google Sheets using cURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $scriptURL);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            if ($response === false) {
                echo 'Error sending data to Google Sheet: ' . curl_error($ch);
            } else {
                echo "Status berhasil, data dengan referenceId $reference_id ditemukan dan dikirim ke Google Sheet.";
            }

            curl_close($ch);
        } else {
            echo "Status berhasil, tetapi referenceId $reference_id tidak ditemukan dalam data.json.";
        }
    } else {
        echo "File data.json tidak ditemukan.";
    }
} else {
    // Status tidak berhasil
    echo "Status tidak berhasil.";
}
?>
