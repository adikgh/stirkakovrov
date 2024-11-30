window.onload =()=> {

	// setTimeout(function(){
	// 	$('.preloader').addClass('preloader_ts')

	//     setTimeout(function(){
	//     	$('.header').addClass('header_top')
	//     	$('html').removeClass('ovr_h')
	//     }, 1000)

	//     setTimeout(function(){
	//     	$('.conti_nnf .form_c').removeClass('dsp_n')
	//     	$('.conti_nnf .form_c').addClass('animate__animated animate__zoomInUp')
	//     }, 400)
	// }, 500)

	// parallaxInstance
	// var scene = new Parallax(document.getElementById('scene'))
	// var scene2 = new Parallax(document.getElementById('scene2'))
	// var scene3 = new Parallax(document.getElementById('scene3'))


	// 
	// if (window.matchMedia("(max-width: 768px)").matches) {} else {
	// 	$('.block_n5it').tilt();
	// 	$('.block_n5it').hover(function() {
	// 		$(this).addClass('block_n5itm_ac')
	// 	}, function() {
	// 		$(this).removeClass('block_n5itm_ac')
	// 	})
	// }

}


// start jquery
$(document).ready(function() {

	// скрол
	let scroll = $(window).scrollTop()
	// if (scroll > 80) {
	// 	$('.header').addClass('header_fix')
    // } else {
    // 	$('.header').removeClass('header_fix')
    // }
	if (scroll > 600) {
		$('.posmz').addClass('posmz_act')
    } else {
		$('.posmz').removeClass('posmz_act')
    }
	$(window).scroll(function() {
    	scroll = $(window).scrollTop()
		// if (scroll > 80) {
		// 	$('.header').addClass('header_fix')
	    // } else {
	    // 	$('.header').removeClass('header_fix')
	    // }
		if (scroll > 600) {
			$('.posmz').addClass('posmz_act')
	    } else {
			$('.posmz').removeClass('posmz_act')
	    }
	})


	// меню
	$('.header_mni').on('click', function() {
		if ($('.menu').hasClass('menu_act') == false) {
			$('.menu').addClass('menu_act')
			$('.html').addClass('ovr_h');
			$(this).children('.far').removeClass('fa-bars')
			$(this).children('.far').addClass('fa-times')
		} else {
			$('.menu').removeClass('menu_act')
			$('.html').removeClass('ovr_h');
			$(this).children('.far').removeClass('fa-times')
			$(this).children('.far').addClass('fa-bars')
		}
	});



	// 
	$('.header_btn').on('click', function() {
		$('.bl_obrf').addClass('bl_obrf_act')
		$('.html').addClass('ovr_h');
	});	

	$('.home_tarif_ci_btn').on('click', function() {
		$('.bl_obrf').addClass('bl_obrf_act')
		$('.html').addClass('ovr_h');
	});

	$('.btn_prob_zk').on('click', function() {
		$('.bl_obrf').removeClass('bl_obrf_act')
		$('.html').removeClass('ovr_h');
	});




	// mask form
	$('.cl_phone').inputmask("+7 (999) 999-99-99")
	$('.cl_code').inputmask("99-99")
	// form - input 
	$('input').on('input', function(){
		if ($(this).attr('type') == 'tel') {
			in_rez = $(this).val().replace(/ /g, '').replace(/\+/g, '').replace(/\)/g, '').replace(/\(/g, '').replace(/-/g, '').replace(/_/g, '')
			if (in_rez.length < $(this).attr('data-lenght')) {
				$(this).attr('data-pr', 0)
			} else {
				$(this).attr('data-pr', 1)
				$(this).attr('data-val', in_rez)
			}
		} else {
			if ($(this).val().length < $(this).attr('data-lenght')) {
				$(this).attr('data-pr', 0)
			} else {
				$(this).attr('data-pr', '1')
				$(this).attr('data-val', $(this).val())
			}
		}
	})





	// отправка данный
	$('.btn_phone').on('click', function() {

		var phone = $(this).siblings('.phone')

		if (phone.attr('data-pr') != 1) {
			mess('Введите свой номер')
		} else {
			$.ajax({
				url: "/config/send.php?mess",
				type: "POST",
				dataType: "html",
				data: ({phone: phone.val()}),
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						phone.val('')
						phone.attr('data-pr', 0)
					} else {
						mess('Пожалуйста, перезагрузите сайт <br>и попробуйте еще раз')
						console.log(data);
						
					}
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}

	})

	$('.btn_reg').on('click', function() {

		var name = $(this).parent().siblings('.bl_form').children('.name')
		var phone = $(this).parent().siblings('.bl_form').children('.phone')

		if (name.attr('data-pr') != 1 || phone.attr('data-pr') != 1) {
			mess('Введите свой данный')
		} else {
			$.ajax({
				url: "/config/send.php?mess2",
				type: "POST",
				dataType: "html",
				data: ({name: name.val(), phone: phone.val()}),
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						phone.val('')
						phone.attr('data-pr', 0)
						name.val('')
						name.attr('data-pr', 0)
					} else {
						mess('Пожалуйста, перезагрузите сайт <br>и попробуйте еще раз')
						console.log(data);
						
					}
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}

	})






	// function
	function mess(e) {
		$('.bl_mess').addClass('bl_mess_zak')
		$('.bl_mess_sam').html(e)

		setTimeout(function(){
			$('.bl_mess').removeClass('bl_mess_zak')
		}, 3000)
	}
	$('.bl_mess').on('click', function() {
		$(this).removeClass('bl_mess_zak')
	})






	// на верх
	$('.clc_top').on('click', function () {
		$('body,html').animate({
	        scrollTop: 0
	    }, 500)
	})




	// lazy
	$('.lazy_bag').lazy();


	// кaрусел
	var galleryThumbs = new Swiper('.gallery-thumbs', {
		loop:true,
		slidesPerView:3,
		allowTouchMove:false,
		freeMode:true,
		watchSlidesVisibility:true,
		watchSlidesProgress:true,
		breakpoints: {
	      360: {
	        	slidesPerView: 2,
				allowTouchMove: true,
	      }
	   }
	})
	var galleryTop = new Swiper('.gallery-top', {
		autoplay:{delay: 5000},
	  	speed: 500,
		loop:true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		thumbs:{swiper: galleryThumbs},
	})













	$(".twentytwenty-container").twentytwenty({
	    default_offset_pct: .5,
	    before_label: 'До',
	    after_label: 'После',
	    // no_overlay: false,
	    // move_slider_on_hover: true,
	    move_with_handle_only: true,
	    click_to_move: true
	})
	var swiper = new Swiper('.swiper-container', {
		allowTouchMove:false,
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		  renderBullet: function (index, className) {
			return '<span class="' + className + '">' + (index + 1) + '</span>';
		  },
		},
		mousewheel:false,
  });





}) // end jquery