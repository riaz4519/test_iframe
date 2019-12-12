<?php
// example of how to modify HTML contents
include('../simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('https://www.aliexpress.com/item/32991764609.html?spm=a2g0o.ams_91653.p99adbb.16.82f86501vBgyjN&gps-id=7729271&scm=1007.20675.119012.0&scm_id=1007.20675.119012.0&scm-url=1007.20675.119012.0&pvid=ce8ead43-0a1d-4cfd-b8dd-48957902db6c');

foreach($html->find('.product-title') as $e){
        echo $e->innertext;
}
/*// remove all image
foreach($html->find('img') as $e)
    $e->outertext = '';

// replace all input
foreach($html->find('input') as $e)
    $e->outertext = '[INPUT]';

// dump contents*/
//echo $html;

//echo $html;
?>