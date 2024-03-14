function _onScroll(){
	const headerInner = document.querySelector('.header');

	if (window.scrollY >32) {
		headerInner?.classList?.add('header--sticky');
	} else {
		headerInner?.classList?.remove('header--sticky');
	}
}

async function fetchDownloadJSON(bodyData) {
    const response = await window.fetch('/image-generation/download',
    {
        method: 'POST',
        body: bodyData,
    }
    );
    const data = await response.json();
    return data;
  }



function stickersForm(){
	const form = document.getElementById('form-stickers');
	const formName = form.querySelector('[name="name"]');
	const formEmail = form.querySelector('[name="email"]');
    const formPhone = form.querySelector('[name="phone"]');
    const submitBtn = form.querySelector('.modal-form-block-submit');
	const formData = new FormData(form, submitBtn);

	  const phoneNumberMask = (e) => {

		const _target = e.target

			if(_target.classList.contains('field-error')){
				_target.classList.remove('field-error');
			}


		let myMask = "38 (___) ___ __ __";
		let myCaja = _target;
		let myText = "38";
		let myNumbers = [];
		let myOutPut = ""
		let theLastPos = 4;
		myText = ''+myCaja.value?.length < 2 ? myMask+myCaja.value : myCaja.value;

		//get numbers
		for (let i = 2; i < myText.length; i++) {
		  if (!isNaN(myText.charAt(i)) && myText.charAt(i) != " ") {
			myNumbers.push(myText.charAt(i));
		  }
		}
		//write over mask
		for (let j = 0; j < myMask.length; j++) {
		  if (myMask.charAt(j) == "_") { //replace "_" by a number
			if (myNumbers.length == 0)
			  myOutPut = myOutPut + myMask.charAt(j);
			else {
			  myOutPut = myOutPut + myNumbers.shift();
			  theLastPos = j + 1; //set caret position
			}
		  } else {
			myOutPut = myOutPut + myMask.charAt(j);
		  }
		}
		myCaja.value = myOutPut;
		myCaja.setSelectionRange(theLastPos, theLastPos);
	  }

	const rules = (key, val) => {
		if (!val) {
			return false;
		}

		if (key === 'email') {
			if (!val.match(/^.+@.+\..+$/gim)) {
				return false;
			}
		}

		if (key === 'phone') {
			let matches = val?.replace(/[^0-9]/g, "");

			if (matches?.length !== 12) {
				return false;
			}
		}

		return true;
	}

	const validationForm = (isCheck = false) => {
		const formData = new FormData(form, submitBtn);
		let valid = true;

		for (const _d of formData) {
			if(!rules(_d[0],_d[1])){
				valid = false;
				if(isCheck){
					form.querySelector(`[name="${_d[0]}"]`)?.classList?.add('field-error');
				}
			}
		}

		submitBtn.disabled = !valid;

		return {valid,formData};
	}

	const inputHandler = (e) => {

		const _target = e.target

		if(_target.classList.contains('field-error')){
			_target.classList.remove('field-error');
		}
	}

	const onBlurHandler = (e) => {
		validationForm();
	}
    formName.addEventListener('input', inputHandler);
    formName.addEventListener('input', onBlurHandler);
	formEmail.addEventListener('input', inputHandler);
	formEmail.addEventListener('input', onBlurHandler);
	formPhone.addEventListener('input', phoneNumberMask);
	formPhone.addEventListener('input', onBlurHandler);

	submitBtn.addEventListener('click', async (e) => {
        e.preventDefault();

        const res = validationForm(true);

        if(!res.valid){return null;}


        const _target = e.target;
        _target.disabled = true;
        _target.classList.add('btn--load');


        //let formDataObject = Object.fromEntries(formData.entries());
        //let formDataJsonString = JSON.stringify(formDataObject);

        // formData.forEach(function(value, key){
        //     object[key] = value;
        // });

        // const json = JSON.stringify(object);


        // for (var pair of res.formData.entries()) {
        //     console.log(pair[0]+ ', ' + pair[1]);
        // }



        try{
            const res = await fetchDownloadJSON(res.formData);

            if(!res?.downloadUrl){
                throw new Error('Empty image');
            }
			const modal = document.getElementById('modal-download');
			if(modal){
				modal.classList.remove('modal--open');
			}
            window.open(res.downloadUrl);

        }catch(e){
            window.alert('Error')
        }finally{
            _target.disabled = false;
            _target.classList.remove('btn--load');
        }

    })

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

		stickersForm();

		allBtnsDownloads.forEach(function(button) {
			button.addEventListener('click',(e)=>{
				e.preventDefault();
				const elem = e.target;
				modalDownload.classList.add('modal--open');
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
