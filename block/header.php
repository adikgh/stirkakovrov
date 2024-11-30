<!DOCTYPE html>
<html lang="<?=$lang?>" id="html" class="html">
<head>

	<? include 'head.php' ?>

</head>
<body>

	<? // include "preloader.php"; ?>
	
	<!-- header -->
	<div class="header">
		<div class="bl_c">
			<div class="header_con">
				<div class="header_mli">
					<div class="logo">
						<div class="logo_img lazy_bag" data-src="/assets/img/logo/logo1.png"></div>
					</div>
				</div>
				<div class="header_rb">
					<div>
						<i class="fal fa-clock"></i>
					</div>
					<div>
						<p><?=t::w('at 9:00 to 20:00')?></p>
					</div>
				</div>
				<div class="header_rb">
					<div>
						<i class="fal fa-headset"></i>
					</div>
					<div>
						<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
						<a href="tel:<?=$site['phone2']?>"><?=$site['phone2_view']?></a>
					</div>
				</div>
				<div class="menu_c">

					<div class="header_btn">
						<div class="btn">
							<i class="fas fa-phone"></i>
							<span><?=t::w('Request a call')?></span>
						</div>
					</div>

					<a href="/?lang=<?=($lang=='ru'?'kz':'ru')?>">
						<div class="header_lang">
							<div class="bl_lang <?=($lang=='kz'?'bl_lang_act':'')?>">
								<div class="bl_langm">ҚАЗ</div>
							</div>
							<div class="bl_lang <?=($lang=='ru'?'bl_lang_act':'')?>">
								<div class="bl_langm">РУС</div>
							</div>
						</div>
					</a>

				</div>
			</div>
		</div>
	</div>