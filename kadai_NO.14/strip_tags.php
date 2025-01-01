<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> は許可します
echo strip_tags($text, '<p><a href>');

// PHP 7.4.0 以降では、上の行は以下のように書けます:
// echo strip_tags($text, ['p', 'a']);
?>