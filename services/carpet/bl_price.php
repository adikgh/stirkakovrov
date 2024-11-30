<div class="home_tarif">
	<div class="bl_c">
		<div class="home_tarif_c">
			<div class="head_c">
				<h2><?=t::w('Choose a suitable tariff')?></h2>
			</div>
			<div class="home_tarif_cn">

				<?php
					$sql = db::query("select * from `price` where type = 'carpet'");
			      while($ana = mysqli_fetch_array($sql)) {
						echo '
							<div class="home_tarifc_ci lazy_bag" data-src="/assets/img/bag/'.$ana[img].'">
								<div class="home_tarifc_ci_bag">
									<div class="home_tarif_ci_name">'.($lang=='kz'?$ana[name_kz]:$ana[name_ru]).'</div>
									<div class="home_tarif_ci_txt">'.($lang=='kz'?$ana[txt_kz]:$ana[txt_ru]).'</div>
									<div class="home_tarif_ci_price">
										<span class="home_tarif_ci_price_o">'.$ana[price].' тг/м<sup>2</sup></span>
										<span class="home_tarif_ci_price_n">'.$ana[old_price].' тг/м<sup>2</sup></span>
									</div>
									<div class="home_tarif_ci_btn">
										<div class="btn">'.t::w('Order').'</div>
									</div>
									<div class="home_tarif_ci_clc">
										<span>'.t::w('Learn more').'</span>
									</div>
								</div>
							</div>
						';
					}
				?>

			</div>
		</div>
	</div>
</div>