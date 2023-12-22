<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <meta name='robots' content='noindex, nofollow' />
    <title>Generator</title>

    <link rel="stylesheet" href="/css/baner.css"/>
    <link rel="stylesheet" href="/css/baner-generator.css"/>
</head>
<body id="">
<div>
    <div class="generator-parent">
        <img src="/storage/{{ $banner->image }}" width="{{ $banner->width }}" height="{{ $banner->height }}" alt="exemple">
        <div class="generator {{ $banner->dark_theme ? 'generator--inversion' : '' }}" id="generator" style="background-color: {{ $banner->bg_color }}">
            <p class="generator-title">
                Коли купуєш <br><span class="generator-title-name" id="generator-text">{{ $banner->name }}</span>
                — <br>плюсуєш своє
            </p>
            <div class="generator-border-img" id="generator-border">
                <svg width="249" height="291" viewBox="0 0 249 291" fill="{{ $banner->border_color }}" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_291_945)">
                        <path
                            d="M232.651 0.840088H217.113H201.921H201.574H186.482H186.382H170.944H155.768H155.406H140.333H140.234H124.795H109.273H109.257H93.7345H78.2123H78.1964H62.6741H47.331H47.1359H31.9162H31.7928H16.378H0.839844V16.4051V31.9702V47.5353H16.378V31.9702V16.4051H31.7928H31.9162H47.1359H47.331H62.6741H78.1964H78.2123H93.7345H109.257H109.273H124.795H140.234H140.333H155.406H155.768H170.944H186.382H186.482H201.574H201.921H217.113H232.651V31.9702V47.5353H248.185V31.9702V16.4051V0.840088H232.651Z"
                            fill="#1C73FF"></path>
                        <path
                            d="M232.651 290.205H217.113H201.921H201.574H186.482H186.382H170.944H155.768H155.406H140.333H140.234H124.795H109.273H109.257H93.7345H78.2123H78.1964H62.6741H47.331H47.1359H31.9162H31.7928H16.378H0.839844V274.64V259.075V243.51H16.378V259.075V274.64H31.7928H31.9162H47.1359H47.331H62.6741H78.1964H78.2123H93.7345H109.257H109.273H124.795H140.234H140.333H155.406H155.768H170.944H186.382H186.482H201.574H201.921H217.113H232.651V259.075V243.51H248.185V259.075V274.64V290.205H232.651Z"
                            fill="#1C73FF"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_291_945">
                            <rect width="247.345" height="289.365" fill="white"
                                  transform="translate(0.839844 0.840088)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="generator-logo">
                <svg width="219" height="65" viewBox="0 0 219 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7.79248V30.4993H11.3334V19.147H22.6646V30.4993H33.998V7.79248H0Z" fill="white"></path>
                    <path d="M22.6646 41.8538V53.2082H11.3334V41.8538H0V64.5606H33.998V41.8538H22.6646Z"
                          fill="white"></path>
                    <path d="M74.8479 7.77979V30.5638H69.6475V12.469H57.758V30.5638H52.5576V7.77979H74.8479Z"
                          fill="white"></path>
                    <path
                        d="M101.108 30.5638H95.9077V12.469H86.0632L85.8899 21.1167C85.8214 24.3121 85.1497 26.6846 83.8791 28.2363C82.6084 29.7879 80.6895 30.5638 78.1247 30.5638H76.2871V25.8745H77.1535C78.5867 25.8745 79.5921 25.493 80.1697 24.7279C80.7473 23.9628 81.0468 22.6212 81.0703 20.6988L81.2778 7.77979H101.106V30.5638H101.108Z"
                        fill="white"></path>
                    <path
                        d="M134.256 8.78683C136.267 9.73625 137.82 11.0907 138.92 12.8503C140.017 14.6098 140.567 16.6715 140.567 19.0333V19.3462C140.567 21.708 140.017 23.7633 138.92 25.5099C137.822 27.2588 136.267 28.6068 134.256 29.5562C132.246 30.5056 129.888 30.9793 127.184 30.9793C124.78 30.9793 122.636 30.5978 120.754 29.8327C118.869 29.0697 117.34 27.9746 116.161 26.5515C114.982 25.1285 114.232 23.4439 113.909 21.4979H109.887V30.5635H104.687V7.77954H109.887V16.8451H113.909C114.232 14.9013 114.982 13.2167 116.161 11.7915C117.34 10.3685 118.871 9.27333 120.754 8.51036C122.636 7.7474 124.78 7.36377 127.184 7.36377C129.888 7.36377 132.246 7.83955 134.256 8.78683ZM135.262 18.9969C135.262 16.8215 134.562 15.1413 133.165 13.9604C131.766 12.7795 129.773 12.1902 127.186 12.1902C124.6 12.1902 122.594 12.786 121.171 13.9797C119.751 15.1735 119.038 16.8451 119.038 18.999V19.4148C119.038 21.5687 119.744 23.2296 121.154 24.3976C122.564 25.5678 124.574 26.1507 127.186 26.1507C129.798 26.1507 131.826 25.5721 133.202 24.4148C134.577 23.2575 135.264 21.5901 135.264 19.4126V18.9969H135.262Z"
                        fill="white"></path>
                    <path
                        d="M148.767 29.5563C146.688 28.6069 145.085 27.2588 143.964 25.51C142.843 23.7612 142.283 21.7187 142.283 19.3805V18.9991C142.283 16.6609 142.843 14.6184 143.964 12.8696C145.085 11.1208 146.685 9.76631 148.767 8.80617C150.846 7.84604 153.261 7.36597 156.012 7.36597C158.554 7.36597 160.836 7.78174 162.86 8.61543C164.881 9.44912 166.464 10.6064 167.609 12.0895C168.753 13.5726 169.324 15.2378 169.324 17.0916V17.3703H164.021V17.0916C164.021 16.1422 163.679 15.2978 162.999 14.5563C162.316 13.8147 161.369 13.2361 160.156 12.8203C158.943 12.4045 157.55 12.1945 155.978 12.1945C153.227 12.1945 151.141 12.7732 149.721 13.9305C148.3 15.0878 147.588 16.7552 147.588 18.9326V19.4534C147.588 21.6544 148.292 23.3197 149.702 24.4556C151.111 25.5914 153.214 26.1572 156.01 26.1572C158.436 26.1572 160.378 25.7114 161.833 24.8199C163.29 23.9283 164.017 22.7539 164.017 21.2944V21.0522H169.32V21.2944C169.32 23.1461 168.749 24.8092 167.604 26.2772C166.46 27.7475 164.877 28.9005 162.855 29.732C160.832 30.5657 158.551 30.9815 156.008 30.9815C153.257 30.9815 150.842 30.5078 148.763 29.5584L148.767 29.5563Z"
                        fill="white"></path>
                    <path
                        d="M193.981 7.77979V8.57918L184.934 25.3537C183.894 27.2997 182.808 28.6542 181.676 29.4172C180.542 30.1823 179.053 30.5638 177.203 30.5638H172.176V25.8745H177.132C177.594 25.8745 177.969 25.8402 178.26 25.7695C178.549 25.7009 178.81 25.5723 179.041 25.388L168.918 8.57918V7.77979H174.36L181.918 20.8038L188.573 7.77979H193.981Z"
                        fill="white"></path>
                    <path
                        d="M200.336 7.77968V23.4076L212.955 7.77968H218.155V30.5637H212.989V14.9357L200.37 30.5637H195.17V7.77968H200.336ZM200.995 4.42778C199.724 3.48907 199.089 2.10673 199.089 0.276468V0H203.457V0.278611C203.457 0.788684 203.735 1.18088 204.289 1.45949C204.843 1.73811 205.641 1.87527 206.681 1.87527C207.629 1.87527 208.362 1.73596 208.882 1.45949C209.402 1.18088 209.663 0.788684 209.663 0.278611V0H214.273V0.278611C214.273 3.98414 211.742 5.83583 206.681 5.83583C204.161 5.83583 202.266 5.36648 200.995 4.42992V4.42778Z"
                        fill="white"></path>
                    <path
                        d="M58.0014 63.5726C55.9222 62.6232 54.3199 61.2752 53.199 59.5263C52.078 57.7775 51.5176 55.7351 51.5176 53.3969V53.0154C51.5176 50.6772 52.078 48.6348 53.199 46.886C54.3199 45.1371 55.92 43.7848 58.0014 42.8225C60.0807 41.8624 62.4959 41.3823 65.2468 41.3823C67.7882 41.3823 70.0707 41.7981 72.0944 42.6318C74.1159 43.4655 75.6989 44.6228 76.8433 46.1059C77.9878 47.5889 78.559 49.2542 78.559 51.108V51.3866H73.2559V51.108C73.2559 50.1586 72.9137 49.3142 72.2334 48.5726C71.551 47.8311 70.6034 47.2524 69.3904 46.8367C68.1775 46.4209 66.7849 46.2109 65.2126 46.2109C62.4616 46.2109 60.3759 46.7895 58.9555 47.9468C57.5351 49.1041 56.8227 50.7715 56.8227 52.9468V53.4676C56.8227 55.6687 57.5265 57.3339 58.9363 58.4698C60.346 59.6056 62.4488 60.1714 65.2447 60.1714C67.6705 60.1714 69.6129 59.7257 71.0676 58.8341C72.5243 57.9425 73.2517 56.7681 73.2517 55.3086V55.0664H78.5547V55.3086C78.5547 57.1603 77.9835 58.8212 76.8391 60.2936C75.6946 61.7638 74.1116 62.9147 72.0901 63.7484C70.0664 64.5821 67.786 65 65.2426 65C62.4916 65 60.0764 64.5263 57.9972 63.5769L58.0014 63.5726Z"
                        fill="white"></path>
                    <path
                        d="M102.914 54.8906C103.468 55.7243 103.746 56.6973 103.746 57.8074V58.1889C103.746 60.1563 102.982 61.7144 101.457 62.8589C99.9316 64.0054 97.863 64.5777 95.2511 64.5777H81.0383V41.7937H94.5922C97.2726 41.7937 99.3476 42.3209 100.815 43.3732C102.283 44.4277 103.016 45.9021 103.016 47.801V48.1825C103.016 50.2206 102.171 51.7937 100.486 52.906C101.549 53.3925 102.357 54.0526 102.911 54.8863L102.914 54.8906ZM86.2387 46.3479V50.9321H94.558C96.7078 50.9321 97.7817 50.2271 97.7817 48.8147V48.4675C97.7817 47.7731 97.51 47.2459 96.9667 46.888C96.4233 46.5301 95.6318 46.3501 94.5922 46.3501H86.2387V46.3479ZM98.4406 57.4259C98.4406 55.99 97.3539 55.2721 95.1826 55.2721H86.2387V60.0299H95.1826C96.2222 60.0299 97.0244 59.8327 97.5913 59.4405C98.1582 59.0462 98.4406 58.4911 98.4406 57.7731V57.4259Z"
                        fill="white"></path>
                    <path
                        d="M111.77 63.5726C109.735 62.6232 108.159 61.2687 107.038 59.5092C105.917 57.7497 105.356 55.7008 105.356 53.3626V53.0497C105.356 50.7115 105.917 48.6627 107.038 46.9031C108.159 45.1436 109.742 43.7827 111.787 42.8225C113.832 41.8624 116.206 41.3823 118.91 41.3823C121.614 41.3823 124.019 41.8624 126.051 42.8225C128.083 43.7848 129.655 45.1436 130.766 46.9031C131.876 48.6627 132.43 50.7115 132.43 53.0497V53.3626C132.43 55.7008 131.876 57.7518 130.766 59.5092C129.655 61.2687 128.085 62.6232 126.051 63.5726C124.017 64.5221 121.636 64.9957 118.91 64.9957C116.185 64.9957 113.802 64.5221 111.77 63.5726ZM125.03 58.4333C126.43 57.276 127.127 55.6086 127.127 53.4312V53.0154C127.127 50.8401 126.417 49.1599 124.994 47.979C123.574 46.7981 121.546 46.2087 118.91 46.2087C116.275 46.2087 114.213 46.7981 112.792 47.979C111.372 49.1599 110.659 50.838 110.659 53.0154V53.4312C110.659 55.6086 111.37 57.276 112.792 58.4333C114.213 59.5906 116.253 60.1693 118.91 60.1693C121.567 60.1693 123.631 59.5906 125.028 58.4333H125.03Z"
                        fill="white"></path>
                    <path
                        d="M155.907 51.3822V51.2086C155.907 50.2142 155.565 49.3333 154.885 48.5682C154.202 47.8031 153.25 47.203 152.024 46.7616C150.799 46.3222 149.402 46.1015 147.83 46.1015C145.541 46.1015 143.71 46.5172 142.334 47.3509C140.959 48.1846 140.075 49.3891 139.681 50.9622H151.571V55.4071H139.681C140.051 56.9823 140.929 58.1846 142.317 59.0183C143.703 59.852 145.551 60.2678 147.864 60.2678C149.457 60.2678 150.863 60.0535 152.076 59.6248C153.289 59.1962 154.23 58.6068 154.902 57.8546C155.571 57.1023 155.907 56.2279 155.907 55.2335V55.0599H161.21V55.2335C161.21 57.0616 160.633 58.7247 159.477 60.2163C158.322 61.7101 156.726 62.8781 154.694 63.7247C152.66 64.5712 150.384 64.9913 147.864 64.9913C145.113 64.9913 142.704 64.5177 140.635 63.5682C138.567 62.6188 136.973 61.2708 135.852 59.5219C134.731 57.7731 134.171 55.7307 134.171 53.3925V53.011C134.171 50.6728 134.731 48.624 135.852 46.8644C136.973 45.1049 138.567 43.7504 140.635 42.801C142.704 41.8516 145.113 41.3779 147.864 41.3779C150.405 41.3779 152.688 41.8001 154.711 42.6467C156.733 43.4932 158.322 44.6677 159.477 46.1722C160.633 47.6767 161.21 49.3569 161.21 51.2086V51.3822H155.907Z"
                        fill="white"></path>
                </svg>
            </div>
            <div class="generator-product" id="generator-product">
                <img src="/storage/{{ $banner->image }}" id="product-img">
            </div>
        </div>
    </div>
</div>
</body>
</html>
