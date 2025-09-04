<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>れいぞうこアプリ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff8e7;
      background-image: radial-gradient(circle, #ffd6d6 5px, transparent 6px),
                        radial-gradient(circle, #cdeffd 5px, transparent 6px),
                        radial-gradient(circle, #ffe5a4 5px, transparent 6px);
      background-position: 0 0, 40px 40px, 20px 20px;
      background-size: 80px 80px;
      font-family: sans-serif;
    }

    .fridge {
      width: 260px;
      height: 420px;
      background-color: #cfe2ff;
      border-radius: 30px;
      margin: 50px auto;
      position: relative;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .fridge-top,
    .fridge-bottom {
      width: 100%;
      background-color: #cfe2ff;
      border-radius: 30px;
    }

    .fridge-top {
      height: 45%;
      border-bottom: 3px solid #555; /* 区切り線 */
      position: relative;
    }

    .fridge-bottom {
      height: 55%;
      position: relative;
    }

    .handle {
      width: 12px;
      height: 60px;
      background-color: white;
      border-radius: 10px;
      position: absolute;
      left: 20px;
    }

    .top-handle {
      top: 40%;
    }

    .bottom-handle {
      top: 30%;
    }

    .speech-bubble {
      position: absolute;
      top: 10px;
      right: 15px;
      background: #fff;
      border-radius: 10px;
      padding: 10px;
      font-size: 14px;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
      width: 160px;
      text-align: center;
    }

    .food-btns {
      margin-top: 30px;
    }

    .btn-custom {
      background-color: #ffd6d6;
      border: none;
      padding: 10px 20px;
      margin: 10px;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      text-decoration: none;
      color: #333;
      display: inline-block;
    }

    .btn-custom:hover {
      background-color: #ffbcbc;
    }
  </style>
</head>
<body>

  <div class="fridge">
    <div class="speech-bubble">🥕 にんじん たべようね！</div>
    <div class="fridge-door-line"></div>
  </div>

  <div class="container text-center food-btns">
    <a href="insert_food.php" class="btn btn-custom" role="button">たべものをいれる</a>
    <a href="look_inside_refrigerato.php" class="btn btn-custom" role="button">なかをみる</a>
    <a href="putout_food.php" class="btn btn-custom" role="button">たべものをだす</a>
  </div>

</body>
</html>
