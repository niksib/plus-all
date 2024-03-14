<div id="modal-download" class="modal">
    <div class="modal-container">
        <div class="modal-body">
            <div class="modal-agree-block modal-agree-block--active">
                {!! $downloadModalInfo?->lang->content !!}
                <div class="modal-agree-block-submit-wrap">
                    <button type="submit" class="btn  btn--blue modal-agree-block-submit"><span class="btn-text">{{ trans('modal-download.btn-confirm') }}</span>
                    </button>
                </div>
            </div>
            <form class="modal-form-block" id="form-stickers"><span class="modal-title">{{ trans('modal-download.btn-info') }}</span>
                @csrf
                <div class="modal-form-block-row">
                    <div class="input-wrap"><label class="input-label field-label">{{ trans('modal-download.input-pib') }}</label>
                        <div class="input-content"><input name="name" type="text" class="input" placeholder="{{ trans('modal-download.input-pib-placeholder') }}" required></div>
                    </div>
                    <div class="input-wrap   "><label class="input-label field-label">{{ trans('modal-download.input-email') }}</label>
                        <div class="input-content"><input name="email" type="text" class="input"
                                                          placeholder="{{ trans('modal-download.input-email-placeholder') }}" required></div>
                    </div>
                    <div class="input-wrap   "><label class="input-label field-label">{{ trans('modal-download.input-phone') }}</label>
                        <div class="input-content"><input name="phone" type="text" class="input"
                                                          placeholder="{{ trans('modal-download.input-phone-placeholder') }}" required></div>
                    </div>
                </div>
                <div class="modal-form-block-submit-wrap">
                    <button type="submit" disabled class="btn btn--blue modal-form-block-submit"><span
                            class="btn-text">{{ trans('modal-download.download-btn') }}</span>
                        <svg class="btn-download-icon" width="36" height="36" viewBox="0 0 36 36" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.1064 3.54443L19.1064 2.54443L17.1064 2.54443L17.1064 3.54443L19.1064 3.54443ZM17.1064 22.5444C17.1064 23.0967 17.5542 23.5444 18.1064 23.5444C18.6587 23.5444 19.1064 23.0967 19.1064 22.5444L17.1064 22.5444ZM28.1064 13.5444L29.1064 13.5444L29.1064 11.5444L28.1064 11.5444L28.1064 13.5444ZM17.329 21.9651C17.0646 22.4499 17.2433 23.0574 17.7281 23.3218C18.213 23.5863 18.8204 23.4076 19.0849 22.9228L17.329 21.9651ZM8.20695 11.5444L7.20695 11.5444L7.20695 13.5444L8.20695 13.5444L8.20695 11.5444ZM17.1064 3.54443L17.1064 22.4438L19.1064 22.4438L19.1064 3.54443L17.1064 3.54443ZM17.1064 22.4438L17.1064 22.5444L19.1064 22.5444L19.1064 22.4438L17.1064 22.4438ZM28.1064 11.5444C26.634 11.5444 25.2277 12.3397 24.0295 13.316C22.8069 14.3122 21.6567 15.6161 20.6779 16.8827C19.6946 18.1553 18.8595 19.4229 18.2715 20.3695C17.9769 20.8437 17.7429 21.2396 17.5819 21.5182C17.5014 21.6575 17.439 21.7677 17.3964 21.8438C17.3751 21.8818 17.3587 21.9113 17.3474 21.9318C17.3417 21.942 17.3374 21.9499 17.3343 21.9555C17.3328 21.9583 17.3316 21.9605 17.3307 21.9621C17.3303 21.9629 17.3299 21.9635 17.3296 21.964C17.3295 21.9643 17.3293 21.9646 17.3293 21.9647C17.3291 21.9649 17.329 21.9651 18.2069 22.4439C19.0849 22.9228 19.0848 22.9229 19.0848 22.923C19.0848 22.9229 19.0847 22.923 19.0848 22.9229C19.0848 22.9228 19.085 22.9226 19.0852 22.9222C19.0856 22.9214 19.0864 22.92 19.0875 22.918C19.0896 22.9141 19.0931 22.9078 19.0978 22.8993C19.1072 22.8823 19.1217 22.8562 19.141 22.8217C19.1796 22.7528 19.2377 22.6503 19.3136 22.5189C19.4654 22.2561 19.6885 21.8786 19.9704 21.4248C20.5354 20.5152 21.3314 19.3079 22.2605 18.1056C23.1941 16.8974 24.2375 15.7264 25.2929 14.8665C26.3727 13.9866 27.3289 13.5444 28.1064 13.5444L28.1064 11.5444ZM18.1064 22.4438C19.0336 22.0692 19.0335 22.0689 19.0334 22.0686C19.0333 22.0685 19.0332 22.0681 19.0331 22.0678C19.0328 22.0672 19.0325 22.0665 19.0321 22.0655C19.0314 22.0637 19.0304 22.0613 19.0292 22.0583C19.0267 22.0522 19.0233 22.0439 19.0188 22.0332C19.01 22.0119 18.9973 21.9814 18.9808 21.9424C18.9477 21.8644 18.8993 21.7522 18.8361 21.6107C18.7098 21.3278 18.5239 20.927 18.2825 20.4474C17.8009 19.4908 17.0922 18.2083 16.1875 16.9195C15.2863 15.6359 14.1664 14.3109 12.8529 13.299C11.538 12.2859 9.97225 11.5444 8.20695 11.5444L8.20695 13.5444C9.3914 13.5444 10.538 14.0402 11.6323 14.8833C12.728 15.7275 13.7143 16.8774 14.5506 18.0687C15.3832 19.2547 16.0433 20.4472 16.496 21.3467C16.7218 21.7952 16.8945 22.1678 17.01 22.4263C17.0677 22.5555 17.111 22.656 17.1394 22.723C17.1536 22.7565 17.1641 22.7816 17.1707 22.7977C17.1741 22.8058 17.1765 22.8116 17.1779 22.8151C17.1786 22.8168 17.1791 22.818 17.1793 22.8185C17.1794 22.8188 17.1795 22.819 17.1795 22.819C17.1795 22.819 17.1794 22.8188 17.1794 22.8188C17.1793 22.8187 17.1793 22.8185 18.1064 22.4438Z"
                                  fill="white"></path>
                            <path d="M1.54395 21.5444V30.5444H34.5439V21.5444" stroke="white"
                                  stroke-width="2"></path>
                        </svg>
                        <svg class="btn-load-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px"
                             viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve"><rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2"><animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="1.6s" repeatCount="indefinite"></animate><animate
                                    attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="1.6s"
                                    repeatCount="indefinite"></animate><animate attributeName="y" attributeType="XML"
                                                                                values="10; 5; 10" begin="0s" dur="1.6s"
                                                                                repeatCount="indefinite"></animate></rect>
                            <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2"><animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="1.6s" repeatCount="indefinite"></animate>
                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                         begin="0.15s" dur="1.6s" repeatCount="indefinite"></animate>
                                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s"
                                         dur="1.6s" repeatCount="indefinite"></animate></rect>
                            <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2"><animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="1.6s" repeatCount="indefinite"></animate>
                                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s"
                                         dur="1.6s" repeatCount="indefinite"></animate>
                                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s"
                                         dur="1.6s" repeatCount="indefinite"></animate></rect></svg>
                    </button>
                </div>
            </form>
        </div>
        <button class="modal-close">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.9404 10L19.594 2.34643C19.8518 2.08912 19.9967 1.73994 19.9971 1.37572C19.9974 1.0115 19.853 0.66207 19.5957 0.4043C19.3384 0.146529 18.9892 0.00153468 18.625 0.00121303C18.2608 0.000891372 17.9113 0.145269 17.6536 0.402585L10 8.05615L2.34643 0.402585C2.08866 0.144814 1.73905 0 1.37451 0C1.00997 0 0.660355 0.144814 0.402585 0.402585C0.144814 0.660355 0 1.00997 0 1.37451C0 1.73905 0.144814 2.08866 0.402585 2.34643L8.05615 10L0.402585 17.6536C0.144814 17.9113 0 18.2609 0 18.6255C0 18.99 0.144814 19.3396 0.402585 19.5974C0.660355 19.8552 1.00997 20 1.37451 20C1.73905 20 2.08866 19.8552 2.34643 19.5974L10 11.9438L17.6536 19.5974C17.9113 19.8552 18.2609 20 18.6255 20C18.99 20 19.3396 19.8552 19.5974 19.5974C19.8552 19.3396 20 18.99 20 18.6255C20 18.2609 19.8552 17.9113 19.5974 17.6536L11.9404 10Z"
                      fill="#000"></path>
            </svg>
        </button>
    </div>
</div>
