<?php
  require_once("../account/loginstatus.php");

$id = $_SESSION['id'];
include "../dbconnect/pdo_connect.php";

$sql = "SELECT * FROM user WHERE id = '$id' ";
$stmt = $pdo -> query($sql);

foreach($stmt as $row){
    $name = $row["name"];
}
$title = "TOP";
include("./header.php");

?>
    <div class="box3">
      <p>ようこそ津田沼へ</p>
      <h2>こんにちは　<?=$name?> さん</h2>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-interval=3000 data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/津田沼駅.jpg" width="900" height="500" alt="津田沼駅">
        </div>
        <div class="carousel-item">
          <img src="../img/警告.jpg" width="900" height="500" alt="警告">
        </div>
        <div class="carousel-item">
          <img src="../img/谷津干潟.jpg" width="900" height="500" alt="谷津干潟">
        </div>
        <div class="carousel-item">
          <img src="../img/PARCO.jpg" width="900" height="500" alt="PARCO">
        </div>
        <div class="carousel-item">
          <img src="../img/藤崎森林公園2.jpg" width="900" height="500" alt="藤崎森林公園">
        </div>
      </div>
    </div>
    <!-- <div id="box1">
      <div id="box1-1">
        <div data-trigger class="circle" id="elem1" onclick="msgfunc1()"><div id="message1"><h1 class="str">衣</h1></div></div>
        <div data-trigger class="circle" id="elem2" onclick="msgfunc2()"><div id="message2"><h1 class="str">食</h1></div></div>
        <div data-trigger class="circle" id="elem6" onclick="msgfunc6()"><div id="message6"><h1 class="str">住</h1></div></div>
      </div>
      <div id="box1-2">
        <div data-trigger class="circle" id="elem7" onclick="msgfunc7()"><div id="message7"><h1 class="str">暮</h1></div></div>
        <div data-trigger class="circle" id="elem3" onclick="msgfunc3()"><div id="message3"><h1 class="str">安全</h1></div></div>
      </div>
      <div id="box1-3">
        <div data-trigger class="circle" id="elem4" onclick="msgfunc4()"><div id="message4"><h1 class="str">便利</h1></div></div>
        <div data-trigger class="circle" id="elem5" onclick="msgfunc5()"><div id="message5"><h1 class="str">遊ぶ</h1></div></div>
      </div>
    </div> -->
    <div id="box4-1">
    <div data-trigger class="card card1" style="width: 18rem;">
      <img class="w-100 h-100" src="../img/apparel/GU.jpg" alt="アパレル">
      <div class="card-body">
        <h5 class="card-title">Life Wear</h5>
        <p class="card-text">津田沼には低価格かつ高品質のアパレルショップが多くあります。さらには老若男女問わず着こなせる店舗も揃っています。</p>
        <a href="./wear.php" class="btn btn-primary">検索</a>
      </div>
    </div>
    <div data-trigger class="card card1" style="width: 18rem;">
      <img class="w-100 h-100" src="../img/food/ヨーカドー.jpg" alt="スーパー">
      <div class="card-body">
        <h5 class="card-title">食材選び</h5>
        <p class="card-text">津田沼には朝早くから夜遅くまで営業しているお店や、24時間営業の店舗など、住民のニーズに合わせたお店が多くあります。</p>
        <a href="./buy.php" class="btn btn-primary">検索</a>
      </div>
    </div>
    <div data-trigger class="card card1" style="width: 18rem;">
      <img class="w-100 h-100" src="../img/goods/ニトリ.jpg" alt="雑貨">
      <div class="card-body">
        <h5 class="card-title">インテリア雑貨</h5>
        <p class="card-text">津田沼には家具やインテリア雑貨を取り揃えたお店が多くあります。新生活を始めるのに最適です。</p>
        <a href="./live.php" class="btn btn-primary">検索</a>
      </div>
    </div>
    </div>
    <div id="box4-2">
    <div data-trigger class="card card2" style="width: 18rem;">
      <img class="w-100 h-100" src="../img/千葉工大津田沼図書館.jpg" alt="図書館">
      <div class="card-body">
        <h5 class="card-title">暮らす</h5>
        <p class="card-text">津田沼に住むために必要な情報を掲載しています。ゴミの出し方などご参考までにどうぞ！</p>
        <a href="./life.php" class="btn btn-primary">検索</a>
      </div>
    </div>
    <div data-trigger class="card card2" style="width: 18rem;">
      <img class="w-100 h-100" src="../img/安全.jpg" alt="交番">
      <div class="card-body">
        <h5 class="card-title">街の安全</h5>
        <p class="card-text">津田沼は夜道も明るく、人通りが多いのが特徴です。そのため女性や子供連れでも安心して暮らせる街になっています。</p>
        <a href="./safe.php" class="btn btn-primary">検索</a>
      </div>
    </div>
    </div>
    <div id="box4-3">
    <div data-trigger class="card card3" style="width: 18rem;">
      <img class="w-100 h-100" src="../img/京成津田沼.jpg" alt="京成津田沼駅">
      <div class="card-body">
        <h5 class="card-title">交通アクセス</h5>
        <p class="card-text">JR総武快速線が停車する津田沼駅、また新京成電鉄 終着駅にもなっている京成津田沼駅とアクセスに優れた津田沼を紹介します。</p>
        <a href="./convenient.php" class="btn btn-primary">検索</a>
      </div>
    </div>
    <div data-trigger class="card card3" style="width: 18rem;">
      <img class="w-100 h-100" src="../img/谷津バラ園_入口.jpg" alt="ゲームセンター">
      <div class="card-body">
        <h5 class="card-title">遊ぶ</h5>
        <p class="card-text">津田沼には広々とした公園や、アミューズメント施設が沢山あります。週末に家族やペットと散歩、遊びに出掛けるコースとしては最適です。</p>
        <a href="./play.php" class="btn btn-primary">検索</a>
      </div>
    </div>
  </div>
  </div>
  
  <aside id="sidebar">
    <section id="side_banner">
        <h2>関連リンク</h2>
        <ul>
          <li><a href="./wear.php">服を探す</a></li>
          <li><a href="./buy.php">食材を探す</a></li>
          <li><a href="./live.php">雑貨を探す</a></li>
          <li><a href="./life.php">津田沼で暮らす</a></li>
          <li><a href="./safe.php">街の安全</a></li>
          <li><a href="./convenient.php">交通アクセス</a></li>
          <li><a href="./play.php">津田沼で遊ぶ</a></li>
          <li><a>-----------------</a></li>
          <li><a href="../insert_data/apparel.php">服の店追加</a></li>
          <li><a href="../insert_data/food.php">食材の店追加</a></li>
          <li><a href="../insert_data/goods.php">雑貨の店追加</a></li>
          <li><a href="../delete_data/apparel.php">服の店削除</a></li>
          <li><a href="../delete_data/food.php">食材の店削除</a></li>
          <li><a href="../delete_data/goods.php">雑貨の店削除</a></li>
          <li><a>-----------------</a></li>
          <li><a href="../html/coupon.html">地域限定クーポン</a></li>
          <li><a href="./user.php">会員登録情報</a></li>
          <li><a href="../html/logout.html">ログアウト</a></li>
        </ul>
    </section>
  </aside>

  <div id="footer-wrapper" class="container w100">
    <footer>　
      <div class="footer-wrap">
        <div class="footer-top">
          <h5>Top</h5>
          <ul class="footer1">
            <li><a href="./index.php">トップページ</a></li>
          </ul>
        </div>
        <div class="footer-wear">
          <h5>Wear</h5>
          <ul class="footer6">
              <li><a href="./wear.php">服</a></li>
          </ul>
        </div>
        <div class="footer-buy">
          <h5>Buy</h5>
          <ul class="footer2">
            <li><a href="./buy.php">食材</a></li>
          </ul>
        </div>
        <div class="footer-live">
          <h5>Interior</h5>
          <ul class="footer7">
            <li><a href="./live.php">雑貨</a></li>
          </ul>
        </div>
        <div class="footer-life">
          <h5>Life</h5>
          <ul class="footer8">
            <li><a href="./life.php">暮らす</a></li>
          </ul>
        </div>
        <div class="footer-safe">
          <h5>Safe</h5>
          <ul class="footer3">
            <li><a href="./safe.php">街の安全</a></li>
          </ul>
        </div>
        <div class="footer-convenient">
          <h5>Convenient</h5>
          <ul class="footer4">
            <li><a href="./convenient.php">交通アクセス</a></li>
          </ul>
        </div>
        <div class="footer-play">
          <h5>Play</h5>
          <ul class="footer5">
            <li><a href="./play.php">遊ぶ</a></li>
          </ul>
        </div>
      </div>　　
      <p id="copy">
        &copy;Copy Rights . 2020-2021 つだぬまいんふぉ . All Rights Reserved
        <img src="../img/つだぬまいんふぉ.png" width="80" height="50" alt="つだぬまいんふぉ">
      </p>
    </footer>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/1.0.3/ScrollTrigger.min.js"></script>
