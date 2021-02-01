<?php

function send_mail(
    $n_from,    # имя отправителя
    $e_from,   # email отправителя
    $n_to,      # имя получателя
    $e_to,     # email получателя
    $charset, # кодировка переданных данных
    $charset2, # кодировка письма
    $theme,      # тема письма
    $text,         # текст письма
    $flag          # письмо в виде html или обычного текста
) {


    $to = header_encode($n_to, $charset, $charset2) . ' <' . $e_to . '>';
    $theme = header_encode($theme, $charset, $charset2);
    $from =  header_encode($n_from, $charset, $charset2) .' <' . $e_from . '>';

    if($charset != $charset2) {
        $text = iconv($charset, $charset2, $text);
    }

    $headers = "From: $from\r\n";
    $type = ($flag) ? 'html' : 'plain';
    $headers .= "Content-type: text/$type; charset=$charset2\r\n";
    $headers .= "Mime-Version: 1.0\r\n";

    return mail($to, $theme, $text, $headers);   
}

function header_encode($string, $charset, $charset2) {
    if($charset != $charset2) {
        $string = iconv($charset, $charset2, $string);
    }
    return '=?' . $charset2 . '?B?' . base64_encode($string) . '?=';
}
$message = '';

if(isset($_POST['email']) && trim($_POST['email']) !== ''){

    if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
        echo "Email указан не корректно!";
        die();
     }
}

if(
    isset($_POST['email']) &&
    trim($_POST['email']) !== '' ||
    isset($_POST['phone']) &&
    trim($_POST['phone']) != ''
){

    $message .= '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
                </head>
                <body>
                    <div class="container">
                        <div class="row">
                        <div class="col-12 m-2 p-3 border border-info d-flex">
                            <div class="col-1-offset"></div>
                            <div class="col-12">
                                <table class="table" style="text-align: left;">';
                                    
                                    if(trim($_POST['name']) !== '') $message .= '<tr><th>Имя : '. trim($_POST['name']) .'</th></tr>';
                                    if(trim($_POST['phone']) !== '') $message .= '<tr><th>Телефон : '. trim($_POST['phone']) .'</th></tr>';
                                    if(trim($_POST['email']) !== '') $message .= '<tr><th>Email : '. trim($_POST['email']) .'</th></tr>';
                                    if(@trim($_POST['message']) !== '' && @isset($_POST['message'])) $message .= '<tr><th>Сообщение : '. @trim($_POST['message']) .'</th></tr>';
                                    

                                    $message .= '</table>
                            </div>
                            <div class="col-1-offset"></div>
                        </div>
                    </div>
                    </div>
                </body>
                </html>';


    if(@send_mail(
        trim($_POST['name']),  // имя отправителя
        trim($_POST['email']), // email отправителя
        'admin',    // имя получателя
        '***',   // email получателя
        'UTF-8',        // кодировка переданных данных
        'KOI8-R',   // кодировка письма
        trim($_POST['theme']), // тема письма
        $message,
        true  // письмо в виде html или обычного текста
    )){  
        echo 'Письмо успешно отправлено. В ближайщее время мы Вам позвоним. Спасибо!';
    } else {
        echo 'Не удалось отправить письмо! Попробуйте позже.';
    };
} else {
    echo 'Укажите номер телефона или Email';
}


