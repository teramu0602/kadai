<?php
#mktime(時、分、秒、月、日、年、サマータイムかどうか)
  $time = mktime(8);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(7, 30, 20,);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(0, 0, 0, 1, 1, 2020);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');