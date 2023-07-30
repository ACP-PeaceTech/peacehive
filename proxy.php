<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = 'https://script.google.com/macros/s/AKfycbypFi6eQoeR3wDJ6RhM019UiZ0uBjyQ2NA8iBa3IyCfLehryD2M1vst9glJFzC4XXEq_g/exec';

    $data = http_build_query($_POST);
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => $data,
        ),
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    echo $result;
}
?>
