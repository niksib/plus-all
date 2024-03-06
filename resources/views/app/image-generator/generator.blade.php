<x-app-layout>
    <x-slot:critical-css></x-slot:critical-css>

    <x-slot:css>
        <link rel="stylesheet" href="/css/baner-generator.css"/>
        <link rel="stylesheet" href="/css/generator.css"/>
    </x-slot:css>

    <x-slot:js>
        <script src="https://cdn.jsdelivr.net/npm/share-buttons/dist/share-buttons.js"></script>
        <script src="/js/generator.js"></script>
    </x-slot:js>

    <div class="workshop">
        <div class="workshop-section">
            <div class="workshop-container container">
                <div class="workshop-form-wrap">
                    <div class="workshop-title-wrap">
                        <h1 class="workshop-title">{{ trans('generator.title') }}</h1>
                        <span class="workshop-subtitle text">{{ trans('generator.subtitle') }}</span>
                    </div>
                    <div class="generator" id="generator">
                        <p class="generator-title">
                            {{ trans('generator.image-title') }}<br>
                            {{ trans('generator.image-subtitle') }} <br><span class="generator-title-name" id="generator-text2">...</span>
                            {{ trans('generator.image-from') }} <span class="generator-title-name" id="generator-text">...</span>
                        </p>
                        <div class="generator-border-img" id="generator-border">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 909.5 909.5" style="enable-background:new 0 0 909.5 909.5;" xml:space="preserve"><path class="st0" fill="#FFF" d="M454.8,0C203.6,0,0,203.6,0,454.8s203.6,454.8,454.8,454.8s454.8-203.6,454.8-454.8S705.9,0,454.8,0z
                M666.7,528.5L460.2,741.3c-3,3.1-7.9,3.1-10.9,0L242.8,528.5c-4.7-4.8-1.3-12.9,5.4-12.9h90.5V165.9h232.1v349.8h90.5
                C668,515.7,671.4,523.7,666.7,528.5z"></path></svg>
                        </div>
                        <div class="generator-logo">
                            <img class="generator-logo-sticker" src="/svg/sticker-logo.svg" alt="Maid in Ukraine">
                        </div>
                        <div class="generator-product" id="generator-product"></div>
                    </div>
                    <form class="workshop-form" id="form-workshop">
                        @csrf
                        <div class="workshop-form-row workshop-form-row-1">
                            <div class="input-wrap"><label class="input-label field-label">{{ trans('generator.company-name') }}</label>
                                <div class="input-content"><input name="product-name" type="text" class="input" placeholder="{{ trans('generator.company-name-placeholder') }}" required></div>
                            </div>
                            <div class="input-wrap">
                                <label class="input-label field-label">{{ trans('generator.brand-name') }}</label>
                                <div class="input-content">
                                    <input name="name" type="text" class="input" placeholder="Beres" required></div>
                            </div>
                            <div class="workshop-form-colors-block">
                                <div class="workshop-form-colors-right"><label class="input-label field-label">{{ trans('generator.brand-color') }}</label>
                                    <div class="workshop-form-colors-wrap">
                                        <input class="input-color" type="color" name="bg-color" value="#0054EA">
                                        {{--                                        <input class="input-color" type="color" name="border-color" value="#1C73FF">--}}
                                    </div>
                                </div>
                                <div>
                                    <label class="input-label field-label">{{ trans('generator.text-color') }}</label>
                                    <div class="workshop-form-checkbox-wrap">
                                        <input class="workshop-form-checkbox" id="isDark" type="checkbox" name="dark-theme">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="workshop-form-row workshop-form-row-2">
                            <div><label class="input-label field-label">{{ trans('generator.photo') }}</label>
                                <div class="input-img-wrap ">
                                    <input id="image-brand" name="image" type="file" class="input-img" required hidden accept=".png" data-text="{{ trans('generator.photo-placeholder') }}">
                                    <label for="image-brand" class="input-img-label">
                                        <div class="input-img-first-wrap">
                                            <span class="input-img-first-text">{{ trans('generator.photo-choose') }}</span>
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 5.49998L4.18965 13.4397C3.9152 13.7224 3.76301 14.1017 3.76598 14.4958C3.76894 14.8898 3.92682 15.2668 4.20551 15.5454C4.48419 15.8239 4.86128 15.9816 5.2553 15.9844C5.64932 15.9872 6.02862 15.8349 6.31122 15.5603L15.6215 6.12154C16.1842 5.55887 16.5003 4.79572 16.5003 3.99998C16.5003 3.20424 16.1842 2.44109 15.6215 1.87841C15.0589 1.31574 14.2957 0.999634 13.5 0.999634C12.7042 0.999634 11.9411 1.31574 11.3784 1.87841L2.06809 11.3181C1.23553 12.1643 0.771082 13.3053 0.775916 14.4924C0.78075 15.6795 1.25447 16.8166 2.0939 17.656C2.93332 18.4955 4.07044 18.9692 5.25756 18.974C6.44467 18.9789 7.58561 18.5144 8.43184 17.6819L16.125 9.99998"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="input-img-second-wrap">
                                            <span class="input-img-text">{{ trans('generator.photo-placeholder') }}</span>
                                            <button class="input-img-close-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9404 10L19.594 2.34643C19.8518 2.08912 19.9967 1.73994 19.9971 1.37572C19.9974 1.0115 19.853 0.66207 19.5957 0.4043C19.3384 0.146529 18.9892 0.00153468 18.625 0.00121303C18.2608 0.000891372 17.9113 0.145269 17.6536 0.402585L10 8.05615L2.34643 0.402585C2.08866 0.144814 1.73905 0 1.37451 0C1.00997 0 0.660355 0.144814 0.402585 0.402585C0.144814 0.660355 0 1.00997 0 1.37451C0 1.73905 0.144814 2.08866 0.402585 2.34643L8.05615 10L0.402585 17.6536C0.144814 17.9113 0 18.2609 0 18.6255C0 18.99 0.144814 19.3396 0.402585 19.5974C0.660355 19.8552 1.00997 20 1.37451 20C1.73905 20 2.08866 19.8552 2.34643 19.5974L10 11.9438L17.6536 19.5974C17.9113 19.8552 18.2609 20 18.6255 20C18.99 20 19.3396 19.8552 19.5974 19.5974C19.8552 19.3396 20 18.99 20 18.6255C20 18.2609 19.8552 17.9113 19.5974 17.6536L11.9404 10Z" fill="#000"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div><label class="input-label field-label">{{ trans('generator.photo-size') }}</label>
                                <input class="input-range" type="range" name="multiplier" disabled value="1" min="0.5" max="1.5" step="0.1"></div>
                        </div>
                        <div class="workshop-form-row workshop-form-row-3">
                            <div class="input-wrap">
                                <label class="input-label field-label">{{ trans('generator.email') }}</label>
                                <div class="input-content">
                                    <input name="email" type="text" class="input" placeholder="test@test.ua" required></div>
                            </div>
                            <div class="input-wrap">
                                <label class="input-label field-label">{{ trans('generator.phone') }}</label>
                                <div class="input-content">
                                    <input name="phone" type="text" class="input" placeholder="38 (093) 000 00 00" required></div>
                            </div>
                        </div>
                        <div class="workshop-form-last">
                            <p class="workshop-form-text workshop-form-text--check">
                                <span class="workshop-form-text-wating">{{ trans('generator.photo-message') }}</span>
                                <span class="workshop-form-text-success">{{ trans('generator.photo-upload-message') }}</span>
                            </p>
                            <button type="submit" disabled="true" class="btn  btn--blue workshop-form-submit">
                                <span class="btn-text">{{ trans('generator.upload-btn') }}</span>
                                <svg class="btn-download-icon" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.1064 3.54443L19.1064 2.54443L17.1064 2.54443L17.1064 3.54443L19.1064 3.54443ZM17.1064 22.5444C17.1064 23.0967 17.5542 23.5444 18.1064 23.5444C18.6587 23.5444 19.1064 23.0967 19.1064 22.5444L17.1064 22.5444ZM28.1064 13.5444L29.1064 13.5444L29.1064 11.5444L28.1064 11.5444L28.1064 13.5444ZM17.329 21.9651C17.0646 22.4499 17.2433 23.0574 17.7281 23.3218C18.213 23.5863 18.8204 23.4076 19.0849 22.9228L17.329 21.9651ZM8.20695 11.5444L7.20695 11.5444L7.20695 13.5444L8.20695 13.5444L8.20695 11.5444ZM17.1064 3.54443L17.1064 22.4438L19.1064 22.4438L19.1064 3.54443L17.1064 3.54443ZM17.1064 22.4438L17.1064 22.5444L19.1064 22.5444L19.1064 22.4438L17.1064 22.4438ZM28.1064 11.5444C26.634 11.5444 25.2277 12.3397 24.0295 13.316C22.8069 14.3122 21.6567 15.6161 20.6779 16.8827C19.6946 18.1553 18.8595 19.4229 18.2715 20.3695C17.9769 20.8437 17.7429 21.2396 17.5819 21.5182C17.5014 21.6575 17.439 21.7677 17.3964 21.8438C17.3751 21.8818 17.3587 21.9113 17.3474 21.9318C17.3417 21.942 17.3374 21.9499 17.3343 21.9555C17.3328 21.9583 17.3316 21.9605 17.3307 21.9621C17.3303 21.9629 17.3299 21.9635 17.3296 21.964C17.3295 21.9643 17.3293 21.9646 17.3293 21.9647C17.3291 21.9649 17.329 21.9651 18.2069 22.4439C19.0849 22.9228 19.0848 22.9229 19.0848 22.923C19.0848 22.9229 19.0847 22.923 19.0848 22.9229C19.0848 22.9228 19.085 22.9226 19.0852 22.9222C19.0856 22.9214 19.0864 22.92 19.0875 22.918C19.0896 22.9141 19.0931 22.9078 19.0978 22.8993C19.1072 22.8823 19.1217 22.8562 19.141 22.8217C19.1796 22.7528 19.2377 22.6503 19.3136 22.5189C19.4654 22.2561 19.6885 21.8786 19.9704 21.4248C20.5354 20.5152 21.3314 19.3079 22.2605 18.1056C23.1941 16.8974 24.2375 15.7264 25.2929 14.8665C26.3727 13.9866 27.3289 13.5444 28.1064 13.5444L28.1064 11.5444ZM18.1064 22.4438C19.0336 22.0692 19.0335 22.0689 19.0334 22.0686C19.0333 22.0685 19.0332 22.0681 19.0331 22.0678C19.0328 22.0672 19.0325 22.0665 19.0321 22.0655C19.0314 22.0637 19.0304 22.0613 19.0292 22.0583C19.0267 22.0522 19.0233 22.0439 19.0188 22.0332C19.01 22.0119 18.9973 21.9814 18.9808 21.9424C18.9477 21.8644 18.8993 21.7522 18.8361 21.6107C18.7098 21.3278 18.5239 20.927 18.2825 20.4474C17.8009 19.4908 17.0922 18.2083 16.1875 16.9195C15.2863 15.6359 14.1664 14.3109 12.8529 13.299C11.538 12.2859 9.97225 11.5444 8.20695 11.5444L8.20695 13.5444C9.3914 13.5444 10.538 14.0402 11.6323 14.8833C12.728 15.7275 13.7143 16.8774 14.5506 18.0687C15.3832 19.2547 16.0433 20.4472 16.496 21.3467C16.7218 21.7952 16.8945 22.1678 17.01 22.4263C17.0677 22.5555 17.111 22.656 17.1394 22.723C17.1536 22.7565 17.1641 22.7816 17.1707 22.7977C17.1741 22.8058 17.1765 22.8116 17.1779 22.8151C17.1786 22.8168 17.1791 22.818 17.1793 22.8185C17.1794 22.8188 17.1795 22.819 17.1795 22.819C17.1795 22.819 17.1794 22.8188 17.1794 22.8188C17.1793 22.8187 17.1793 22.8185 18.1064 22.4438Z" fill="white"></path><path d="M1.54395 21.5444V30.5444H34.5439V21.5444" stroke="white" stroke-width="2"></path></svg>
                                <svg class="btn-load-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve"><rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2"><animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="1.6s" repeatCount="indefinite"></animate><animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="1.6s" repeatCount="indefinite"></animate><animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="1.6s" repeatCount="indefinite"></animate></rect><rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2"><animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="1.6s" repeatCount="indefinite"></animate><animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="1.6s" repeatCount="indefinite"></animate><animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="1.6s" repeatCount="indefinite"></animate></rect><rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2"><animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="1.6s" repeatCount="indefinite"></animate><animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="1.6s" repeatCount="indefinite"></animate><animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="1.6s" repeatCount="indefinite"></animate></rect></svg>
                            </button>
                        </div>
                    </form>
                    <div class="workshop-info-wrap">
                        <p class="workshop-info">{{ trans('generator.description') }}</p>
                    </div>
                    <div class="workshop-share-wrap">
                        <div class="workshop-share-container">
                            <div class="workshop-share-left"><a href="../" class="share-button">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M44 22.5808L45.5 22.5808L45.5 25.5808L44 25.5808L44 22.5808ZM2.66666 25.5808C1.83823 25.5808 1.16666 24.9092 1.16666 24.0808C1.16666 23.2524 1.83823 22.5808 2.66666 22.5808L2.66666 25.5808ZM17.0641 8.00001L17.0641 6.50001L20.0641 6.50001L20.0641 8.00001L17.0641 8.00001ZM3.55105 25.2326C2.8257 25.6328 1.91327 25.3692 1.51307 24.6438C1.11288 23.9185 1.37647 23.006 2.10183 22.6058L3.55105 25.2326ZM20.0642 40L20.0642 41.5L17.0642 41.5L17.0642 40L20.0642 40ZM44 25.5808L2.82657 25.5808L2.82656 22.5808L44 22.5808L44 25.5808ZM2.82657 25.5808L2.66666 25.5808L2.66666 22.5808L2.82656 22.5808L2.82657 25.5808ZM20.0641 8.00001C20.0641 10.3245 18.8213 12.5594 17.2732 14.4812C15.6964 16.4387 13.6302 18.2831 11.619 19.8551C9.59919 21.4338 7.58675 22.7749 6.08351 23.7195C5.33049 24.1927 4.70189 24.5684 4.25966 24.8269C4.03848 24.9562 3.86371 25.0563 3.74308 25.1247C3.68275 25.1589 3.63595 25.1852 3.60363 25.2033C3.58747 25.2123 3.57493 25.2193 3.56612 25.2242C3.56173 25.2267 3.55826 25.2286 3.55574 25.23C3.55448 25.2307 3.55346 25.2312 3.55268 25.2317C3.55229 25.2319 3.55188 25.2321 3.55169 25.2322C3.55134 25.2324 3.55105 25.2326 2.82644 23.9192C2.10183 22.6058 2.10166 22.6059 2.10155 22.606C2.1016 22.606 2.10155 22.606 2.10163 22.6059C2.10181 22.6058 2.10222 22.6056 2.10287 22.6052C2.10416 22.6045 2.1064 22.6033 2.10957 22.6015C2.11589 22.598 2.12592 22.5924 2.13954 22.5848C2.16677 22.5696 2.20834 22.5463 2.26328 22.5151C2.37318 22.4528 2.53653 22.3593 2.74567 22.237C3.1641 21.9924 3.765 21.6333 4.48738 21.1794C5.93496 20.2698 7.85693 18.9879 9.77152 17.4914C11.6948 15.9881 13.5629 14.305 14.9369 12.5993C16.3397 10.8578 17.0641 9.29372 17.0641 8.00001L20.0641 8.00001ZM2.82656 24.0808C3.39407 22.6923 3.39449 22.6925 3.39495 22.6927C3.39519 22.6928 3.39572 22.693 3.3962 22.6932C3.39715 22.6936 3.39833 22.6941 3.39976 22.6946C3.40261 22.6958 3.40642 22.6974 3.41116 22.6993C3.42064 22.7033 3.43387 22.7088 3.45073 22.7158C3.48444 22.7299 3.53268 22.7503 3.59447 22.7768C3.71803 22.8298 3.89591 22.9074 4.12036 23.0088C4.56905 23.2115 5.20507 23.5098 5.96621 23.8974C7.48472 24.6706 9.51956 25.8081 11.5639 27.2598C13.6007 28.7062 15.6984 30.5006 17.2985 32.6015C18.9005 34.7048 20.0642 37.1978 20.0642 40L17.0642 40C17.0642 38.0588 16.2607 36.1901 14.9119 34.4192C13.5612 32.6459 11.7245 31.0534 9.82691 29.7058C7.93682 28.3636 6.03724 27.3001 4.60495 26.5708C3.89067 26.2071 3.29719 25.9288 2.88522 25.7427C2.67935 25.6497 2.51911 25.5798 2.41214 25.534C2.35867 25.511 2.31853 25.4941 2.29269 25.4833C2.27977 25.4779 2.27043 25.474 2.26479 25.4717C2.26196 25.4705 2.26006 25.4697 2.2591 25.4693C2.25862 25.4691 2.25838 25.469 2.25837 25.469C2.25837 25.469 2.25854 25.4691 2.25853 25.4691C2.25877 25.4692 2.25906 25.4693 2.82656 24.0808Z"
                                            fill="black"></path>
                                    </svg>
                                </a><span class="workshop-share-text">{{ trans('generator.to-home') }}</span></div>
                            <div class="workshop-share-right">
                                <div class="workshop-share-right-top">
                                    <button class="workshop-share-top-btn share-button btn-share" id="share-open">
                                        <svg width="26" height="21" viewBox="0 0 26 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.38284 19.735C4.18315 17.8177 8.90925 13.75 15.6249 13.75V19L24.3749 10.25L15.6249 1.5V6.75C9.84987 6.75 2.44628 12.268 1.62487 19.3872C1.6135 19.4794 1.63177 19.5728 1.67703 19.6539C1.72229 19.735 1.79219 19.7996 1.87662 19.8384C1.96104 19.8771 2.05561 19.888 2.14662 19.8694C2.23763 19.8508 2.32037 19.8037 2.38284 19.735Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <span class="workshop-share-text">{{ trans('generator.share') }}</span></div>
                                <div class="workshop-share-btns share-btn"
                                     data-url="https://developer.mozilla.org/en-US/docs/Web/CSS/grid-template"
                                     data-title="testTitle" data-desc="testDescription"><a
                                        class="share-button btn-facebook" data-id="fb">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 13.0782C0.00151255 19.5128 4.65176 24.9916 10.9677 26V16.8584H7.66973V13.0782H10.9716V10.2006C10.824 8.83709 11.2869 7.47814 12.2347 6.49235C13.1825 5.50656 14.5171 4.9961 15.8763 5.09942C16.852 5.11527 17.8252 5.2027 18.7882 5.36102V8.5774H17.1451C16.5794 8.50285 16.0107 8.69083 15.5992 9.08839C15.1876 9.48595 14.9778 10.0501 15.0288 10.6218V13.0782H18.631L18.0551 16.8597H15.0288V26C21.8594 24.9138 26.6492 18.637 25.9283 11.7167C25.2073 4.79644 19.228 -0.344586 12.322 0.0180567C5.41608 0.3807 0.00109778 6.12006 0 13.0782Z"
                                                fill="black"></path>
                                        </svg>
                                    </a><a class="share-button btn-linkedin" data-id="in">
                                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.49333 0C1.1163 0 0 1.13673 0 2.53896C0 3.94119 1.1163 5.07792 2.49333 5.07792C3.87036 5.07792 4.98667 3.94119 4.98667 2.53896C4.98667 1.13673 3.87036 0 2.49333 0Z"
                                                fill="black"></path>
                                            <path
                                                d="M0.146667 7.16883C0.0656649 7.16883 0 7.2357 0 7.31818V22.8506C0 22.9331 0.0656649 23 0.146667 23H4.84C4.921 23 4.98667 22.9331 4.98667 22.8506V7.31818C4.98667 7.2357 4.921 7.16883 4.84 7.16883H0.146667Z"
                                                fill="black"></path>
                                            <path
                                                d="M7.77333 7.16883C7.69233 7.16883 7.62667 7.2357 7.62667 7.31818V22.8506C7.62667 22.9331 7.69233 23 7.77333 23H12.4667C12.5477 23 12.6133 22.9331 12.6133 22.8506V14.487C12.6133 13.8929 12.8451 13.323 13.2577 12.9029C13.6703 12.4828 14.2299 12.2468 14.8133 12.2468C15.3968 12.2468 15.9564 12.4828 16.369 12.9029C16.7815 13.323 17.0133 13.8929 17.0133 14.487V22.8506C17.0133 22.9331 17.079 23 17.16 23H21.8533C21.9343 23 22 22.9331 22 22.8506V12.5517C22 9.65223 19.5235 7.38389 16.6905 7.64615C15.8168 7.72704 14.9529 7.94821 14.1463 8.30025L12.6133 8.96924V7.31818C12.6133 7.2357 12.5477 7.16883 12.4667 7.16883H7.77333Z"
                                                fill="black"></path>
                                        </svg>
                                    </a><a class="share-button btn-telegram" data-id="tg">
                                        <svg width="26" height="22" viewBox="0 0 26 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2227 0.227189L0.67649 9.33887C0.662481 9.34427 0.648901 9.35072 0.635865 9.35817C0.444928 9.46633 -0.887572 10.2814 0.991334 11.0121L1.01063 11.0192L6.61739 12.8306C6.66017 12.8445 6.70546 12.8489 6.75011 12.8434C6.79476 12.838 6.83768 12.8229 6.87587 12.7991L20.7823 4.12262C20.8164 4.10134 20.8544 4.08701 20.894 4.08047C21.0875 4.04848 21.6446 3.98856 21.2922 4.43594C20.8935 4.94375 11.3949 13.4557 10.3407 14.3997C10.2799 14.4543 10.2423 14.5301 10.2356 14.6115L9.77547 20.0959C9.77542 20.1517 9.78837 20.2068 9.81332 20.2568C9.83826 20.3068 9.87451 20.3503 9.91919 20.3838C9.98258 20.4237 10.0571 20.4422 10.1318 20.4365C10.2065 20.4309 10.2774 20.4013 10.3341 20.3523L13.6653 17.375C13.7179 17.328 13.7851 17.3004 13.8556 17.2968C13.926 17.2932 13.9956 17.3138 14.0528 17.3552L19.8647 21.5751L19.8835 21.5878C20.0241 21.6747 21.5435 22.5588 21.9823 20.5844L25.994 1.5084C25.9996 1.44797 26.0539 0.783752 25.5791 0.391213C25.0804 -0.0190997 24.3746 0.188088 24.2684 0.210432C24.2528 0.21479 24.2375 0.220394 24.2227 0.227189Z"
                                                fill="black"></path>
                                        </svg>
                                    </a>
                                    <button class="workshop-share-close" id="share-close">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.9404 10L19.594 2.34643C19.8518 2.08912 19.9967 1.73994 19.9971 1.37572C19.9974 1.0115 19.853 0.66207 19.5957 0.4043C19.3384 0.146529 18.9892 0.00153468 18.625 0.00121303C18.2608 0.000891372 17.9113 0.145269 17.6536 0.402585L10 8.05615L2.34643 0.402585C2.08866 0.144814 1.73905 0 1.37451 0C1.00997 0 0.660355 0.144814 0.402585 0.402585C0.144814 0.660355 0 1.00997 0 1.37451C0 1.73905 0.144814 2.08866 0.402585 2.34643L8.05615 10L0.402585 17.6536C0.144814 17.9113 0 18.2609 0 18.6255C0 18.99 0.144814 19.3396 0.402585 19.5974C0.660355 19.8552 1.00997 20 1.37451 20C1.73905 20 2.08866 19.8552 2.34643 19.5974L10 11.9438L17.6536 19.5974C17.9113 19.8552 18.2609 20 18.6255 20C18.99 20 19.3396 19.8552 19.5974 19.5974C19.8552 19.3396 20 18.99 20 18.6255C20 18.2609 19.8552 17.9113 19.5974 17.6536L11.9404 10Z"
                                                fill="#000000"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($banners->isNotEmpty())
                        <section class="exemples-section">
                            <div class="exemples-title-wrap">
                                <h1 class="exemples-title">{{ trans('generator.examples-title') }}</h1>
                            </div>
                            <div class="exemples-body">
                                <div class="exemples-content">
                                    @foreach($banners as $banner)
                                        <div class="exemples-img-wrap">
                                            <img class="exemples-img" src="/storage/{{ $banner->getBannerPath() }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
