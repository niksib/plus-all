function _onScroll(){
	const headerInner = document.querySelector('.header');

	if (window.scrollY >32) {
		headerInner?.classList?.add('header--sticky');
	} else {
		headerInner?.classList?.remove('header--sticky');
	}
}


document.onreadystatechange = function () {
	if (document.readyState === "complete") {

		window.addEventListener('scroll', function() {
			_onScroll();
		});

		const body = document.querySelector('.body-child');
		const mobButtons = document.querySelectorAll('.header .mob-control-buttons .mob-control-btn');
		const mobElManu = document.querySelectorAll('.header .menu-el-text');
		const menuMob = document.querySelector('.header .main-menu');
		const endlesses = document.querySelectorAll('.endless');

		const allBtnsDownloads = document.querySelectorAll('.download-stickers')
		const modalDownload = document.getElementById('modal-download');
		const closeModalDownload = document.querySelector('.modal-close');
		
		const nextStepModalDownload = document.querySelector('#modal-download .modal-agree-block-submit');
		const agreeModalDownload = document.querySelector('#modal-download .modal-agree-block');
		const formModalDownload = document.querySelector('#modal-download .modal-form-block');



		endlesses.forEach(function(obj) {
			if(obj.classList.contains('endless--left')){
				const continer = obj.querySelector('.endless-container');
				const clone = continer.cloneNode(true);
				continer.before(clone);
				continer.classList.add('endless--animating-l');
				clone.classList.add('endless--animating-l');
			}else{
				const continer = obj.querySelector('.endless-container');
				const clone = continer.cloneNode(true);
				obj.appendChild(clone);
				continer.classList.add('endless--animating-r');
				clone.classList.add('endless--animating-r');
			}

		})


		const toggleClass = (_this,obj) =>{
			const elemName = _this.name;
			if(!_this.classList.contains('mob-control-btn--active')){
				const activeBtns = document.querySelectorAll('.header .mob-control-btn--active');

				activeBtns.forEach(function(button) {
					button.classList.remove('mob-control-btn--active');
				})

				_this.classList.add('mob-control-btn--active');
				body.classList.add('active-menu');



				for (let key in obj){
					const element = obj[key]
					if(element?.classList.contains('main-menu--active')){
						element.classList.remove('main-menu--active');
					}else{
						if(key === elemName) {
							element.classList.add('main-menu--active');
						}
					}
				}
			}else {
				_this.classList.remove('mob-control-btn--active');
				body.classList.remove('active-menu');
				for (let key in obj){
					const element = obj[key]
					if(element?.classList.contains('main-menu--active')){
						element.classList.remove('main-menu--active');
					}
				}
			}


		}

		allBtnsDownloads.forEach(function(button) {
			button.addEventListener('click',(e)=>{
				e.preventDefault();
				const elem = e.target;
				modalDownload.classList.add('modal--open');
				console.log('----ele',elem);
			})
		});


		mobButtons.forEach(function(button) {
			button.addEventListener('click',(e)=>{
				const elem = e.target.closest('button');
				const elemName = elem.name;
				toggleClass(elem,{'menu':menuMob})
			})
		});

		mobElManu.forEach(function(button) {
			button.addEventListener('click',(e)=>{
				const elem = e.target;
				const close = document.querySelector('.mob-control-btn--active');
				if(close){
					close.click();
				}
			})
		});



		closeModalDownload.addEventListener('click',(e)=>{
			modalDownload.classList.remove('modal--open');
			agreeModalDownload.classList.add('modal-agree-block--active');
			formModalDownload.classList.remove('modal-form-block--active');
		})

		nextStepModalDownload.addEventListener('click',(e)=>{
			agreeModalDownload.classList.remove('modal-agree-block--active');
			formModalDownload.classList.add('modal-form-block--active');
		})


		_onScroll();

	}
}
