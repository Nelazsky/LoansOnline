
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/css/newdesigned.css"/>
</head>
<body>
<div class="top">
    <div class="top-wrapper container">
        <div class="top-left">
            ❌ НЕ БЕРИТЕ ЗАЙМ, ЕСЛИ МОЖЕТЕ НЕ БРАТЬ
        </div>
        <div class="top-right">
            ⚡ НЕСКОЛЬКО ЗАЯВОК = 100% ШАНСОВ НА ВЫДАЧУ
        </div>
    </div>
</div>



<div class="main container">
    <div class=" main-left">
        <img src="img/cash.png" alt="cash" class="main-left-icon">
        <div class="main-left-text">
            <p class="left-text-top">Единая база микро-займов РФ</p>
            <p class="left-text-bottom">Для простых людей. Без впаривания, мошенников и кидал.</p>
        </div>
    </div>
    <div class=" main-right">
        <div class="sidebar">
            <div class="sidebar__inner">
                <div class="credit_calc">
                    <div class="credit_calc_row">
                        <div class="calc_sum">
                            <div class="calc_sum_value">
                                <div class="calc_sum_value_suffix">руб</div>
                                <input type="number" class="calc_sum_value_input" data-calc="sum" value="5000" min="1000"
                                       max="99999">
                            </div>
                            <div class="calc_sum_label">
                                Сумма займа
                            </div>
                        </div>
                        <div class="slider_line_cont">
                            <div class="slider_control slider_minus slider_minus_sum">
                                <div class="icon"></div>
                            </div>
                            <input type="range" min="1000" max="99999" step="1000" value="5000" class="range_input_sum">
                            <div class="slider_control slider_plus slider_plus_sum">
                                <div class="icon"></div>
                            </div>
                        </div>
                    </div>
                    <div class="credit_calc_row calc_term">
                        <div class="calc_sum">
                            <div class="calc_sum_value">
                                <div class="calc_sum_value_suffix">дней</div>
                                <input type="number" class="calc_time_value_input " min="1" max="99" value="30">
                            </div>
                            <div class="calc_sum_label">
                                Срок займа
                            </div>
                        </div>

                        <div class="slider_line_cont">
                            <div class="slider_control slider_minus slider_minus_time">
                                <div class="icon"></div>
                            </div>
                            <input type="range" class="range_input_time" min="1" max="99" step="1"  value="30">
                            <div class="slider_control slider_plus slider_plus_time">
                                <div class="icon"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="under-slider-text">Только надёжные МФО с лиц. ЦБ Рейтинг на январь 2021 г. </p>
    </div>


</div>

