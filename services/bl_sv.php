<div class="home_sosh lazy_bag" data-src="/assets/img/bag/rabochiy-den.jpg">
	<div class="home_sosh_bag"></div>
	<div class="bl_c">
		<div class="home_sosh_c">
			<div class="head_c">
				<h2><?=t::w('Contact us')?></h2>
			</div>
			<div class="home_sosh_cd">
				<?php if ($site[whatsapp] != null): ?>
					<a target="_blank" href="https://wa.me/<?=$site[whatsapp]?>" class="home_sosh_i"><div class="btn"><i class="fab fa-whatsapp"></i><span>Whatsapp</span></div></a>
				<?php endif ?>
				<?php if ($site[telegram] != null): ?>
					<a href="" class="home_sosh_i"><div class="btn"><i class="fab fa-telegram-plane"></i><span>Telegram</span></div></a>
				<?php endif ?>
				<?php if ($site[instagram] != null): ?>
					<a href="" class="home_sosh_i"><div class="btn"><i class="fab fa-instagram"></i><span>Instagram</span></div></a>
				<?php endif ?>
				<?php if ($site[phone] != null): ?>
					<a target="_blank" href="tel:<?=$site[phone]?>" class="home_sosh_i"><div class="btn"><i class="fas fa-phone-alt"></i><span><?=$site[phone_view]?></span></div></a>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>