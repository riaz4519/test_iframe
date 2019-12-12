<?php

include ("./simplehtmldom/simple_html_dom.php");


$data = file_get_html('https://www.google.com/');

echo $data->find('title',0)->plaintext();