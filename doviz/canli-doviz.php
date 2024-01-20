<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://bigpara.hurriyet.com.tr/doviz/dolar/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$dom = new DOMDocument();
@$dom->loadHTML($response);

$xpath = new DOMXPath($dom);
$element = $xpath->query('//*[@id="content"]/div[2]/div/div[2]/div[3]/span[2]')->item(0);
$dolar = $element->nodeValue;



$chs = curl_init();
curl_setopt($chs, CURLOPT_URL, 'https://www.ziraatbank.com.tr/tr/fiyatlar-ve-oranlar');
curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
$responses = curl_exec($chs);
curl_close($chs);

$doms = new DOMDocument();
@$doms->loadHTML($responses);

$xpaths = new DOMXPath($doms);
$elements = $xpaths->query('//*[@id="result-dovizkur"]/div[2]/div/table/tbody/tr[1]/td[4]')->item(0);
$elemente = $xpaths->query('//*[@id="result-dovizkur"]/div[2]/div/table/tbody/tr[2]/td[3]')->item(0);
$zdolar = $elements->nodeValue;
$zeuro = $elemente->nodeValue;

$kur = 0.70;
$filterDolar = str_replace(',', '.', $dolar);
$filterZdolar = str_replace(',', '.', $zdolar);
$toplam = ($filterZdolar + $filterDolar) / 2 + $kur;

echo $toplam;
echo " ";
echo $zeuro;
