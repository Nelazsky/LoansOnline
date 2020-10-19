<?php get_header(); ?>
<main>
    <div class="container">
        <div class="main-content">
            <div class="main-top-titles">
                <div>Только надёжные МФО с лиц. ЦБ</div>
                <div>Рейтинг на октябрь 2020 г.</div>
            </div>
            <?php
            $args = array(
                'post_type' => 'offer',
            );

            $posts = get_posts($args);

            foreach ($posts as $offer) {
                setup_postdata($offer);

                $loan_first_sum = get_post_meta(get_the_ID(), 'loan_first_sum', true);
                $loan_rating = get_post_meta(get_the_ID(), 'loan_rating', true);
                $loan_url = get_post_meta(get_the_ID(), 'loan_url', true);
                ?>
                <div class="offer">
                    <div class="offer_logo">
                        <div class="offer_logo_con">

                        </div>
                        <div class="offer_rating">
                            <div class="offer_rating_stars">
                                <div class="offer_rating_stars_icons" style="width: <?= 100 / 5 * $offer->rating ?>%">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <div class="offer_rating_stars_icons_outline">
                                    <i class="icon_star_outline"></i>
                                    <i class="icon_star_outline"></i>
                                    <i class="icon_star_outline"></i>
                                    <i class="icon_star_outline"></i>
                                    <i class="icon_star_outline"></i>
                                </div>
                            </div>
                            <div class="offer_rating_text">

                            </div>
                        </div>
                    </div>
                    <div class="offer_info">
                        <div class="offer_info_con">
                            <div class="offer_money">
                                <div>
                                    <div class="label">К выплате</div>
                                    <div class="value">
                                        <small>руб</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="label">Сумма займа</div>
                                    <div class="value">
                                        <small>руб</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="label">Комиссия <span class="fee_days"></span> дн</div>
                                    <div class="value">
                                        <small>руб</small>
                                    </div>
                                </div>
                            </div>
                            <div class="offer_conditions">
                                <div>
                                    <div class="label">1й кредит</div>
                                    <div class="value">
                                        <small>руб</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="label">Ставка</div>
                                    <div class="value">
                                        <small>%</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="label">Срок</div>
                                    <div class="value">
                                        <small>дней</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offer_open">
                            <a href="#" target="_blank" class="btn primary_btn">Оформить заявку</a>
                        </div>
                    </div>
                </div>


                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="sidebar-sticky">
            <div class="inner-wrapper-sticky">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>
<div class="delimetr"></div>
<?php get_footer() ?>