<script>
    const trigger = new ScrollTrigger.default()
    trigger.add('[data-trigger]',
        { 
            once: false,
            offset: {
                viewport: {
                    y: (trigger, frame, direction) => {
                        return trigger.visible ? 0 : .3
                    }
                }
            },
        },
    )
    // var msgfunc1 = function(){
 
    //     var message = document.getElementById("message1");
    //     message.innerHTML = "<span class='msg'>津田沼周辺のアパレル店舗紹介</span><a href='wear.html' class='btn btn-primary float-right m-5' style='color: #f0f8ff;'>詳細</a>";
 
 
    //   }
    // var msgfunc2 = function(){
 
    //     var message = document.getElementById("message2");
    //     message.innerHTML = "<span class='msg'>津田沼周辺のスーパー紹介</span><a href='buy.html' class='btn btn-primary float-right m-5' style='color: #f0f8ff;'>詳細</a>";
 
 
    //   }
    //  var msgfunc6 = function(){
        
    //     var message = document.getElementById("message6");
    //      message.innerHTML = "<span class='msg'>インテリア雑貨のお店を紹介</span><a href='live.html' class='btn btn-primary float-right m-5' style='color: #f0f8ff;'>詳細</a>";


    //   }
    //   var msgfunc7 = function(){
        
    //     var message = document.getElementById("message7");
    //     message.innerHTML = "<span class='msg'>津田沼に住むために必要な情報を掲載</span><a href='life.html' class='btn btn-primary float-right m-5' style='color: #f0f8ff;'>詳細</a>";


    //   }
    // var msgfunc3 = function(){
 
    //     var message = document.getElementById("message3");
    //     message.innerHTML = "<span class='msg'>津田沼周辺の治安情報</span><a href='safe.html' class='btn btn-primary float-right m-5' style='color: #f0f8ff;'>詳細</a>";
 
 
    //   }
    // var msgfunc4 = function(){
 
    //     var message = document.getElementById("message4");
    //     message.innerHTML = "<span class='msg'>交通アクセス情報</span><a href='convenient.html' class='btn btn-primary float-right m-5' style='color: #f0f8ff;'>詳細</a>";
 
 
    //   }
    // var msgfunc5 = function(){
 
    //     var message = document.getElementById("message5");
    //     message.innerHTML = "<span class='msg'>津田沼の公園やゲームセンターを紹介</span><a href='play.html' class='btn btn-primary float-right m-5' style='color: #f0f8ff;'>詳細</a>";
 
 
    //   }
    
    // var elem1 = document.getElementById('elem1');
    // elem1.addEventListener('click',function(){
        
    //   anime({
    //     targets: elem1,
    //     translateX: 0,
    //     backgroundColor:"skyblue",
    //     //scaleX: 1.2,
    //    rotate: '1turn',
    //     borderRadius:"10px",
    //     easing: 'easeOutCubic'
    //   })              
    // })
    // var elem2 = document.getElementById('elem2');
    // elem2.addEventListener('click',function(){
        
    //   anime({
    //     targets: elem2,
    //     translateX: 0,
    //     backgroundColor:"skyblue",
    //     // scaleX: 1.2,
    //    rotate: '1turn',
    //     borderRadius:"10px",
    //     easing: 'easeOutCubic'
    //   })              
    // })
    // var elem3 = document.getElementById('elem3');
    // elem3.addEventListener('click',function(){
        
    //   anime({
    //     targets: elem3,
    //     translateX: 0,
    //     backgroundColor:"skyblue",
    //     // scaleX: 1.2,
    //    rotate: '1turn',
    //     borderRadius:"10px",
    //     easing: 'easeOutCubic'
    //   })              
    // })
    // var elem4 = document.getElementById('elem4');
    // elem4.addEventListener('click',function(){
        
    //   anime({
    //     targets: elem4,
    //     translateX: 0,
    //     backgroundColor:"skyblue",
    //     // scaleX: 1.2,
    //    rotate: '1turn',
    //     borderRadius:"10px",
    //     easing: 'easeOutCubic'
    //   })              
    // })
    // var elem5 = document.getElementById('elem5');
    // elem5.addEventListener('click',function(){
        
    //   anime({
    //     targets: elem5,
    //     translateX: 0,
    //     backgroundColor:"skyblue",
    //     // scaleX: 1.2,
    //     rotate: '1turn',
    //     borderRadius:"10px",
    //     easing: 'easeOutCubic'
    //   })              
    // })
    // var elem6 = document.getElementById('elem6');
    // elem6.addEventListener('click',function(){
        
    //   anime({
    //     targets: elem6,
    //     translateX: 0,
    //     backgroundColor:"skyblue",
    //     // scaleX: 1.2,
    //     rotate: '1turn',
    //     borderRadius:"10px",
    //     easing: 'easeOutCubic'
    //   })              
    // })
    // var elem7 = document.getElementById('elem7');
    // elem7.addEventListener('click',function(){
        
    //   anime({
    //     targets: elem7,
    //     translateX: 0,
    //     backgroundColor:"skyblue",
    //     // scaleX: 1.2,
    //     rotate: '1turn',
    //     borderRadius:"10px",
    //     easing: 'easeOutCubic'
    //   })              
    // })
    // var elem7 = document.getElementById('elem7');
    // elem7.addEventListener('click',function(){
        
    //   anime({
    //     targets: elem7,
    //     translateX: 0,
    //     backgroundColor:"skyblue",
    //     // scaleX: 1.2,
    //     rotate: '1turn',
    //     borderRadius:"10px",
    //     easing: 'easeOutCubic'
    //   })              
    // })
</script>
</body>
</html>