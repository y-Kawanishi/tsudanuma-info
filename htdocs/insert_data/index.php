<!DOCTYPE html>
<html>
<head>
    <title><?=$title?>：店追加</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script type="text/javascript" src='../javascripts/insertData_post.js'></script>
    <link rel='stylesheet' href='../css/insertdata.css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src='../javascripts/imageupload.js'></script>
</head>
<body class="w-50" style="margin:auto">
    <div id="app" role="main" class="container">
        <main class="form-signin">
        <head>
            <h1><?=$title?>：店追加</h1>
        </head>
        <form method="POST" action="./post.php" enctype="multipart/form-data">
        <p><input type="radio" name="checkbox" value="name" v-on:click="nameSwitch('name')" checked>名前</p>
        <p><input type="radio" name="checkbox" value="brand" v-on:click="nameSwitch('brand')">ブランド名・店舗名</p>
            <input type="hidden" name="item" value="<?= $item ?>">
            <label v-bind:class="class1" for="name">名前</label>
            <input v-bind:class="class1" type="text" name="name" id="name" class="form-control" placeholder="Name">
            <label v-bind:class="class2" for="brand">ブランド名</label>
            <input v-bind:class="class2" type="text" name="brand" id="brand" class="form-control" placeholder="Brand">
            <label v-bind:class="class2" for="branch">店舗名</label>
            <input v-bind:class="class2" type="text" name="branch" id="branch" class="form-control" placeholder="Branch">
            <label for="address">住所</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
            <label for="access">経路</label>
            <input type="text" name="access" id="access" class="form-control" placeholder="Access" required>
            <label for="start_h">営業時間</label><br>
            <input type="number" name="start_h" id="start_h" class="form-control time-area" placeholder="Start hour" required>
            <label for="start_m">:</label>
            <input type="number" name="start_m" id="start_m" class="form-control time-area" placeholder="Start minute" required>
            <label for="end_h">〜</label>
            <input type="number" name="end_h" id="end_h" class="form-control time-area" placeholder="End hour" required>
            <label for="end_m">:</label>
            <input type="number" name="end_m" id="end_m" class="form-control time-area" placeholder="End minute" required>
            <br><label for="tell">電話番号</label><br>
            <input type="number" name="tell1" id="tell1" class="form-control tell-area" placeholder="Tell1" required>
            <label for="tell2">-</label>
            <input type="number" name="tell2" id="tell2" class="form-control tell-area" placeholder="Tell2" required>
            <label for="tell3">-</label>
            <input type="number" name="tell3" id="tell3" class="form-control tell-area" placeholder="Tell3" required>
            <input type="text" name="map" id="map" class="form-control" placeholder="map" required>
            <input id="pic" type="file" name="pic" accept="image/*" required>
            <div id="preview"></div>
            <input type="submit" value="送信" class="mt-2 w-100 btn btn-lg btn-primary">
        </form>
        </main>
    </div>
</body>
</html>
