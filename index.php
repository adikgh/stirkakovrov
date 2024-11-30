<? include "config/core.php";
	
	$menu = 'home';

	// header('location: services/carpet/');
?>
<? include "block/header.php"; ?>

	<!-- top block -->
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
			<?
				$sql = db::query("select * from `blocks` where type = 'nnn'");
				while($ana = mysqli_fetch_array($sql)){
					echo '
						<div class="conti_n2i">
							<p>'.($lang=='kz'?$ana['txt1_kz']:$ana['txt1_ru']).'</p>
							<span>'.($lang=='kz'?$ana['txt2_kz']:$ana['txt2_ru']).'</span>
						</div>
					';
				}
			?>
		</div>
	</div>

	<!-- 6 причин почему стоит работать с нами -->
	<div class="home_dav">
		<div class="bl_c">
			<div class="home_dav_c">
				<div class="head_c">
					<h2><?=t::w('6 reasons why you should work with us')?></h2>
				</div>
				<div class="home_dav_cn">

					<?
						$san = 1;
						$sql = db::query("select * from `blocks` where type = 'dav'");
						while($ana = mysqli_fetch_array($sql)){
							echo '
								<div class="home_dav_ci">
									<div class="home_dav_name">
										<div class="home_dav_s">'.$san.'</div>
										<div class="home_dav_sn">'.($lang=='kz'?$ana['txt1_kz']:$ana['txt1_ru']).'</div>
									</div>
									<div class="home_dav_txt">
										'.($lang=='kz'?$ana['txt2_kz']:$ana['txt2_ru']).'
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

	<!-- Как мы работаем? -->
	<div class="home_we">
		<div class="bl_c">
			<div class="home_we_c">
				<div class="head_c">
					<h2><?=t::w('How we are working?')?></h2>
				</div>

				<div class="home_we_con">

					<?
						$sql = db::query("select * from `blocks` where type = 'how'");
						while($ana = mysqli_fetch_array($sql)){
							echo '
								<div class="home_we_item">
									<div class="home_we_img">
										<div class="home_we_number">'.$ana['number'].'</div>
										'.$ana['img'].'
									</div>
									<div class="home_we_head">'.($lang=='kz'?$ana['txt1_kz']:$ana['txt1_ru']).'</div>
									<div class="home_we_disc">'.($lang=='kz'?$ana['txt2_kz']:$ana['txt2_ru']).'</div>
								</div>
							';
						}
					?>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Форма -->
	<div class="bl_zaiv">
		<div class="bl_zaiv_bag lazy_bag" data-src="/assets/img/bag/631df-wl2uqlmgrlk.jpg">
			<div class="bl_zaiv_bags"></div>
		</div>
		<div class="bl_zaiv_bag2"></div>
		<div class="bl_zaiv_bag3"></div>
		<div class="bl_zaiv_bag4"></div>

		<div class="bl_c">
			<div class="bl_zaiv_c">
				<div class="bl_zaiv_cl">
					<h3><?=t::w('Leave a request right now and get a 10% discount on your first cleaning')?></h3>
					<p><?=t::w('We also have a savings system for our regular customers - every 10th cleaning is done free of charge!')?></p>
				</div>
				<div class="bl_zaiv_cr">
					<div class="form">
						<div class="bl_form">
							<input class="name" type="text" placeholder="<?=t::w('Your name')?>" data-lenght="2" data-pr="0">
							<div class="bl_form_icon">
								<i class="fal fa-user"></i>
							</div>
						</div>
						<div class="bl_form">
							<input class="cl_phone phone" type="tel" placeholder="<?=t::w('your number')?>" data-lenght="11" data-pr="0">
							<div class="bl_form_icon">
								<i class="fal fa-phone"></i>
							</div>
						</div>
						<div class="bl_form">
							<div class="btn btn_reg"><span><?=t::w('submit your')?></span><i class="fal fa-paper-plane"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- От чего чистим ковры? -->
	<div class="home_who">
		<div class="bl_c">
			<div class="home_who_c">
				<div class="head_c">
					<h2><?=t::w('How do we do carpet cleaning?')?></h2>
				</div>

				<div class="home_who_cd">
					<div class="home_who_i">

						<?
							$sql = db::query("select * from `blocks` where type = 'who' and number > 0 and number < 4");
							while($ana = mysqli_fetch_array($sql)){
								echo '
									<div class="home_who_ic">
										<div class="home_who_ict">
											'.($lang=='kz'?$ana['txt1_kz']:$ana['txt1_ru']).'
										</div>
										<div class="home_who_ici lazy_bag" data-src="/assets/img/icon/'.$ana['img'].'"></div>
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
										<div class="home_who_ici lazy_bag" data-src="/assets/img/icon/'.$ana['img'].'"></div>
										<div class="home_who_ict">
											'.($lang=='kz'?$ana['txt1_kz']:$ana['txt1_ru']).'
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

	<!-- Процесс этапов чистки -->
	<!-- Процесс чистки ковров состоит из следующих этапов -->
	<? // include 'bl_work3.php'; ?>

	<!-- Результаты -->
	<div class="content">
		<div class="bl_c">
			<div class="head_c ">
				<h2><span>Результаты</span> нашей работы</h2>
			</div>
			<div class="swiper-container">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide">
					<div class="ggg_f_r">
						<div class="twentytwenty-container">
						  <img class="twen_n1" src="/assets/img/dovsposle/Слой 55 1.png">
						  <img class="twen_n2" src="/assets/img/dovsposle/Слой 55 2.png">
						</div>
					</div>
			      </div>
			      <div class="swiper-slide">
					<div class="ggg_f_r">
						<div class="twentytwenty-container">
						  <img class="twen_n1" src="/assets/img/dovsposle/Слой 56 1.png">
						  <img class="twen_n2" src="/assets/img/dovsposle/Слой 56 2.png">
						</div>
					</div>
			      </div>
			      <div class="swiper-slide">
					<div class="ggg_f_r">
						<div class="twentytwenty-container">
						  <img class="twen_n1" src="/assets/img/dovsposle/Слой 57 1.png">
						  <img class="twen_n2" src="/assets/img/dovsposle/Слой 57 2.png">
						</div>
					</div>
			      </div>
			      <div class="swiper-slide">
					<div class="ggg_f_r">
						<div class="twentytwenty-container">
						  <img class="twen_n1" src="/assets/img/dovsposle/Слой 58 1.png">
						  <img class="twen_n2" src="/assets/img/dovsposle/Слой 58 2.png">
						</div>
					</div>
			      </div>
			      <div class="swiper-slide">
					<div class="ggg_f_r">
						<div class="twentytwenty-container">
						  <img class="twen_n1" src="/assets/img/dovsposle/Слой_3_1.png">
						  <img class="twen_n2" src="/assets/img/dovsposle/Слой_3_2.png">
						</div>
					</div>
			      </div>
			      <div class="swiper-slide">
					<div class="ggg_f_r">
						<div class="twentytwenty-container">
						  <img class="twen_n1" src="/assets/img/dovsposle/Слой_4_1.png">
						  <img class="twen_n2" src="/assets/img/dovsposle/Слой_4_2.png">
						</div>
					</div>
			      </div>
			      <div class="swiper-slide">
					<div class="ggg_f_r">
						<div class="twentytwenty-container">
						  <img class="twen_n1" src="/assets/img/dovsposle/Слой_5_1.png">
						  <img class="twen_n2" src="/assets/img/dovsposle/Слой_5_2.png">
						</div>
					</div>
			      </div>
			      <div class="swiper-slide">
					<div class="ggg_f_r">
						<div class="twentytwenty-container">
						  <img class="twen_n1" src="/assets/img/dovsposle/Слой_6_1.png">
						  <img class="twen_n2" src="/assets/img/dovsposle/Слой_6_2.png">
						</div>
					</div>
			      </div>

			    </div>
			    <div class="swiper-button-next"></div>
    			<div class="swiper-button-prev"></div>
			    <div class="swiper-pagination"></div>
			</div>
		</div>
	</div>



	<!-- FAQ -->
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
										<span>'.($lang=='kz'?$ana['txt1_kz']:$ana['txt1_ru']).'</span>
									</div>
									<div class="home_faq_cdt">
										<span>'.($lang=='kz'?$ana['txt2_kz']:$ana['txt2_ru']).'</span>
									</div>
								</div>
							';
						}
					?>

				</div>
			</div>
		</div>
	</div>

<? include "block/footer.php"; ?>