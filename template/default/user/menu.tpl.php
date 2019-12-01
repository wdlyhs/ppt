<div class='p-type'>
<div class='wlimit'>
    
    <?
    $menus=get_user_menu();
	foreach  ($menus as $row){ 
	?>
    <a href="<?=$row['url']?>"><div class='p-box <?=(ACT==$row['tag'])?"p-chose":""?>'><?=$row['title']?></div></a>
    <? }?>

     <!--   <a href="/index/usercenter/upload"><div class='p-box '>入驻赚钱</div></a>-->
    
</div>
</div>