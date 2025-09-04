<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>れいぞうこのアプリ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff8e7;
      background-image: radial-gradient(circle, #ffd6d6 5px, transparent 6px),
                        radial-gradient(circle, #cdeffd 5px, transparent 6px),
                        radial-gradient(circle, #ffe5a4 5px, transparent 6px);
      background-position: 0 0, 40px 40px, 20px 20px;
      background-size: 80px 80px;
    }
    .fridge {
      width: 250px;
      height: 400px;
      background-color: #cfe2ff;
      border-radius: 30px;
      margin: 50px auto;
      position: relative;
    }
    .fridge-door-line {
      width: 90%;
      height: 5px;
      background-color: #333;
      position: absolute;
      top: 45%;
      left: 5%;
    }
    .speech-bubble {
      position: absolute;
      top: 40px;
      left: 40px;
      background: #fff;
      border-radius: 10px;
      padding: 10px;
      font-size: 14px;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
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
    }
  </style>
</head>
<body>

  <div class="fridge">
    <div class="speech-bubble">🥕 にんじん たべようね！</div>
    <div class="fridge-door-line"></div>
  </div>

  <div class="container text-center food-btns">
    <button class="btn btn-custom">たべものをいれる</button>
    <button class="btn btn-custom">なかをみる</button>
    <button class="btn btn-custom">たべものをだす</button>
  </div>

</body>
</html>
