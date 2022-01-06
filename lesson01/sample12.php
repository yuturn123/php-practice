<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>

<?php if ($time < 15): ?>
    <p>* 営業時間外です</p>
<?php else:  ?>
    <p>ようこそ</p>
<?php endif; ?>
<?php
$s = 'アイウエオ';
if ($s !== ''):
    echo '$sには文字が入っています';
endif;
?>
<br>
<?php
$x = 1;
if ($x): // $x !== 0
    echo '$xは0ではありません';
endif;

$y = 0;
if (!$y): // $y === 0
    echo '<br>$yは0です';
endif;
?>
