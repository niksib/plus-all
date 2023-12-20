
const scrollNavigate = ()=>{
// Click event
const offset = 0;
const navLinks = document.querySelectorAll('.main-menu .menu-el-text[href^="#"]');

navLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    // Prevent default action
	const _this = event.target.parentNode;
	console.log('_this',_this);
    event.preventDefault();

    // Remove active class from all links and add it to the clicked one
    navLinks.forEach(l => l.parentNode.classList.remove('active'));
    _this.classList.add('active');

    // Get the id of the section to scroll to
    const anchorId = event.target.getAttribute('href');
	const _id = document.querySelector(anchorId);

	if(_id){
		// Calculate the scroll position
		const target = _id.offsetTop - offset;

		// Animate scroll to the target
		window.scrollTo({
		top: target,
		behavior: 'smooth'
		});

		// Update URL hash
		window.location.hash = anchorId;
		}
  });
});

// Scroll event
window.addEventListener('scroll', function() {
  const scrollPosition = window.scrollY;

  navLinks.forEach(link => {
	const parent = link.parentNode

    //const target = document.querySelector(anchorId).offsetTop - offset;
	const anchorId = link.getAttribute('href');
	const _id = document.querySelector(anchorId);

	if(_id){
		const target = _id.offsetTop - offset;

		// Check if the document has crossed the page
		if (scrollPosition >= target) {
		  // Remove active class from all links and add it to the current one
		  navLinks.forEach(l => l.parentNode.classList.remove('active'));
		  parent.classList.add('active');
		}
	}

  });
});

// Set initial scroll state after DOM ready
window.scroll();

}

document.onreadystatechange = function () {
	if (document.readyState === "complete") {

		window.addEventListener('scroll', function() {
			const headerInner = document.querySelector('.header');

			if (window.scrollY >32) {
				headerInner?.classList?.add('header--sticky');
			} else {
				headerInner?.classList?.remove('header--sticky');
			}
		});

		const body = document.querySelector('.body-child');
		const mobButtons = document.querySelectorAll('.header .mob-control-buttons .mob-control-btn');
		const mobElManu = document.querySelectorAll('.header .menu-el-text');
		const contactsMob = document.querySelector('.header .top-contact-wrap');
		const profileMob = document.querySelector('.header .top-btn-auth-wrap');
		const menuMob = document.querySelector('.header .main-menu');
		const langContainer = document.querySelector('.header .lang-container');
		const langBlock = document.querySelector('.header .lang-container > .lang-block');
		const scrollTop = document.querySelector('#scroll-tot-top');

		const endlesses = document.querySelectorAll('.endless');



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

		

		
		//--------------------------------------OLD

		const simpleToggle = (_this, className) => {
			if(_this?.classList.contains(className)){
				_this.classList.remove(className);
			}else{
				_this.classList.add(className);
			}
		}

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

		
		// document.addEventListener('click',(e)=>{

		// 	const elem = e.target.closest('.lang-container');
		// 	console.log('e=====',elem);
		// 	if(elem){
		// 		simpleToggle(elem, 'lang-container--active')
		// 	}else{
		// 		if(langContainer?.classList.contains('lang-container--active')){
		// 			langContainer.classList.remove('lang-container--active')
		// 		}
		// 	}

		// })

		
		////--------

		let selects = document.querySelectorAll('select');

		selects.forEach(function(s) {
			bindSelect(s);
		});


		///-----------

		const inputsPhone = document.querySelectorAll(".input-phone");
		inputsPhone.forEach(function(inp) {
			window.intlTelInput(inp, {
				utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
				separateDialCode: true,
			});
		});

		scrollNavigate()

		const swiper = new Swiper('.slider-why.swiper', {
			// Optional parameters
			//direction: 'vertical',
			//loop: true,
		  
			// If we need pagination
			pagination: {
			  el: '.swiper-pagination',
			  //clickable: true,
			},
		  
			// Navigation arrows
			navigation: {
			  nextEl: '.swiper-button-next',
			  prevEl: '.swiper-button-prev',
			},
		  
			// And if we need scrollbar
			scrollbar: {
			  //el: '.swiper-scrollbar',
			},
			autoplay:{
				delay: 3000
			},
		  });

		  //swiper.start()
		//   let count = 0
		//   let t = setInterval(()=>{
			
		// 	console.log('sdsdsdsds',swiper.activeIndex);
		// 	if(count > swiper.activeIndex){
		// 		clearInterval(t);
		// 	}
		// 	swiper.slideNext();
		// 	count+=1;
		//   },1000)
		  

	}
}
