<?php
$url = "http://matome.naver.jp/odai/2135350364969742801"; // 画像を収集したい NAVER まとめページの URL
echo $url;
// $url = "http://www.amazon.co.jp/gp/movers-and-shakers"; // NAVER まとめページ URL
$res = file_get_contents($url); // URL からソースコード（文字列）を取得する
$dom = @DOMDocument::loadHTML($res); // 文字列から HTML を生成
$xml = simplexml_import_dom($dom); // さらにそこから SimpleXMLNode オブジェクトを取得
$imgs = $xml->xpath("//img[@class='MTMItemThumb']"); // XPath を用いて class="MTMItemThumb" の img 要素のみ取得
// $imgs = $xml->xpath("//img[@class='zg_image']"); 
foreach ($imgs as $img) { // すべての画像について ...
    echo "<img src='".$img["src"]."'>\n"; // URL から img タグを出力
}