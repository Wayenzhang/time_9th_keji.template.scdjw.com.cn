<?php echo 'Theme by Time';exit;?>
<!--{if $_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']}-->
	<div class="cl" style="width: {$_G[forum][modrecommend][imagewidth]}px; margin: 0 auto; float:left;">
		<script type="text/javascript">
		var slideSpeed = 5000;
		var slideImgsize = [{$_G[forum][modrecommend][imagewidth]},{$_G['forum'][modrecommend][imageheight]}];
		var slideBorderColor = '{$_G['style']['specialborder']}';
		var slideBgColor = '{$_G['style']['commonbg']}';
		var slideImgs = new Array();
		var slideImgLinks = new Array();
		var slideImgTexts = new Array();
		var slideSwitchColor = '{$_G['style']['tabletext']}';
		var slideSwitchbgColor = '{$_G['style']['commonbg']}';
		var slideSwitchHiColor = '{$_G['style']['specialborder']}';
		<!--{loop $_G['forum']['recommendlist']['images'] $k $imginfo}-->
			slideImgs[<!--{echo $k+1}-->] = '$imginfo[filename]';
			slideImgLinks[<!--{echo $k+1}-->] = 'forum.php?mod=viewthread&tid=$imginfo[tid]';
			slideImgTexts[<!--{echo $k+1}-->] = '$imginfo[subject]';
		<!--{/loop}-->
		</script>
		<script language="javascript" type="text/javascript" src="{$_G[setting][jspath]}forum_slide.js?{VERHASH}"></script>
	</div>
<!--{/if}-->
<div class="recommend cl"{if $_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']} style="margin-left: {$_G[forum][modrecommend][imagewidth]}px; padding-left: 20px;"{/if}>
	<!--{eval unset($_G['forum']['recommendlist']['images']);}-->
	<ul class="xl{if !$_G['forum']['allowside']} xl2{/if} cl">
	<!--{loop $_G['forum']['recommendlist'] $rtid $recommend}-->
		<li class="f14">
			<a href="forum.php?mod=viewthread&tid=$rtid" $recommend[subjectstyles] target="_blank">$recommend[subject]</a>
		</li>
	<!--{/loop}-->
	</ul>
</div>