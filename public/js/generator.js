
const shareFunction = ()=>{
    const cotainer = document.querySelector('.workshop-share-right');
    const closeBtn = document.getElementById('share-close');
    const openShareBtn = document.getElementById('share-open');

    closeBtn.addEventListener('click',(e)=>{
        cotainer.classList.remove('active');
    });

    openShareBtn.addEventListener('click',()=>{
        cotainer.classList.add('active');
    });

}

const removePreviewImg = (e) =>{
    const productImg = document.getElementById('product-img');
    const formImg = document.querySelector('.workshop-form [name="image"]');
    const formMultiplier = document.querySelector('.workshop-form [name="multiplier"]');
    const textInfo = document.querySelector('.workshop-form-text--check');


    const getText = formImg.dataset.text;

    if (productImg) {
        productImg.remove();
        formImg.classList.remove('active');
        textInfo.classList.remove('active');
        formImg.nextElementSibling.querySelector('.input-img-text').textContent = getText;

        formMultiplier.setAttribute('disabled','');
        wImg = '';
        hImg = '';
    }
}


const rules = (key, val) => {
    if (!val) {
        return false;
    }

    if (key === 'image') {
        if (val.size === 0) {
            return false;
        }
        if(val.type !== 'image/png'){
            return false;
        }
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


const validatorForm = (_key) => {
    const form = document.getElementById('form-workshop');
    const submitBtn = document.querySelector('.workshop-form-submit');
    const formData = new FormData(form, submitBtn);

    let valid = true;

    for (const _d of formData) {
       // console.log('_d', _d);
        //console.log(`${_d[0]}: ${_d[1]} : ${_d[1].name}\n`);

        if(!rules(_key? _key : _d[0],_d[1])){
            valid = false;
            if(!_key){
                document.querySelector(`.workshop-form [name="${_d[0]}"]`).classList.add('field-error');
            }
        }



    }

    if(_key){
        submitBtn.disabled = !valid;
    }

    return valid;
}



const phone_number_mask = (e) => {

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

  async function fetchGeneratorJSON(bodyData) {
    const response = await window.fetch('/image-generation/generate',
    {
        method: 'POST',
        body: bodyData,
    }
    );
    const data = await response.json();
    return data;
  }

const formFunction = () => {

	let wImg = '';
	let hImg = '';

    const form = document.getElementById('form-workshop');
	const generatorProduct = document.getElementById('generator');
    const generatorProductWrap = document.getElementById('generator-product');
    const generatorText = document.getElementById('generator-text');
	const generatorTitle = document.querySelector('.generator-title');

    const generatorBorder = document.querySelector('.generator-border-img svg');
	const generatorLogo = document.querySelector('.generator-logo svg');

    const formName = document.querySelector('.workshop-form [name="name"]');
    const formImg = document.querySelector('.workshop-form [name="image"]');
    const formBgColor = document.querySelector('.workshop-form [name="bg-color"]');
    const formBoderColor = document.querySelector('.workshop-form [name="border-color"]');
	const formCheckDark = document.querySelector('.workshop-form [name="dark-theme"]');
	const formMultiplier = document.querySelector('.workshop-form [name="multiplier"]');
    const textInfo = document.querySelector('.workshop-form-text--check');

    const btnCloseImg = document.querySelector('.workshop-form .input-img-close-icon');

    const formEmail = document.querySelector('.workshop-form [name="email"]');
    const formPhone = document.querySelector('.workshop-form [name="phone"]');
    const submitBtn = document.querySelector('.workshop-form-submit');

    const previewFile = () => {

        const file = formImg.files[0];
        const reader = new FileReader();

        reader.onloadend = function() {
            //preview.src = reader.result;

            let img = new Image();
            img.src = reader.result;
            img.id = 'product-img';
            //img.width=176;
            //img.height=310;
            generatorProductWrap.appendChild(img);
            formImg.classList.add('active');
            textInfo.classList.add('active');
            formImg.nextElementSibling.querySelector('.input-img-text').textContent = file.name;
			// const productImg = document.getElementById('product-img');

			// if (productImg) {
            //     wImg = generatorProduct?.offsetWidth;
			// 	hImg = generatorProductImg?.offsetHeight;
            // }
			formMultiplier.removeAttribute('disabled');
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            removePreviewImg();

        }

        validatorForm('_');

        // reader.onloadend = function () {
        //   preview.src = reader.result;
        // }

        // if (file) {
        //   reader.readAsDataURL(file);
        // } else {
        //   preview.src = "";
        // }
    }

    const removePreviewImgHandler = (e) =>{
        e.preventDefault();
        removePreviewImg();
    }

    const onBlurHandler = (e) => {
        validatorForm('_');
    }

    const textHandler = (e) => {

        const _target = e.target

        if(_target.classList.contains('field-error')){
            _target.classList.remove('field-error');
        }
    }

    const previewTextHandler = (e) => {

        const val = e.target.value
        if(e.target.classList.contains('field-error')){
            e.target.classList.remove('field-error');
        }

        if (!val) {
            generatorText.innerText = '...'
        } else {
            generatorText.innerText = e.target.value
        }
    }


	const chageColorBg = (e) => {
        const val = e.target.value
        if (val) {
            generatorProduct.style.backgroundColor = e.target.value;
        }
    }

	const chageColorBorder = (e) => {
        const val = e.target.value
        if (val) {
            generatorBorder.setAttribute("fill", e.target.value)
        }
    }

	const hadlerMultiplier = (e)=>{
		const _img = document.getElementById('product-img');
		if(!wImg) wImg = _img.offsetWidth;
		if(!hImg) hImg = _img.offsetHeight;
		if(_img && wImg && hImg){
			const val = e.target.value;
			const newWidth = wImg * val;
			const newHeight = hImg * val;
			const maxWidth = generatorProductWrap.offsetWidth;
			const maxHeight = generatorProductWrap.offsetHeight;

			if (val) {
				if(!(newHeight > maxHeight)){
				_img.setAttribute('width', Math.round(newWidth >= maxWidth ? maxWidth : newWidth));
				}
				if(!(newWidth > maxWidth)){
				_img.setAttribute('height', Math.round(newHeight >= maxHeight ? maxHeight : newHeight));
				}
			}
		}
	}

	const isDarkText = (e) => {
        const val = e.target.checked
		const b =  '#000000';
        if (val) {
			generatorProduct.classList.add('generator--inversion');
        }else{
			generatorProduct.classList.remove('generator--inversion');
		}
    }


    const validation = () => {

    }

    formImg.addEventListener('blur', onBlurHandler);
    formImg.addEventListener('change', previewFile);

    btnCloseImg.addEventListener('click', removePreviewImgHandler)

    formName.addEventListener('input', previewTextHandler);
    formName.addEventListener('blur', onBlurHandler);


    formBgColor.addEventListener('input', chageColorBg);


    formBoderColor.addEventListener('input', chageColorBorder);

	formCheckDark.addEventListener('change', isDarkText);

	formMultiplier.addEventListener('input', hadlerMultiplier);

    formEmail.addEventListener('blur', onBlurHandler);
    formEmail.addEventListener('input', textHandler);

    formPhone.addEventListener('blur', onBlurHandler);
    formPhone.addEventListener('input', phone_number_mask);


    submitBtn.addEventListener('click', async (e) => {
        e.preventDefault();
        const res = validatorForm();

        if(!res){return null;}

        const _target = e.target;
        _target.disabled = true;
        _target.classList.add('btn--load');

        const formData = new FormData(form, submitBtn);
		const _img = document.getElementById('product-img');

        formData.append('width', _img.offsetWidth);
        formData.append('height', _img.offsetHeight);


        //let formDataObject = Object.fromEntries(formData.entries());
        //let formDataJsonString = JSON.stringify(formDataObject);

        // formData.forEach(function(value, key){
        //     object[key] = value;
        // });

        // const json = JSON.stringify(object);

        try{
            const res = await fetchGeneratorJSON(formData);

            if(!res?.url){
                throw new Error('Empty image');
            }
            window.open(res.url);

        }catch(e){
            window.alert('Error')
        }finally{
            _target.disabled = false;
            _target.classList.remove('btn--load');
        }

    })


}


formFunction();
shareFunction();
