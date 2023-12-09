<div class="become-partner-form-section bcg-light-blue" id="contact">
    <div class="become-partner-container">
        <div class="become-partner-form__wrapper">
            <h3 class="become-partner-form__title">{{ trans('become_partner.form-title') }}</h3>
            <form class="become-partner-form__form" method="POST" action="{{ $formAction }}">
                <div class="become-partner-form__row become-partner-form__row--double">
                    <div class="become-partner-form__input_group">
                        <div class="become-partner-form__label">{{ trans('become_partner.form-format') }}</div>
                        <select class="become-partner-form__select select" name="format">
                            <option value="mini" @if($selectedType === 'mini') selected @endif>{{ trans('become_partner.form-option-mini') }}</option>
                            <option value="office" @if($selectedType === 'office') selected @endif>{{ trans('become_partner.form-option-office') }}</option>
                            <option value="postomat" @if($selectedType === 'postomat') selected @endif>{{ trans('become_partner.form-option-postomat') }}</option>
                        </select>
                    </div>
                    <div class="become-partner-form__input_group">
                        <div class="become-partner-form__label">{{ trans('become_partner.form-location') }}</div>
                        <input class="become-partner-form__input" name="location" type="text" maxlength="255"/>
                    </div>
                </div>
                <div class="become-partner-form__row become-partner-form__row--triple">
                    <div class="become-partner-form__input_group">
                        <div class="become-partner-form__label">{{ trans('become_partner.form-name') }}</div>
                        <input class="become-partner-form__input" name="name" type="text" maxlength="255" required/>
                    </div>
                    <div class="become-partner-form__input_group">
                        <div class="become-partner-form__label">{{ trans('become_partner.form-phone') }}</div>
                        <input class="become-partner-form__input" id="phone-number" name="phone_full" type="text" maxlength="32" required/>
                    </div>
                    <div class="become-partner-form__input_group">
                        <div class="become-partner-form__label">{{ trans('become_partner.form-email') }}</div>
                        <input class="become-partner-form__input" name="email" type="email" maxlength="255" required/>
                    </div>
                </div>
                <div class="become-partner-form__row become-partner-form__row--single">
                    <div class="become-partner-form__input_group">
                        <div class="become-partner-form__label">{{ trans('become_partner.form-text') }}</div>
                        <textarea class="become-partner-form__textarea" name="comment" rows="3" maxlength="2000"></textarea>
                    </div>
                </div>
                <div class="become-partner-form__row become-partner-form__row--submit">
                    <button class="become-partner-form__submit" type="submit">
                        {{ trans('become_partner.form-submit') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                            <path d="M7.99898 7.54362C7.98946 7.82937 7.87439 8.10176 7.67543 8.3091L2.02751 14.1413C1.73581 14.4422 1.30442 14.5659 0.895824 14.466C0.487245 14.3659 0.163359 14.0575 0.0464929 13.6567C-0.0705502 13.2559 0.036972 12.8237 0.32867 12.5228L5.18992 7.5L0.328671 2.4772C0.0369708 2.17631 -0.0705497 1.74409 0.0464934 1.34329C0.163368 0.942484 0.487233 0.634129 0.895825 0.534023C1.3044 0.434108 1.73579 0.557781 2.02751 0.85867L7.67543 6.69091C7.89556 6.92003 8.01227 7.22793 7.99898 7.54395L7.99898 7.54362Z" fill="white"/>
                        </svg>
                    </button>
                </div>
                @csrf
            </form>
        </div>
        <div class="become-partner-info__wrapper">
            <div class="become-partner-info__cta">
                <div class="become-partner-info__title">{{ trans('become_partner.form-info-title') }}</div>
                <div class="become-partner-info__subtitle">{{ trans('become_partner.form-info-subtitle') }}</div>
            </div>
            <div class="become-partner-info__links">
                {!! $contactLinks?->lang->content !!}
            </div>
        </div>
    </div>
</div>
