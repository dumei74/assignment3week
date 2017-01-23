<?php
//2week
date_default_timezone_set('Asia/Tokyo');

  $time = intval(date('H'));
?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
  <meta cherset="utf-8">
  <title>NexSeed Diary</title>
   <link rel="stylesheet" href="assignment3week.css">
 </head>
 <body>
 <font size="5" color="yellow" background-color="aqua">
  <div align="center" style="background-color:aqua">NexSeed Diary</div>
 </font><br>

 <div style="float: left">
 <p style="font-size: 15px">
   <?php   if (6<= $time && $time <=11) {
  echo 'おはようございます、ゲストさん。';
  } ?>








   <?php endif; ?>
 </p>
 <hr>
 <p id="index">2016年10月の日記</p><hr>
 <p id="index">2016年09月の日記</p><hr>
 <p id="index">2016年08月の日記</p><hr>
 </div>

 <div style="float: center">
 <table border="1" width="75%" height="50">
   <tbody>
     <tr>
       <td>
         <p><u id="comment">こんにちは</u><br>
         <span style="font-size: 5px">2016年10月10日</span></p>
       </td>
     </tr>
     <tr>
       <td>
         <p><u id="comment">こんにちは</u><br>
         <span style="font-size: 5px">2016年10月10日</span></p>
       </td>
     </tr>
     <tr>
       <td>
         <p><u id="comment">こんにちは</u><br>
         <span style="font-size: 5px">2016年10月10日</span></p>
       </td>
     </tr>
     <tr>
       <td>
         <p><u id="comment">こんにちは</u><br>
         <span style="font-size: 5px">2016年10月10日</span></p>
       </td>
     </tr>
     <tr>
       <td>
         <p><u id="comment">こんにちは</u><br>
         <span style="font-size: 5px">2016年10月10日</span></p>
       </td>
     </tr>
     <tr>
       <td>
         <p><u id="comment">こんにちは</u><br>
         <span style="font-size: 5px">2016年10月10日</span></p>
       </td>
     </tr>
   </tbody>
 </table>
 </div>

 <br clear="both">
 <font color="white">
  <div align="center" style="background-color:aqua">
    Copyright @ NexSeed inc All Rights Reserved.
  </div>
 </font>
 </body>
 </html>
