
const scrollNavigate = ()=>{
// Click event
const offset = 0;
const navLinks = document.querySelectorAll('.main-menu .menu-el-text[href^="#"]');

navLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    // Prevent default action
	const _this = event.target.parentNode;
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

const mainFunction = () =>{

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

mainFunction()
