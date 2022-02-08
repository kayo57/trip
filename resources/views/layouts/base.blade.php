<!--------------ベースーテンプレート---------->


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trip</title>
</head>


<body>
  <!---登録ページ.views/auth/register.blade.php--->
  <!-----ログインページ・views/auth/login.blade.php----->
  <!-----メインページ・views/auth/main.blade.php-------->
  <div>@yield('content')</div>
  <!------サブページ・views/auth/sub.blade.php-------->
  　<div>@yield('sub')</div>
  <div></div>
  <div></div>
</body>

</html>