<div class="home_dav">
	<div class="bl_c">
		<div class="home_dav_c">
			<div class="head_c">
				<h2><?=t::w('6 reasons why you should work with us')?></h2>
			</div>
			<div class="home_dav_cn">

				<?php
			      $san = 1;
					$sql = db::query("select * from `blocks` where type = 'dav'");
			      while($ana = mysqli_fetch_array($sql)){
						echo '
							<div class="home_dav_ci">
								<div class="home_dav_name">
									<div class="home_dav_s">'.$san.'</div>
									<div class="home_dav_sn">'.($lang=='kz'?$ana[txt1_kz]:$ana[txt1_ru]).'</div>
								</div>
								<div class="home_dav_txt">
									'.($lang=='kz'?$ana[txt2_kz]:$ana[txt2_ru]).'
								</div>
							</div>
						';
						$san++;
					}
				?>

			</div>
		</div>
	</div>
</div>