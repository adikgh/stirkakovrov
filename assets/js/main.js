$(document).ready(function() {

	// setTimeout(function(){
	// 	next()
	// }, 500)

	// const phrases = ['Привет..', 'Школа программирования и дизайн GEDU', 'приглашает вас', 'быть лучшими из лучшых', 'приходи :)', 'Научитесь программировать']
 //    const el = document.querySelector('.text_sl')
 //    const fx = new TextScramble(el)
 //    let counter = 0

 //    const next =()=> {
 //      fx.setText(phrases[counter]).then(() => {
 //        setTimeout(next, 1000)
 //      })
 //      counter = (counter + 1) % phrases.length
 //   }


	// 
	// $('.fb_zap').on('click', function() {

	// 	if ($(this).attr('data-btn') == 1) {
	// 		f_phone = $(this).parent().siblings().children('.f_phone')
	// 		f_name 	= $(this).parent().siblings().children('.f_name')
	// 	} else {
	// 		f_phone = $(this).parent().siblings('.form_mn').children().children('.f_phone')
	// 		f_name 	= $(this).parent().siblings('.form_mn').children().children('.f_name')
	// 	}
		
	// 	f_ph = f_phone.val().replace(/ /g, '').replace(/\+/g, '').replace(/\)/g, '').replace(/\(/g, '').replace(/-/g, '').replace(/_/g, '')

	// 	if ((f_ph.length != f_phone.attr('data-lenght')) || (f_name.length && f_name.val().length <= f_name.attr('data-lenght'))) {

	// 		if (f_ph.length != f_phone.attr('data-lenght')) {
	// 			f_phone.parent().addClass('form_pr_nm')
	// 			f_phone.parent().addClass('form_pr_n')
	// 		}
	// 		if (f_name.length && f_name.val().length <= f_name.attr('data-lenght')) {
	// 			f_name.parent().addClass('form_pr_nm')
	// 			f_name.parent().addClass('form_pr_n')
	// 		}

	// 	} else {

	// 		if (!f_name.length) {
	// 			f_nm = 0
	// 		} else {
	// 			f_nm = f_name.val()
	// 		}

	// 		$.ajax({
	// 			url: "/send/?mess",
	// 			type: "POST",
	// 			dataType: "html",
	// 			data: ({f_phone: f_phone.val(), f_name: f_nm}),
	// 			success: function(data){
	// 				if (data == 'yes') {
	// 					mess(bl_yes)

	// 					f_phone.parent().removeClass('form_pr_y')
	// 					f_phone.val('')
	// 					f_name.parent().removeClass('form_pr_y')
	// 					f_name.val('')
	// 				}
	// 			},
	// 			beforeSend: function(){
	// 				mess('Отправка..')
	// 			},
	// 			error: function(data){
	// 				mess('Ошибка..')
	// 			}
	// 		})
	// 	}
	// })




})