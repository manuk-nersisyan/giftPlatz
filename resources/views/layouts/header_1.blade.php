<div class="main">
    <div class="header">
        <div class="header__logo">
            <img src="{{ Storage::disk('header')->url($header->logo) }}" alt="Giftplatz"/>
        </div>
        <a class="header__burger" href="#PhoneMenu" role="button" data-toggle="modal">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="15">
                <defs/>
                <g>
                    <path fill=rgb(250,250,250) stroke=none paint-order="stroke fill markers" fill-rule=evenodd d=" M 26.995184898376465 1.0074844360351562 C 26.995184898376465 1.0074844360351562 1.0135917663574219 1.0074844360351562 1.0135917663574219 1.0074844360351562 C 1.0135917663574219 1.0074844360351562 1.0135917663574219 2.1931838989257812 1.0135917663574219 2.1931838989257812 C 1.0135917663574219 2.1931838989257812 26.995184898376465 2.1931838989257812 26.995184898376465 2.1931838989257812 C 26.995184898376465 2.1931838989257812 26.995184898376465 1.0074844360351562 26.995184898376465 1.0074844360351562 Z M 26.995184898376465 11.814735412597656 C 26.995184898376465 11.814735412597656 12.566617012023926 11.814735412597656 12.566617012023926 11.814735412597656 C 12.566617012023926 11.814735412597656 12.566617012023926 13.000434875488281 12.566617012023926 13.000434875488281 C 12.566617012023926 13.000434875488281 26.995184898376465 13.000434875488281 26.995184898376465 13.000434875488281 C 26.995184898376465 13.000434875488281 26.995184898376465 11.814735412597656 26.995184898376465 11.814735412597656 Z"/>
                </g>
            </svg>
        </a>
        <div class="modal fade" id="PhoneMenu">
            <div class="modal-dialog modal-full">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="header__logo">
                            <img src="{{ Storage::disk('header')->url($header->logo) }}" alt="Giftplatz"/>
                        </div>
                        <button class="close" id="phoneMenuClose" type="button" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body" id="result">
                        <ul class="modal__list">
                            <li class="modal__item">
                                <a class="modal__link" href="">Главная</a>
                            </li>
                            @foreach ($categories as $category)
                            @if ($category->activeSubcategories->isempty())

                            <li class="modal__item">
                                <a class="modal__link" href="{{ route('get-products-by-category-id', ['category'=>$category ]) }}">{{ $category->name }}</a>
                            </li>
                            @else
                            <li class="modal__item dropdown">
                                <a class="modal__link dropdown-toggle" id="navbarDropdown" href=# role="button" data-toggle="dropdown">{{ $category->name }}</a>
                                <div class="dropdown-menu">
                                    @foreach ($category->activeSubcategories as $subcategory)
                                    <a class="dropdown-item dropdown-item--mob" href="">{{ $subcategory->name }}</a>
                                    <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </li>
                            @endif
                            @endforeach
                            <li class="modal__item">
                                <a class="modal__link" href="">Контакты </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="header__nav container-fluid">
            <div id="navbarSupportedContent">
                <ul class="navbar-nav nav__menu row">
                    <li class="nav__item nav-item">
                        <a class="nav__link nav-link" href="">
                            <span class="nav__underline">Главная</span>
                        </a>
                    </li>
                    @foreach ($categories as $category)
                    @if ($category->activeSubcategories->isempty())
                    <li class="nav__item nav-item">
                        <a class="nav__link nav-link" href="{{ route('get-products-by-category-id', ['category'=>$category ]) }}">
                            <span class="nav__underline">{{ $category->name }}</span>
                        </a>
                    </li>
                    @else
                    <li class="nav__item nav-item dropdown">
                        <a class="nav__link nav-link dropdown-toggle" id="navbarDropdown" href="" role="" data-toggle="">
                            <span class="nav__underline">{{ $category->name }}</span>
                        </a>
                        <div class="dropdown-menu">
                            @foreach ($category->activeSubcategories as $subcategory)
                            <a class="dropdown-item" href="">
                                <span>{{ $subcategory->name }}</span>
                            </a>
                            @endforeach
                        </div>
                    </li>
                    @endif
                    @endforeach
                    <li class="nav__item nav-item">
                        <a class="nav__link nav-link" href="">
                            <span class="nav__underline">Контакты</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="call">
                <div class="call__phone">Тел.: &nbsp;</div>
                <a class="call__number" href="{{ 'tel:'.$contact->phone_number }}">{{ $contact->phone_number }}</a>
            </div>
        </nav>
    </div>
    <div class="titlebox">
        <h1 class="titlebox__title">ШОКОЛАД</h1>
        <h3 class="titlebox__subtitle">и не только... </h3>
    </div>
</div>
