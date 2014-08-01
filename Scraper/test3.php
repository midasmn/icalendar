
<?php
    include_once('simple_html_dom.php');  /////////  パス注意  ///////
    $curl = curl_init(); 
    // curl_setopt($curl, CURLOPT_URL, 'ここにスクレイピングしたいURL');  
    curl_setopt($curl, CURLOPT_URL, 'http://matome.naver.jp/odai/2135350364969742801');  
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
    $str = curl_exec($curl);  
    curl_close($curl);  
    $html= str_get_html($str);
        ////////////////////　↓↓ここで取りたい要素を指定 ////////////////////
    foreach($html -> find('div[id=news] ul li a') as $list){
       ////////////////////  ここから表示部分////////////////////////////////
            echo "<ul class='news'>"; ///////任意のクラスを付けている
            echo "<li class='news'>";
            echo "<p>";
            echo "<a href='";
            echo "スクレイピング先のURL"; ///////  http://○○○.com など
            echo $list->href;
            echo "'>";
            echo "<img class='fashion_img' src='";   /////このクラスは任意
            echo "スクレイピング先のURL";  ///////  http://○○○.com など
            echo $list->children(0)->src;
            echo "' width='160' height='107'>";  //////  画像の大きさ指定
            echo $list->children(1)->outertext;
            echo "</a>";
            echo "</p>";
            echo "</li>";
            echo "</ul>";
    }
    $html -> clear();
    unset($html);
?>
