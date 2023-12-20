const formFunction = () => {


    // var title = document.querySelector('.workshop-title');
    // var col = document.querySelector('[name="border-color"]');

    // col.addEventListener('input',(e)=>{

    // 	console.log('eeeee',e);
    // title.style.color=e.target.value

    // })

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
            const productImg = document.getElementById('product-img');
            if (productImg) {
                productImg.remove();
				
				formMultiplier.setAttribute('disabled','');
				wImg = '';
				hImg = '';
            }

        }

        // reader.onloadend = function () {
        //   preview.src = reader.result;
        // }

        // if (file) {
        //   reader.readAsDataURL(file);
        // } else {
        //   preview.src = "";
        // }
    }

    const previewText = (e) => {

        const val = e.target.value
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
			console.log('maxWidth',maxWidth,newWidth);
            console.log('maxHeight',maxHeight,newHeight);

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

    const rules = (key, val) => {
        if (!val) {
            return false;
        }

        if (key === 'image') {
            if (val.size === 0) {
                return false;
            }
        }

        if (key === 'email') {
            if (!val.match(/^.+@.+\..+$/gim)) {
                return false;
            }
        }

        return true;
    }

    const validation = () => {

    }

    formImg.addEventListener('change', previewFile);

    formName.addEventListener('input', previewText);

	
    formBgColor.addEventListener('input', chageColorBg);

	
    formBoderColor.addEventListener('input', chageColorBorder);

	formCheckDark.addEventListener('change', isDarkText);

	formMultiplier.addEventListener('input', hadlerMultiplier);

    submitBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const object = {};
        const formData = new FormData(form, submitBtn);
		//const multiplier = formMultiplier?.target?.value || 1;
		const _img = document.getElementById('product-img');

        formData.append('width', _img.offsetWidth);
        formData.append('height', _img.offsetHeight);
		//formData.append('multiplier', multiplier);

        
        formData.forEach(function(value, key){
            object[key] = value;
        });
        const json = JSON.stringify(object);

        console.log('json===>',json);
        for (const _d of formData) {
            console.log('_d', _d);
            console.log(`${_d[0]}: ${_d[1]} : ${_d[1].name}\n`);
        }


        // fetch('url', {method:'post', headers: {
        // 	'Content-Type': 'multipart/form-data',                 
        //  },  body: formData});


    })

}


formFunction()