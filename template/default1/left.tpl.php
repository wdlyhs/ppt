<div class="left1">
<div class="left1-1">
<h4><?=$top_row['title']?></h4>
<p><?=$top_row['etitle']?></p>
</div>
<ul>
<?

$types=get_types($duoduo,$top_id);
foreach ($types as $row){
?>

<li><a class="<?=($_GET['cid']==$row['id'])?"on":""?>" href="<?=list_url($duoduo,$row['id'])?>"><?=$row['title']?></a></li>
<? }?>
</ul>
</div>