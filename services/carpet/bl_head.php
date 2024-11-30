<div class="cont_n1 lazy_bag" data-src="/assets/img/bag/photo.jpg">
	<div class="bl_c">
		<div class="conti_n1">
			<h2><?=t::w('Professionally clean the carpet from any stains')?></h2>
			<div class="conti_nn">
				<input type="tel" class="cl_phone phone" placeholder="+7 (___) ___-__-__" data-lenght="11" data-val="" data-pr="0">
				<div class="btn bl_btn btn_phone"><?=t::w('order cleaning')?></div>
				<div class="conti_nn_sb lazy_bag" data-src="/assets/img/bag/photo.png"></div>
				<div class="conti_nn_abt"><?=t::w('Get 10% discount and free shipping')?></div>
			</div>
		</div>
	</div>
	<div class="conti_n2">

		<?php
			$sql = db::query("select * from `blocks` where type = 'nnn'");
	      while($ana = mysqli_fetch_array($sql)){
				echo '
					<div class="conti_n2i">
						<p>'.($lang=='kz'?$ana[txt1_kz]:$ana[txt1_ru]).'</p>
						<span>'.($lang=='kz'?$ana[txt2_kz]:$ana[txt2_ru]).'</span>
					</div>
				';
			}
		?>
		
		<div class="conti_n2_abs"><?=t::w('* Now in Kazakhstan')?></div>
	</div>
</div>