<?php
$url = "http://matome.naver.jp/odai/2135350364969742801"; // NAVER まとめページ URL
// $url = "http://www.amazon.co.jp/gp/movers-and-shakers"; // NAVER まとめページ URL

$res = @file_get_contents($url);

while ($res) {
    $data = getData($res);
    foreach ($data["image"] as $image) {
        echo "<img src='".$image["src"]."'>\n";
    }
    if ($data["nextPage"]) { // 次のページがあるか？
        $res = @file_get_contents($url."?page=".$data["nextPage"]);  // URL の末尾に ?page= をつけると、ページを指定することができる。
        sleep(1); // サーバへの負荷を減らすため 1 秒間遅延処理
    } else {
        break; // 次のページがなければ終了
    }
}

function getData ($html) {
    $dom = @DOMDocument::loadHTML($html);
    $xml = simplexml_import_dom($dom);
    $result["image"] = $xml->xpath("//img[@class='MTMItemThumb']");
    $pager = $xml->xpath("//div[@class='MdPagination03']"); // ページ送り部分を取得
    $current_page = $pager[0]->strong; // 太字のページ番号の値
    $last_anchor = $pager[0]->a[count($pager[0]->a)-1]; // 太字でないページ番号の末尾の値
    if ($last_anchor + 1 != $current_page) { // 太字のページ番号が最後のページを指していなければ...
        $result["nextPage"] = $current_page + 1; // 次のページを設定する。
    } else {
        $result["nextPage"] = null; // 次のページは無い
    }
    return $result;
}