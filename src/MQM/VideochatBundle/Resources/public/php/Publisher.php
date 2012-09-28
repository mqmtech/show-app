<?php

$result = "no post data";

if (!isset($_POST['type'])) {
    file_put_contents(__DIR__ . "/debug.txt", $result);
    return;
}

if ($_POST['type'] == "pixel") {
    // input is in format 1,2,3...|1,2,3...|...
    $img = imagecreatetruecolor(320, 240);

    foreach (explode("|", $_POST['image']) as $y => $csv) {
        foreach (explode(";", $csv) as $x => $color) {
            imagesetpixel($img, $x, $y, $color);
        }
    }
    file_put_contents(__DIR__ . "/capture.png", pack("H*", $img));
} else {
    // input is in format: data:image/png;base64,...
    $img = $_POST['image'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = __DIR__ . "/capture" . uniqid() . '.png';
    //$file = __DIR__ . "/capture.png";
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
}