<div class="container">
    <div class="loans-grid">
        <div class="loan-item" >
            <div class="loan-body">
                <div class="loan-top">
                    <div class="loan-logo">
                        <img src="img/credit1.jpg" alt="Лого">
                    </div>
                    <div class="loan-rating">
                        <div class="loan_rating_stars">
                            <div class="loan_rating_stars_icons" style="">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <div class="loan_rating_stars_icons_outline">
                                <i class="icon_star_outline" ></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                            </div>
                        </div>
                        <div class="loan_rating_text">
                            (5.00)
                        </div>
                    </div>
                </div>
                <div class="loan-text d-flex justify-content-between">
                    <div class="loan-sum-text">
                        К выплате
                    </div>
                    <div class="loan-sum">
                        54 000 <div class="loan-sum-rub">руб</div>
                    </div>
                </div>
                <div class="loan-more d-flex justify-content-start">
                    <a href="#">Подробнее ></a>
                </div>
            </div>
            <button class="loan-button">Получить займ</button>

        </div>
        <div class="loan-item">
            <div class="loan-body">
                <div class="loan-top">
                    <div class="loan_logo">
                        <img src="img/credit1.jpg" alt="Лого">
                    </div>
                    <div class="loan_rating">
                        <div class="loan_rating_stars">
                            <div class="loan_rating_stars_icons" style="">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <div class="loan_rating_stars_icons_outline">
                                <i class="icon_star_outline" ></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                            </div>
                        </div>
                        <div class="loan_rating_text">
                            (5.00)
                        </div>
                    </div>
                </div>
                <div class="loan-text d-flex justify-content-between">
                    <div class="loan-sum-text">
                        К выплате
                    </div>
                    <div class="loan-sum">
                        54 000 <div class="loan-sum-rub">руб</div>
                    </div>
                </div>
                <div class="loan-more d-flex justify-content-start">
                    Подробнее >
                </div>
            </div>
            <button class="loan-button">Получить займ</button>

        </div>
        <div class="loan-item">
            <div class="loan-body">
                <div class="loan-top">
                    <div class="loan_logo">
                        <img src="img/credit1.jpg" alt="Лого">
                    </div>
                    <div class="loan_rating">
                        <div class="loan_rating_stars">
                            <div class="loan_rating_stars_icons" style="">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <div class="loan_rating_stars_icons_outline">
                                <i class="icon_star_outline" ></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                            </div>
                        </div>
                        <div class="loan_rating_text">
                            (5.00)
                        </div>
                    </div>
                </div>
                <div class="loan-text d-flex justify-content-between">
                    <div class="loan-sum-text">
                        К выплате
                    </div>
                    <div class="loan-sum">
                        54 000 <div class="loan-sum-rub">руб</div>
                    </div>
                </div>
                <div class="loan-more d-flex justify-content-start">
                    Подробнее >
                </div>
            </div>
            <button class="loan-button">Получить займ</button>

        </div>
        <div class="loan-item">
            <div class="loan-body">
                <div class="loan-top">
                    <div class="loan_logo">
                        <img src="img/credit1.jpg" alt="Лого">
                    </div>
                    <div class="loan_rating">
                        <div class="loan_rating_stars">
                            <div class="loan_rating_stars_icons" style="">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <div class="loan_rating_stars_icons_outline">
                                <i class="icon_star_outline" ></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                            </div>
                        </div>
                        <div class="loan_rating_text">
                            (5.00)
                        </div>
                    </div>
                </div>
                <div class="loan-text d-flex justify-content-between">
                    <div class="loan-sum-text">
                        К выплате
                    </div>
                    <div class="loan-sum">
                        54 000 <div class="loan-sum-rub">руб</div>
                    </div>
                </div>
                <div class="loan-more d-flex justify-content-start">
                    Подробнее >
                </div>
            </div>
            <button class="loan-button">Получить займ</button>

        </div>
        <div class="loan-item">
            <div class="loan-body">
                <div class="loan-top">
                    <div class="loan_logo">
                        <img src="img/credit1.jpg" alt="Лого">
                    </div>
                    <div class="loan_rating">
                        <div class="loan_rating_stars">
                            <div class="loan_rating_stars_icons" style="">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <div class="loan_rating_stars_icons_outline">
                                <i class="icon_star_outline" ></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                                <i class="icon_star_outline"></i>
                            </div>
                        </div>
                        <div class="loan_rating_text">
                            (5.00)
                        </div>
                    </div>
                </div>
                <div class="loan-text d-flex justify-content-between">
                    <div class="loan-sum-text">
                        К выплате
                    </div>
                    <div class="loan-sum">
                        54 000 <div class="loan-sum-rub">руб</div>
                    </div>
                </div>
                <div class="loan-more d-flex justify-content-start">
                    <a href="#">Подробнее ></a>
                </div>
            </div>
            <button class="loan-button">Получить займ</button>

        </div>
    </div>
