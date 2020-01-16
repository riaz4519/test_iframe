<?php

//libxml_use_internal_errors(true);
 //$data = file_get_contents('https://www.amazon.com/Sports-Research-Premium-Trimmer-Sample/dp/B07BLM28LS?pf_rd_p=c4a36063-ed31-585b-b9d3-e14ee41d7e8c&pf_rd_r=BD9CDA5TFT7X8HJ6J429&pd_rd_wg=8ZpCx&ref_=pd_gw_ri&pd_rd_w=MELbc&pd_rd_r=edb94038-72b8-41e0-92f3-cc9b6b189d17');

/*    $doc = new DOMDocument();
    $doc->loadHTMLFile('https://www.amazon.com/Sports-Research-Premium-Trimmer-Sample/dp/B07BLM28LS?pf_rd_p=c4a36063-ed31-585b-b9d3-e14ee41d7e8c&pf_rd_r=BD9CDA5TFT7X8HJ6J429&pd_rd_wg=8ZpCx&ref_=pd_gw_ri&pd_rd_w=MELbc&pd_rd_r=edb94038-72b8-41e0-92f3-cc9b6b189d17');

    $h1 = $doc->getElementById('productTitle')->textContent;

    echo $h1, PHP_EOL;*/

//header('Content-Type:application/json');
$url = "https://www.amazon.com/Sports-Research-Premium-Trimmer-Sample/dp/B07BLM28LS?pf_rd_p=c4a36063-ed31-585b-b9d3-e14ee41d7e8c&pf_rd_r=BD9CDA5TFT7X8HJ6J429&pd_rd_wg=8ZpCx&ref_=pd_gw_ri&pd_rd_w=MELbc&pd_rd_r=edb94038-72b8-41e0-92f3-cc9b6b189d17";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$res = curl_exec($ch);

curl_close($ch);

/*$dom = new DomDocument();
@ $dom->loadHTML($res);

$table = $dom->getElementById('tablepress-3'); //DOMElement
$child_elements = $table->getElementsByTagName('tr'); //DOMNodeList
$row_count = $child_elements->length - 1;

echo "No. of rows in the table is " . $row_count;*/

/*$dom = new DomDocument();
@ $dom->loadHTML($res);

$h2s = $dom->getElementsByTagName('h2');
foreach( $h2s as $h2 ) {
    echo $h2->textContent . "\n";
}*/

$dom = new DomDocument();
@ $dom->loadHTML($res);

$xpath = new DOMXpath($dom);
//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]"
$classname = 'a-size-medium';
$tables = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
$count = $tables->length;

for ($i = $tables->length - 1; $i > -1; $i--) {
    $result[] = $tables->item($i)->firstChild;
}

echo "<pre>";
print_r($result);
echo "No. of tables " . $count;

 ?>