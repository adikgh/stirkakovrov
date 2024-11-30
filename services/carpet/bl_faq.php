<div class="home_faq">
	<div class="bl_c">
		<div class="home_faq_c">
			<div class="head_c">
				<h2><?=t::w('Answers to frequently asked questions from our customers?')?></h2>
			</div>
			<div class="home_faq_cd">

				<?php
					$sql = db::query("select * from `blocks` where type = 'faq'");
			        while($ana = mysqli_fetch_array($sql)){
						echo '
							<div class="home_faq_cdi">
								<div class="home_faq_cdh">
									<span>'.($lang=='kz'?$ana[txt1_kz]:$ana[txt1_ru]).'</span>
								</div>
								<div class="home_faq_cdt">
									<span>'.($lang=='kz'?$ana[txt2_kz]:$ana[txt2_ru]).'</span>
								</div>
							</div>
						';
					}
				?>

			</div>
		</div>
	</div>
</div>