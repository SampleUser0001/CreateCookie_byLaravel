<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Cookieを扱う</title>  
</head>
<body>
  <h1>Cookie一覧</h1>
    <?php
      // use Illuminate\Cookie\CookieJar;
      // use Illuminate\Support\Facades\Cookie;
      use Illuminate\Support\Facades\Cookie;
      
      // Cookieの取得
      // $value = Cookie::get('key');
      if($value === null){
        echo 'null';
      } else {
        echo $value;
      }
    ?>
  <hr>
  <a href="./put-cookie.html">Cookie登録</a>
</body>
</html>