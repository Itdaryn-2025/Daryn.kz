//СКРИПТЫ ДЛЯ КАРТЫ НА СТРАНИЦЕ
if ($("#int_school").length == 1) {
	let allLends = document.querySelectorAll("html .land")
	allLends.forEach(function (land) {
		land.onmouseover = land.onmouseout = handler2;

		function handler2(event) {
			if (event.type == "mouseover") {
				let keyHelp = event.target.getAttribute('id').slice(3)
				let listLiTitle = $(`a[href='#${keyHelp}']`)
				$("#help_title").css("opacity", "1")
				$("#help_title").text(listLiTitle.text())
				$("#help_title").css({
					left: event.pageX + 30,
					top: event.pageY + 30
				})
			}
			if (event.type == "mouseout") {
				$("#help_title").css("opacity", "0")
			}
		}
	})

	int_school.onmouseover = int_school.onmouseout = handler;

	function handler(event) {

		if (event.type == "mouseover") {
			event.target.style.fill = "rgb(77 193 239)";
			event.target.style.strokeWidth = "4px";
		}
		if (event.type == "mouseout") {
			event.target.style.fill = "";
			event.target.style.strokeWidth = "";
		}
	}

	let landBtn = document.querySelectorAll('.land')
	let titleMap = $(".anim_title_map")
	titleMap.fadeOut()

	function clearClass() {
		$(".container_sotr_list .nav-tabs li").removeClass("active")
		$(".container_sotr_list .tab-pane").removeClass("active")
	}

	landBtn.forEach(function (btn) {
		btn.addEventListener('click', function () {

			clearClass()

			let key = this.getAttribute('id').slice(3)
			let listLi = $(`a[href='#${key}']`)
			let blockObl = $(`#${key}`)

			titleMap.text(listLi.text())
			titleMap.fadeIn(1000).delay(1000).fadeOut(1000)

			listLi.parent().addClass("active")
			blockObl.addClass("active")

			$('html,body').stop().delay(1500).animate({ scrollTop: blockObl.offset().top }, 1000);
			e.preventDefault();

		})
	})
}

//Кнопка на верх
jQuery(document).ready(function () {
	var btn = $('#button');
	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});
	btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, '300');
	});
});

//Мобильное меню выпадалка
$('.mobile_menu .menu-item-has-children').append('<span class="menu_bt"><i class="fas fa-caret-down"></i></span>')
$(".menu_bt").click(function () {
	$(this).prev("ul").toggleClass("active")
	$(this).children().toggleClass("fa-caret-down").toggleClass("fa-caret-up")
})

//Переход по мероприятиям
if ($(".mec-toggle-month-inner-image").length > 0) {
	document.querySelectorAll('.mec-toggle-item').forEach((element) => {
		element.addEventListener('click', function () {
			$(".mec-content-toggle").remove()
			$(location).attr('href', $(element).find(".mec-toggle-month-inner-image a").attr("href"));
		});
	});
}

//Режет заголовок новости  и имя пользователя
if ($(".pt-cv-title a").length > 0) {
	let news_title = $(".pt-cv-title a")
	for (i = 0; i < news_title.length; i++) {
		if (news_title[i].text.length > 140) {
			news_title[i].text = news_title[i].text.substring(0, 140) + '...'
		}
	}
}

if ($(".name_user a").length > 0) {
	let news_title = $('.name_user a')
	for (i = 0; i < news_title.length; i++) {
		if (news_title[i].text.length > 17) {
			news_title[i].text = news_title[i].text.substring(0, 17) + '...'
		}
	}
}


//Прижимает при скролле шапку
window.addEventListener('scroll', function () {
	if (pageYOffset > 76) {
		$(".header_menu_nav").addClass("top_menu_fixed")
		$(".zam_head").addClass("active")
	} else {
		$(".header_menu_nav").removeClass("top_menu_fixed")
		$(".zam_head").removeClass("active")
	}
});

//Меняет ссылку в личном кабинете на профиль
if($('a:contains("Профильді қарау")').length > 0){
$($('a:contains("Профильді қарау")')[1]).attr('href', 'https://daryn.kz/kk/каз-профиль/')
}