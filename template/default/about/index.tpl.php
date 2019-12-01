<?
include(TPLURL."/head.tpl.php");
?>

<link rel="stylesheet" type="text/css" href="<?=TPLURL?>/css/deal.css">

<div class="user-deal" style="min-height:300px; line-height:30px; font-size:15px">
    <div class="title">《<?=$article['title']?>》</div>

<?=$article['content']?>

</div>

<?
include(TPLURL."/foot.tpl.php");
?>