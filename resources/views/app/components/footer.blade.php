<footer class="footer">
    <div class="container">
        <div class="footer-container">
            <div class="footer-first">
                <a class="footer-logo" href="{{ route('home') }}">
                    <img src="/svg/logo-ua-mob-w.svg" alt="logo" title="polonez"></a>
                <div class="footer-soc">
                    @foreach($socialFooter as $social)
                        <a href="{{ $social->lang->url }}" class="footer-soc-el">
                            <img src="/storage/{{ $social->image }}">
                            <span class="footer-soc-text">{{ $social->lang->title }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="footer-tags">
                    <span class="footer-tags-text">{{ trans('footer.tag-1') }}</span>
                    <span class="footer-tags-text">{{ trans('footer.tag-2') }}</span>
                </div>
            </div>
            <div class="footer-last">
                <div class="footer-menu">
                    <nav class="footer-navigation">
                        <ul class="footer-menu-list">
                            @foreach($footerMenu as $key => $item)
                                <li class="footer-menu-el">
                                    <a class="footer-menu-text" href="{{ $item->lang->url }}">{{ $item->lang->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="footer-btns">
                    <a href="{{ trans('links.stickers-download') }}" class="btn  btn--trsnt "><span class="btn-text">{{ trans('footer.btn-1') }}</span>
                        <svg class="btn-download" width="36" height="36" viewBox="0 0 36 36" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.1064 3.54443L19.1064 2.54443L17.1064 2.54443L17.1064 3.54443L19.1064 3.54443ZM17.1064 22.5444C17.1064 23.0967 17.5542 23.5444 18.1064 23.5444C18.6587 23.5444 19.1064 23.0967 19.1064 22.5444L17.1064 22.5444ZM28.1064 13.5444L29.1064 13.5444L29.1064 11.5444L28.1064 11.5444L28.1064 13.5444ZM17.329 21.9651C17.0646 22.4499 17.2433 23.0574 17.7281 23.3218C18.213 23.5863 18.8204 23.4076 19.0849 22.9228L17.329 21.9651ZM8.20695 11.5444L7.20695 11.5444L7.20695 13.5444L8.20695 13.5444L8.20695 11.5444ZM17.1064 3.54443L17.1064 22.4438L19.1064 22.4438L19.1064 3.54443L17.1064 3.54443ZM17.1064 22.4438L17.1064 22.5444L19.1064 22.5444L19.1064 22.4438L17.1064 22.4438ZM28.1064 11.5444C26.634 11.5444 25.2277 12.3397 24.0295 13.316C22.8069 14.3122 21.6567 15.6161 20.6779 16.8827C19.6946 18.1553 18.8595 19.4229 18.2715 20.3695C17.9769 20.8437 17.7429 21.2396 17.5819 21.5182C17.5014 21.6575 17.439 21.7677 17.3964 21.8438C17.3751 21.8818 17.3587 21.9113 17.3474 21.9318C17.3417 21.942 17.3374 21.9499 17.3343 21.9555C17.3328 21.9583 17.3316 21.9605 17.3307 21.9621C17.3303 21.9629 17.3299 21.9635 17.3296 21.964C17.3295 21.9643 17.3293 21.9646 17.3293 21.9647C17.3291 21.9649 17.329 21.9651 18.2069 22.4439C19.0849 22.9228 19.0848 22.9229 19.0848 22.923C19.0848 22.9229 19.0847 22.923 19.0848 22.9229C19.0848 22.9228 19.085 22.9226 19.0852 22.9222C19.0856 22.9214 19.0864 22.92 19.0875 22.918C19.0896 22.9141 19.0931 22.9078 19.0978 22.8993C19.1072 22.8823 19.1217 22.8562 19.141 22.8217C19.1796 22.7528 19.2377 22.6503 19.3136 22.5189C19.4654 22.2561 19.6885 21.8786 19.9704 21.4248C20.5354 20.5152 21.3314 19.3079 22.2605 18.1056C23.1941 16.8974 24.2375 15.7264 25.2929 14.8665C26.3727 13.9866 27.3289 13.5444 28.1064 13.5444L28.1064 11.5444ZM18.1064 22.4438C19.0336 22.0692 19.0335 22.0689 19.0334 22.0686C19.0333 22.0685 19.0332 22.0681 19.0331 22.0678C19.0328 22.0672 19.0325 22.0665 19.0321 22.0655C19.0314 22.0637 19.0304 22.0613 19.0292 22.0583C19.0267 22.0522 19.0233 22.0439 19.0188 22.0332C19.01 22.0119 18.9973 21.9814 18.9808 21.9424C18.9477 21.8644 18.8993 21.7522 18.8361 21.6107C18.7098 21.3278 18.5239 20.927 18.2825 20.4474C17.8009 19.4908 17.0922 18.2083 16.1875 16.9195C15.2863 15.6359 14.1664 14.3109 12.8529 13.299C11.538 12.2859 9.97225 11.5444 8.20695 11.5444L8.20695 13.5444C9.3914 13.5444 10.538 14.0402 11.6323 14.8833C12.728 15.7275 13.7143 16.8774 14.5506 18.0687C15.3832 19.2547 16.0433 20.4472 16.496 21.3467C16.7218 21.7952 16.8945 22.1678 17.01 22.4263C17.0677 22.5555 17.111 22.656 17.1394 22.723C17.1536 22.7565 17.1641 22.7816 17.1707 22.7977C17.1741 22.8058 17.1765 22.8116 17.1779 22.8151C17.1786 22.8168 17.1791 22.818 17.1793 22.8185C17.1794 22.8188 17.1795 22.819 17.1795 22.819C17.1795 22.819 17.1794 22.8188 17.1794 22.8188C17.1793 22.8187 17.1793 22.8185 18.1064 22.4438Z"
                                fill="white"></path>
                            <path d="M1.54395 21.5444V30.5444H34.5439V21.5444" stroke="white" stroke-width="2"></path>
                        </svg>
                    </a>
                    <a href="{{ route('image-generation.generator') }}" class="btn  btn--trsnt "><span class="btn-text">{{ trans('footer.btn-2') }}</span>
                        <svg class="btn-arrow" width="45" height="36" viewBox="0 0 45 36" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 16.5808L0.499997 16.5808L0.499996 19.5808L2 19.5808L2 16.5808ZM43.3333 19.5808C44.1618 19.5808 44.8333 18.9092 44.8333 18.0808C44.8333 17.2524 44.1618 16.5808 43.3333 16.5808L43.3333 19.5808ZM28.9359 2.00001L28.9359 0.500006L25.9359 0.500006L25.9359 2.00001L28.9359 2.00001ZM42.4489 19.2326C43.1743 19.6328 44.0867 19.3692 44.4869 18.6438C44.8871 17.9185 44.6235 17.006 43.8982 16.6058L42.4489 19.2326ZM25.9358 34L25.9358 35.5L28.9358 35.5L28.9358 34L25.9358 34ZM2 19.5808L43.1734 19.5808L43.1734 16.5808L2 16.5808L2 19.5808ZM43.1734 19.5808L43.3333 19.5808L43.3333 16.5808L43.1734 16.5808L43.1734 19.5808ZM25.9359 2.00001C25.9359 4.32447 27.1787 6.55937 28.7268 8.48119C30.3036 10.4387 32.3698 12.2831 34.381 13.8551C36.4008 15.4338 38.4133 16.7749 39.9165 17.7195C40.6695 18.1927 41.2981 18.5684 41.7403 18.8269C41.9615 18.9562 42.1363 19.0563 42.2569 19.1247C42.3172 19.1589 42.364 19.1852 42.3964 19.2033C42.4125 19.2123 42.4251 19.2193 42.4339 19.2242C42.4383 19.2267 42.4417 19.2286 42.4443 19.23C42.4455 19.2307 42.4465 19.2312 42.4473 19.2317C42.4477 19.2319 42.4481 19.2321 42.4483 19.2322C42.4487 19.2324 42.4489 19.2326 43.1736 17.9192C43.8982 16.6058 43.8983 16.6059 43.8984 16.606C43.8984 16.606 43.8985 16.606 43.8984 16.6059C43.8982 16.6058 43.8978 16.6056 43.8971 16.6052C43.8958 16.6045 43.8936 16.6033 43.8904 16.6015C43.8841 16.598 43.8741 16.5924 43.8605 16.5848C43.8332 16.5696 43.7917 16.5463 43.7367 16.5151C43.6268 16.4528 43.4635 16.3593 43.2543 16.237C42.8359 15.9924 42.235 15.6333 41.5126 15.1794C40.065 14.2698 38.1431 12.9879 36.2285 11.4914C34.3052 9.98813 32.4371 8.30499 31.0631 6.59925C29.6603 4.85781 28.9359 3.29372 28.9359 2.00001L25.9359 2.00001ZM43.1734 18.0808C42.6059 16.6923 42.6055 16.6925 42.605 16.6927C42.6048 16.6928 42.6043 16.693 42.6038 16.6932C42.6029 16.6936 42.6017 16.6941 42.6002 16.6946C42.5974 16.6958 42.5936 16.6974 42.5888 16.6993C42.5794 16.7033 42.5661 16.7088 42.5493 16.7158C42.5156 16.7299 42.4673 16.7503 42.4055 16.7768C42.282 16.8298 42.1041 16.9074 41.8796 17.0088C41.4309 17.2115 40.7949 17.5098 40.0338 17.8974C38.5153 18.6706 36.4804 19.8081 34.4361 21.2598C32.3993 22.7062 30.3016 24.5006 28.7015 26.6015C27.0995 28.7048 25.9358 31.1978 25.9358 34L28.9358 34C28.9358 32.0588 29.7393 30.1901 31.0881 28.4192C32.4388 26.6459 34.2755 25.0534 36.1731 23.7058C38.0632 22.3636 39.9628 21.3001 41.3951 20.5708C42.1093 20.2071 42.7028 19.9288 43.1148 19.7427C43.3207 19.6497 43.4809 19.5798 43.5879 19.534C43.6413 19.511 43.6815 19.4941 43.7073 19.4833C43.7202 19.4779 43.7296 19.474 43.7352 19.4717C43.738 19.4705 43.7399 19.4697 43.7409 19.4693C43.7414 19.4691 43.7416 19.469 43.7416 19.469C43.7416 19.469 43.7415 19.4691 43.7415 19.4691C43.7412 19.4692 43.7409 19.4693 43.1734 18.0808Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </div>
                <div class="footer-copyright">
                    <div class="footer-copyright-content"><p class="footer-copyright-sentences">{!! trans('footer.copyright') !!}</p></div>
                </div>
            </div>
        </div>
    </div>
</footer>
