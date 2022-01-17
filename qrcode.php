<?php

//URL OF GOOGLE CHART API
$apiUrl = 'http://chart.apis.google.com/chart';
// DATA TO CREATE QR CODE

$url="play.google.com/store/apps/details?id=cc.forestapp&amp;referrer=utm_source%3Dofficalwebsite%26utm_medium%3Dbutton";
			$data = preg_match("#^https?\:\/\/#", $url) ? $url :    "https://{$url}";
	
function qrcode($size = 400, $filename = "qrcode") {
	global $apiUrl, $data;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chs={$size}x{$size}&cht=qr&chl=" . urlencode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$img = curl_exec($ch);
curl_close($ch);

if ($img) {
	if ($filename) {
		if (!preg_match("#\.png$#i", $filename)) {
			$filename .= ".png";
		}
		return file_put_contents("images/qr/".$filename, $img);

	} else {
		header("Content-type: image/png");
		print $img;
		return true;
	}
}
return false;

}




?>