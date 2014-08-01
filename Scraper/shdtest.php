<?php
    require 'simple_html_dom.php';
    header('Content-Type: text/html; charset=utf-8');

    // $get_url = 'http://matome.naver.jp/odai/2135350364969742801'; //URL
    // $get_url = 'http://www.amazon.co.jp/gp/bestsellers/books/2278488051'; //アマゾンコミックベストセラー
    // $total = 13; //取得個数
    // $amazon_img_tag = '.zg_itemImage_normal a img';
    // $amazon_img_url_tag ='.zg_itemImage_normal a';
    // //
    // $img_src = "src";
    // $img_alt = "title";
    // $img_href = "href";


//////////////
// 汎用
// get_url 取得URL 'http://www.amazon.co.jp/gp/bestsellers/books/2278488051'
// exm_tag 検索タグ '.zg_itemImage_normal a img'
// out_tag 戻り   "src"
//
function f_comon_scrape($get_url,$exm_tag,$out_tag)
{
    $imgs = array();
    // 画像取得
    $html = file_get_html($get_url);
    $i=0;
    //画像
    foreach ($html->find($exm_tag) as $element)
    {
            $imgs[$i] = $element->$out_tag; 
            $i++;
    }
    $rtn_imgs = $imgs;
    // 解放する
    $html->clear();
    unset($imgs);
    return $rtn_imgs;
}

//amazonランキング画像取得
//$get_url = 'http://www.amazon.co.jp/gp/bestsellers/books/2278488051'; //アマゾンコミックベストセラー
function f_amazon_scrape_img($get_url)
{
    $assoc_tag = '/tag=mittellogeblo-22';
    $get_url .= $assoc_tag;
    $rtn = array();
    // 画像取得
    $html = file_get_html($get_url);
    $img_cnt=0;
    $alt_cnt=0;
    $href_cnt=0;
    //画像
    foreach ($html->find('.zg_itemImage_normal a img') as $element)
    {
            $rtn['img'][$img_cnt] = $element->src; 
            $img_cnt++;
    }
    //alt
    foreach ($html->find('.zg_itemImage_normal a img') as $element)
    {
            $rtn['alt'][$alt_cnt]= $element->alt; 
            $alt_cnt++;
    }
    //URL
    foreach ($html->find('.zg_itemImage_normal a') as $element)
    {
            $rtn['href'][$href_cnt] = $element->href.$assoc_tag; 
            $href_cnt++;
    }

    $rtn_imgs = $rtn;
    // 解放する
    $html->clear();
    unset($rtn);
    return $rtn_imgs;
}

 
 //画像取得
$get_url = 'http://www.amazon.co.jp/gp/bestsellers/books/2278488051'; //アマゾンコミックベストセラー
// $get_url = 'http://www.amazon.co.jp/gp/bestsellers/digital-text'; //Kindle
$rtn_imgs = f_amazon_scrape_img($get_url);

$cnt = count($rtn_imgs['img']);
echo "cnt=".$cnt ;
$i = 0;
while ($i  <= $cnt) {
    echo '<a href="'.$rtn_imgs['href'][$i].'"><img src="'.$rtn_imgs['img'][$i].'" alt="'.$rtn_imgs['alt'][$i].'">';
    $i++;
    # code...
}
//  foreach ($rtn_imgs as $img) 
//  { // すべての画像について ...
//     echo "<img src='".$img."'>\n"; // URL から img タグを出力
//     // $rank++;
// }

?>