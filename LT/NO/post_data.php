<?php

$omikuji = ["大吉", "中吉", "小吉", "凶", "大凶"];
$name = 'no name';
$result = "何がでるかな？";
$button = '<input class="btn btn-lg btn-block btn-outline-primary" type="submit" value="占う">';

//print_r($_POST);

if(isset($_POST['name'])){
  $name = $_POST['name']; 
}

if(isset($_POST['judge'])){
  $result = $omikuji[rand(0, count($omikuji) - 1)];
  $button = null;
}

?>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>モナ会#2 運勢占い（POST）</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">モナ会#2 HTTPについて</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <p class="p-2 text-dark">ようこそ、<?= $name; ?>さん！</p>
  </nav>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">

</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?= $name; ?>さんの運勢</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?= $result; ?></h1>
        <form action="" method='post'>
            <input type="hidden" name="judge" value="True">
            <?= $button; ?>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
