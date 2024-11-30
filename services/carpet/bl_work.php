<div class="home_we">
	<div class="bl_c">
		<div class="home_we_c">
			<div class="head_c">
				<h2><?=t::w('How we are working?')?></h2>
			</div>

			<div class="home_we_con">

				<?php
					$sql = db::query("select * from `blocks` where type = 'how'");
			      while($ana = mysqli_fetch_array($sql)){
						echo '
							<div class="home_we_item">
								<div class="home_we_img">
									<div class="home_we_number">'.$ana[number].'</div>
									'.$ana[img].'
								</div>
								<div class="home_we_head">'.($lang=='kz'?$ana[txt1_kz]:$ana[txt1_ru]).'</div>
								<div class="home_we_disc">'.($lang=='kz'?$ana[txt2_kz]:$ana[txt2_ru]).'</div>
							</div>
						';
					}
				?>
				
			</div>
		</div>
	</div>
</div>