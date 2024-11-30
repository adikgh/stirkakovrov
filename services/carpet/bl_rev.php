<div class="block_n back_gr">
	<div class="block_rev_is"><i class="fal fa-quote-left"></i></div>
	<div class="bl_c">
		<div class="head_c">
			<h2><?=t::w('What clients say about us:')?></h2>
		</div>

		<div class="block_rev">
			<div class="swiper-container gallery-top">
			    <div class="swiper-wrapper">

					<?php
						$sql = db::query("select * from `review` order by id desc");
				      while($ana = mysqli_fetch_array($sql)){
							echo '
								<div class="swiper-slide">
									<div class="block_revs">
										<div class="block_revs_nm">'.$ana[name].'</div>
										<div class="block_revs_txt">'.($lang=='kz'?$ana[txt_kz]:$ana[txt_ru]).'</div>
									</div>
						      </div>
							';
						}
					?>

			    </div>
			    <div class="swiper-button-next"><i class="fal fa-chevron-right"></i></div>
			    <div class="swiper-button-prev"><i class="fal fa-chevron-left"></i></div>
			</div>
			<div class="swiper-container gallery-thumbs">
			    <div class="swiper-wrapper">
			      
			      <?php
						$sql = db::query("select * from `review` order by id desc");
				        while($ana = mysqli_fetch_array($sql)){
							echo '
								<div class="swiper-slide">
							    	<div class="block_revimg">
							    		<div class="block_revimgs lazy_bag" data-src="/assets/img/review/'.$ana[logo].'"></div>
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