<?php
$url='https://newsapi.org/v1/articles?source=google-news&sortBy=top&apiKey=bda056d4383a4ca382bd49633cd7f7ce';
$content= file_get_contents($url);
$json=json_decode($content,true);
echo $json['articles'][0]['title'];

for($i=0;$i<9;$i++){
  echo $json['articles'][$i]['title'];
  echo "</br>";
}

// $url = 'http://timesofindia.indiatimes.com/india/privacy-a-fundamental-right-subject-to-reasonable-restrictions-government/articleshow/60208427.cms';
// $content = file_get_contents($url);
// $first_step = explode( '<div class="Normal">' , $content );
// //$second_step = explode("</div>" , $first_step[1] );

// print_r($first_step);

// $html = file_get_contents('http://timesofindia.indiatimes.com/india/privacy-a-fundamental-right-subject-to-reasonable-restrictions-government/articleshow/60208427.cms');
// echo getHTMLByID('Normal', $html);

// function getHTMLByID($id,$html) {
//     $dom = new DOMDocument;
//     libxml_use_internal_errors(true);
//     $dom->loadHTML($html);
//     $node = $dom->getElementById($id);
//     if ($node) {
//         return $dom->saveXML($node);
//     }
//     return FALSE;
// }


// include('simple_html_dom.php');
 
// Retrieve the DOM from a given URL
// $html = file_get_contents('http://timesofindia.indiatimes.com/india/privacy-a-fundamental-right-subject-to-reasonable-restrictions-government/articleshow/60208427.cms');

// // Find all "A" tags and print their HREFs
// foreach($html->find('a') as $e) 
//     echo $e->href . '<br>';

// // Retrieve all images and print their SRCs
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';


// $url = 'http://timesofindia.indiatimes.com/india/privacy-a-fundamental-right-subject-to-reasonable-restrictions-government/articleshow/60208427.cms';

// // using file_get_contents function
// $content = file_get_contents($url);
// echo $content;
// #output# "who is the Rector of the University"

// // using file function // read line by line in array
// $content = file($url);
// print_r($content);

// #output# Array (0] => ﻿"who is the Rector of the University")

// // using cURL
// $ch = curl_init($url);  
// curl_setopt($ch, CURLOPT_HEADER, 0);  
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
// $content = curl_exec($ch);
// echo $content;
// #output# "who is the Rector of the University"
?>
