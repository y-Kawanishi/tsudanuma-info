<?php
  require_once("../account/loginstatus.php");
  include("./header.php"); 
?>
<link rel="stylesheet" href="../css/buy.css">
<div class="box3">
        <p>暮らす</p>
      </div>
      <p class="text">習志野市の公民館・図書館・コミュニティセンター等 一覧を掲載<br><a href="./city.php" class="btn btn-primary kuwashiku">詳しくはこちら</a></p>
      <div class="profile">
        <p>【公民館】</p>
        <ul class="card-link">
          <li><a class="card-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
              <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
            </svg> 中央公民館</a>
          </li>
          <li><a class="card-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
              <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
            </svg> 菊田公民館</a>
          </li>
          <li><a class="card-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
              <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
            </svg> 実花公民館</a>
          </li>
          <li><a class="card-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
              <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
            </svg> 袖ヶ浦公民館</a>
          </li>
          <li><a class="card-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
              <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
            </svg> 谷津公民館</a>
          </li>
          <li><a class="card-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
              <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
            </svg> 新習志野公民館</a>
          </li>
        </ul>
      </div>
        <div class="profile">
            <p>【図書館】</p>
            <ul class="card-link">
              <li><a class="card-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                  <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg> 中央図書館</a>
              </li>
              <li><a class="card-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                  <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg> 新習志野図書館</a>
              </li>
              <li><a class="card-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                  <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg> 東習志野図書館</a>
              </li>
              <li><a class="card-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                  <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg> 谷津図書館</a>
              </li>
            </ul>
          </div>
          <div class="profile">
            <p>【コミュニティセンター等】</p>
            <ul class="card-link">
              <li><a class="card-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                  <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg> 谷津コミュニティセンター</a>
              </li>
              <li><a class="card-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                  <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg> 東習志野コミュニティセンター</a>
              </li>
              <li><a class="card-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                  <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg> 実籾コミュニティセンター</a>
              </li>
              <li><a class="card-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                  <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                </svg> 市民プラザ大久保</a>
              </li>
            </ul>
          </div>
      <p class="text-l">習志野市のゴミ出しの基本ルールについて<br><a href="https://www.city.narashino.lg.jp/kurashi/gomi/gomi/r2dashikata.files/R2dashikata.pdf" class="btn btn-primary kuwashiku">詳しくはこちら</a></p>
      <p class="s">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle-fill" viewBox="0 0 16 16">
          <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.92 5.92 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z"/>
        </svg> 出し方のルールを守りましょう
      </p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>決められた曜日に出す</th>
            <td>当日（夜明けから午前8時まで）</td>
          </tr>
          <tr>
            <th>大きさが50センチメートル未満であること</th>
            <td>たて、よこ、高さのいずれか一辺が50センチメートル以上で<br>2メートル以下のものは粗大ごみになります</td>
          </tr>
          <tr>
            <th>体積が45リットル以下か確かめる</th>
            <td>一辺が50センチメートル未満でも、たて、よこ、高さをかけあわせて、<br>45リットルを超えるものも粗大ごみです</td>
          </tr>
          <tr>
            <th>決められた場所に出す</th>
            <td>必ず「ごみ集積所」に出してください</td>
          </tr>
          <tr>
            <th>分別して出す</th>
            <td>ごみ・資源物は、種類ごとに収集や処理方法が異なります<br>決められた分別で出してください</td>
          </tr>
          <tr>
            <th>台風・積雪・災害時</th>
            <td>天候や地震等の災害時には、やむを得ず収集を中止する場合もあります</td>
          </tr>
          <tr>
            <th>集積所は清潔に</th>
            <td>ごみ集積所は、収集するまでの一時的な排出場所で、ごみ捨て場ではありません<br>利用する皆さんで清潔にしてください</td>
          </tr>
        </thead>
      </table>
      <p class="s">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle-fill" viewBox="0 0 16 16">
          <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.92 5.92 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z"/>
        </svg> ごみ集積所の管理
      </p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>ごみ集積所の維持・管理は、町会などの利用者の責任で行ってください。<br>カラスによって集積所が荒らされる場合、カラス被害を防ぐために、次のような方法があります</th>
          </tr>
          <tr>
            <td>ごみ袋の口をしっかり結んで決められた時間帯に出す</td>
          </tr>
          <tr>
            <td>ごみ袋にネットをしっかりかぶせる</td>
          </tr>
          <tr>
            <td>ネットの網目が細かいものを使用する</td>
          </tr>
          <tr>
            <td>カラスの餌となる生ごみを袋の真ん中に寄せて捨てる</td>
          </tr>
        </thead>
      </table>
      <p class="s">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle-fill" viewBox="0 0 16 16">
          <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.92 5.92 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z"/>
        </svg> 市指定ごみ袋について
      </p>
      <table class="table gomi">
        <thead class="thead-dark">
          <tr>
            <th>燃えるごみ</th>
            <td>ベージュ色30リットル、45リットル</td>
          </tr>
          <tr>
            <th>燃えないごみ</th>
            <td>市指定のゴミ袋、または透明・半透明の袋</td>
          </tr>
          <tr>
            <th>資源物・有害ごみ</th>
            <td>透明・半透明の袋</td>
          </tr>
          <tr>
            <td></td>
            <td><img src="../img/ゴミ袋.jpg" alt="ゴミ袋" width="276" height="370"></td>
          </tr>
        </thead>
      </table>
      <p class="s">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle-fill" viewBox="0 0 16 16">
          <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.92 5.92 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z"/>
        </svg> 粗大ごみの出し方
      </p>
      <table class="table gomi">
        <thead class="thead-dark">
          <tr>
            <th>①粗大ごみ受付センターへ収集を依頼する</th>
          </tr>
          <tr>
            <td>
              粗大ごみ受付センター：047-453-7979<br>
              受付：月～金曜日　09:00-16:00<br><br>
              ①電話申込（１日１回５点まで）※市ホームページからも申込が出来ます<br>
              ②処理券を購入（１枚６７０円）※過不足なく取扱店にて購入して下さい<br>
              ③指定場所へ出す（指定日の朝８：３０までに指定場所にお出し下さい）
            </td>
          </tr>
          <tr>
            <th>②直接クリーンセンターへ持ち込む</th>
          </tr>
          <tr>
            <td>
              問合せ先：クリーン推進課（習志野市芝園3-2-1）<br>
              TEL：047-451-1793<br>
              料金：品目、数量によらず10Kgにつき250円<br>
              時間：9:00-11:30、13:00-16:00<br><br>
              注意事項<br>
              住所確認が出来るものをお持ち下さい。事前の電話による申し込みは不要です。
            </td>
          </tr>
        </thead>
      </table>
      <p class="s">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle-fill" viewBox="0 0 16 16">
          <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.92 5.92 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z"/>
        </svg> 地区別収集曜日のご案内
      </p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>地区名</th>
            <th>燃えるごみ 週3回</th>
            <th>燃えないごみ 月2回</th>
            <th>資源物 週1回</th>
            <th>有害ごみ 月1回</th>
          </tr>
          <tr>
            <td>秋津</td>
            <td>月・水・金</td>
            <td>第1・3土曜日</td>
            <td>木</td>
            <td>第2土曜日</td>
          </tr>
          <tr>
            <td>泉町</td>
            <td>火・木・土</td>
            <td>第1・3月曜日</td>
            <td>金</td>
            <td>第2月曜日</td>
          </tr>
          <tr>
            <td>大久保1丁目・2丁目</td>
            <td>火・木・土</td>
            <td>第1・3金曜日</td>
            <td>月</td>
            <td>第2金曜日</td>
          </tr>
          <tr>
            <td>大久保3丁目・4丁目</td>
            <td>火・木・土</td>
            <td>第1・3月曜日</td>
            <td>水</td>
            <td>第2月曜日</td>
          </tr>
          <tr>
            <td>大久保3丁目・4丁目</td>
            <td>火・木・土</td>
            <td>第1・3月曜日</td>
            <td>水</td>
            <td>第2月曜日</td>
          </tr>
          <tr>
            <td>香澄</td>
            <td>月・水・金</td>
            <td>第2・4火曜日</td>
            <td>土</td>
            <td>第1火曜日</td>
          </tr>
          <tr>
            <td>奏の杜</td>
            <td>月・水・金</td>
            <td>第1･3木曜日</td>
            <td>火</td>
            <td>第2木曜日</td>
          </tr>
          <tr>
            <td>鷺沼</td>
            <td>月・水・金</td>
            <td>第2・4土曜日</td>
            <td>木</td>
            <td>第1土曜日</td>
          </tr>
          <tr>
            <td>鷺沼台</td>
            <td>火・木・土</td>
            <td>第1・3金曜日</td>
            <td>月</td>
            <td>第2金曜日</td>
          </tr>
          <tr>
            <td>鷺沼台</td>
            <td>火・木・土</td>
            <td>第1・3金曜日</td>
            <td>月</td>
            <td>第2金曜日</td>
          </tr>
          <tr>
            <td>新栄</td>
            <td>火・木・土</td>
            <td>第2・4月曜日</td>
            <td>水</td>
            <td>第1月曜日</td>
          </tr>
          <tr>
            <td>袖ケ浦</td>
            <td>月・水・金</td>
            <td>第1・3火曜日</td>
            <td>木</td>
            <td>第2火曜日</td>
          </tr>
          <tr class="tsu">
            <td>津田沼1丁目・2丁目・3丁目</td>
            <td>月・水・金</td>
            <td>第2・4火曜日</td>
            <td>土</td>
            <td>第1火曜日</td>
          </tr>
          <tr class="tsu">
            <td>津田沼4丁目・5丁目・6丁目・7丁目</td>
            <td>月・水・金</td>
            <td>第1・3土曜日</td>
            <td>木</td>
            <td>第2土曜日</td>
          </tr>
          <tr>
            <td>花咲</td>
            <td>火・木・土</td>
            <td>第2・4水曜日</td>
            <td>月</td>
            <td>第1水曜日</td>
          </tr>
          <tr>
            <td>東習志野1丁目・2丁目・3丁目</td>
            <td>火・木・土</td>
            <td>第2・4水曜日</td>
            <td>金</td>
            <td>第1水曜日</td>
          </tr>
          <tr>
            <td>東習志野4丁目・5丁目・6丁目・7丁目・8丁目</td>
            <td>火・木・土</td>
            <td>第1・3水曜日</td>
            <td>金</td>
            <td>第2水曜日</td>
          </tr>
          <tr>
            <td>藤崎</td>
            <td>月・水・金</td>
            <td>第2・4木曜日</td>
            <td>土</td>
            <td>第1木曜日</td>
          </tr>
          <tr>
            <td>実籾</td>
            <td>火・木・土</td>
            <td>第2・4月曜日</td>
            <td>水</td>
            <td>第1月曜日</td>
          </tr>
          <tr>
            <td>実籾本郷</td>
            <td>火・木・土</td>
            <td>第2・4月曜日</td>
            <td>水</td>
            <td>第1月曜日</td>
          </tr>
          <tr>
            <td>本大久保</td>
            <td>火・木・土</td>
            <td>第2・4金曜日</td>
            <td>月</td>
            <td>第1金曜日</td>
          </tr>
          <tr>
            <td>屋敷</td>
            <td>火・木・土</td>
            <td>第1・3月曜日</td>
            <td>水</td>
            <td>第2月曜日</td>
          </tr>
          <tr>
            <td>谷津1丁目・2丁目・3丁目・4丁目・7丁目</td>
            <td>月・水・金</td>
            <td>第1・3木曜日</td>
            <td>火</td>
            <td>第2木曜日</td>
          </tr>
          <tr>
            <td>谷津5丁目・6丁目</td>
            <td>月・水・金</td>
            <td>第2・4土曜日</td>
            <td>火</td>
            <td>第1土曜日</td>
          </tr>
          <tr>
            <td>谷津町</td>
            <td>月・水・金</td>
            <td>第2・4土曜日</td>
            <td>火</td>
            <td>第1土曜日</td>
          </tr>
        </thead>
      </table>
      <p class="s">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle-fill" viewBox="0 0 16 16">
          <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.92 5.92 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z"/>
        </svg> 問合せ先
      </p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>名称</th>
            <td>習志野市役所</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>習志野市芝園3-2-1</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td>047-453-5577</td>
          </tr>
          <tr>
            <th>FAX</th>
            <td>047-408-9581</td>
          </tr>
        </thead>
      </table>
    </div>
<?php include("./footer.php"); ?>