</div>
<div class="footer">
    <div class="container footer-wrapper">
        <div class="footer-left">
            <p><b>BАЖНО:</b></p>

            <p>⭕ Мы НЕ хотим подсаживать вас иглу на микро-займов. Правило простое: МОЖЕТЕ НЕ БРАТЬ — НЕ БЕРИТЕ.</p>

            <p>⭕ Предоплату берут только мошенники!</p>

            <p>⭕ Если МФО не имеет лицензии ЦБ РФ — это мошенники.</p>

            <p>⭕ Если вам предлагают за деньги сделать так, чтобы вы не платили займ — это мошенники (но вы можете воспользоваться процедурой банкротства физ лица).</p>

            <p>⭕ Все представленные МФО в нашем ТОПе — являются надёжными и имеют лицензию ЦБ РФ. Но даже они могут взыскать с вас до +150% от займа.</p>
            ⭕ Сайт не является финансовым учреждением, банком или кредитором. Мы не выдаем займы.
        </div>
        <div></div>
        <div class="footer-right">
            <p><svg width="20" height="20" viewBox="0 2 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M16.5958 10.8565C16.2725 10.4482 16.365 10.2665 16.5958 9.9015C16.6 9.89734 19.2692 6.209 19.5442 4.95817L19.5458 4.95734C19.6825 4.5015 19.5458 4.1665 18.885 4.1665H16.6983C16.1417 4.1665 15.885 4.454 15.7475 4.77567C15.7475 4.77567 14.6342 7.44067 13.0592 9.16817C12.5508 9.66734 12.3158 9.82734 12.0383 9.82734C11.9017 9.82734 11.6892 9.66734 11.6892 9.2115V4.95734C11.6892 4.41067 11.5333 4.1665 11.0725 4.1665H7.63417C7.285 4.1665 7.0775 4.4215 7.0775 4.659C7.0775 5.17734 7.865 5.2965 7.94667 6.75484V9.919C7.94667 10.6123 7.82083 10.7398 7.54167 10.7398C6.79833 10.7398 4.99417 8.064 3.925 5.0015C3.70917 4.40734 3.49833 4.16734 2.9375 4.16734H0.75C0.125833 4.16734 0 4.45484 0 4.7765C0 5.34484 0.743333 8.17067 3.45667 11.904C5.265 14.4523 7.81167 15.8332 10.1283 15.8332C11.5208 15.8332 11.6908 15.5265 11.6908 14.999C11.6908 12.564 11.565 12.334 12.2625 12.334C12.5858 12.334 13.1425 12.494 14.4425 13.7232C15.9283 15.1807 16.1725 15.8332 17.0042 15.8332H19.1908C19.8142 15.8332 20.13 15.5265 19.9483 14.9215C19.5325 13.649 16.7225 11.0315 16.5958 10.8565Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="20" height="20" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                Наша группа ВКонтакте</p>
            ООО "ПРОФИТАТОР", ОГРН 5147746156718
        </div>

    </div>
</div>
<div class="popup">
    <div class="loan-popup">
        <div class="loan-body">
            <div class="loan-top">
                <div class="loan_logo">
                    <img src="img/credit1.jpg" alt="Лого">
                </div>
                <div class="loan_rating">
                    <div class="loan_rating_stars">
                        <div class="loan_rating_stars_icons" style="">
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                        </div>
                        <div class="loan_rating_stars_icons_outline">
                            <i class="icon_star_outline" ></i>
                            <i class="icon_star_outline"></i>
                            <i class="icon_star_outline"></i>
                            <i class="icon_star_outline"></i>
                            <i class="icon_star_outline"></i>
                        </div>
                    </div>
                    <div class="loan_rating_text">
                        (5.00)
                    </div>
                </div>
            </div>
            <div class="loan-text">
                <div class="loan-sum-text">
                    К выплате
                </div>
                <div class="loan-sum">
                    54 000 <div class="loan-sum-rub">руб</div>
                </div>
            </div>
            <div class="loan-text d-flex justify-content-between">
                <div class="loan-sum-text-little">
                    Сумма займа
                </div>
                <div class="loan-sum-little">
                    54 000 <div class="loan-sum-rub">руб</div>
                </div>
            </div>
            <div class="loan-text d-flex justify-content-between">
                <div class="loan-sum-text-little">
                    Комиссия <b>1-365</b> дней
                </div>
                <div class="loan-sum-little">
                    0 <div class="loan-sum-rub">руб</div>
                </div>
            </div>
            <div class="loan-text d-flex justify-content-between">
                <div class="loan-sum-text-little">
                    1-й кредит
                </div>
                <div class="loan-sum-little">
                    3 000-80 000 <div class="loan-sum-rub">руб</div>
                </div>
            </div>
            <div class="loan-text d-flex justify-content-between">
                <div class="loan-sum-text-little">
                    Ставка
                </div>
                <div class="loan-sum-little">
                    0 <div class="loan-sum-rub">%</div>
                </div>
            </div>
            <div class="loan-text d-flex justify-content-between">
                <div class="loan-sum-text-little">
                    Срок
                </div>
                <div class="loan-sum-little">
                    1-365 <div class="loan-sum-rub">дней</div>
                </div>
            </div>
        </div>
        <button class="loan-button">Получить займ</button>

    </div>
</div>
</body>
</html>