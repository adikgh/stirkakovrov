<div class="home_who">
	<div class="bl_c">
		<div class="home_who_c">
			<div class="head_c">
				<h2><?=t::w('How do we do carpet cleaning?')?></h2>
			</div>

			<div class="home_who_cd">
				<div class="home_who_i">

					<?php
						$sql = db::query("select * from `blocks` where type = 'who' and number > 0 and number < 4");
				      while($ana = mysqli_fetch_array($sql)){
							echo '
								<div class="home_who_ic">
									<div class="home_who_ict">
										'.($lang=='kz'?$ana[txt1_kz]:$ana[txt1_ru]).'
									</div>
									<div class="home_who_ici lazy_bag" data-src="/assets/img/icon/'.$ana[img].'"></div>
								</div>
							';
						}
					?>

				</div>
				<div class="home_who_i">
					<div class="home_who_ins lazy_bag" data-src="/assets/img/bag/_1.png"></div>
					<div class="home_who_inb"></div>
				</div>
				<div class="home_who_i">

					<?php
						$sql = db::query("select * from `blocks` where type = 'who' and number > 3");
				      while($ana = mysqli_fetch_array($sql)){
							echo '
								<div class="home_who_ic">
									<div class="home_who_ici lazy_bag" data-src="/assets/img/icon/'.$ana[img].'"></div>
									<div class="home_who_ict">
										'.($lang=='kz'?$ana[txt1_kz]:$ana[txt1_ru]).'
									</div>
								</div>
							';
						}
					?>

				</div>
			</div>
		</div>
	</div>
</div>