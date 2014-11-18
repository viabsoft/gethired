<?
	$curl = curl_init("http://blogs.tribune.com.pk/author/2/f/");
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl,CURLOPT_TIMEOUT,10);
	$re = curl_exec($curl);
	file_put_contents("test.txt",$re);
	//print_r($re);
?>
