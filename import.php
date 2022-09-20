<?php
$url = "https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx";
$xml = file_get_contents($url);
$data = simplexml_load_string($xml);
//print_r($data);
$ty_gia = $data->Exrate;


foreach ($ty_gia as $nt) {
    $arrParam = [$nt['CurrencyCode'], $nt['CurrencyName'], $nt['Buy'], $nt['Sell']];
    $sql = "INSERT INTO exrate (CurrencyCode, CurrencyName, Buy, Sell) values ($arrParam[0],$arrParam[1],$arrParam[2],$arrParam[3])";
    
    print_r($sql);
   // print_r($arrParam);
}


