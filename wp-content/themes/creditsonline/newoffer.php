<div class="new-offer <?= $offer->feature ? 'feature' : '' ?>" <?= $offer->feature ? 'style="border-color:' . $offer->loan_color . '"' : '' ?>>
    <?php if ($offer->feature) { ?>
        <div class="new-offer_feature">
        <span <?= $offer->feature ? 'style="background-color:' . $offer->loan_color . '"' : '' ?>>
            <?php echo $offer->extra_text; ?>
        </span>
        </div>
    <?php } ?>
    <div class="new-offer__inner"
             data-offer='<?php echo json_encode([
                "offer_feature" => $offer->feature,
                "offer_color" => $offer->loan_color,
                "offer_extra_tex" => $offer->extra_tex,
                "offer_file_src" => $offer->offer_file_src,
                "offer_rating" => $offer->loan_rating,
                "offer_arp_first" => $offer->arp_first,
                "offer_sum" => $offer->loan_sum,
                "offer_first_sum" => $offer->loan_first_sum,
                "offer_time" => $offer->loan_time,
                "offer_url" => $offer->loan_url,
                "payment" => $payment,
                "commission" => $commission,
                "sum" => $offer_sum,
                "time" => $offer_time,
            ]) ?>'
    >
        <div class="new-offer_logo ">

            <div class="new-offer_logo_con">
                <img src="<?php echo $offer->offer_file_src; ?>" alt="Лого">
            </div>`
            <div class="offer_rating">
                <div class="offer_rating_stars">
                    <div class="offer_rating_stars_icons" style="width: <?= $offer->loan_rating * 20 ?>%">
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
                <p class="offer_rating_text">
                    (<?= $offer->loan_rating ?>)
                </p>
            </div>
        </div>
        <div class="offer_info">
            <div class="offer_info_con">
                <div class="offer_money">
                    <div>
                        <b>К выплате</b>
                        <div class="value">
                            <?php $payment = $offer_sum + ($offer_sum * $offer_time * $offer->arp_first / 100);
                            echo $payment; ?>
                            <small> руб</small>
                        </div>
                    </div>
                    <?php
                    $offer_sum;
                    $commission = $offer_sum * $offer_time * $offer->arp_first / 100;
                    $offer->loan_first_sum;
                    $offer->arp_first;
                    $offer->loan_time;
                    ?>
                </div>
                <a class="myLinkModal" href="#">Анкор_ссылки</a>
            </div>
        </div>
    </div>
    <div class="new-btn">
        <a href="<?php echo $offer->loan_url; ?>" target="_blank" class="new-btn__text">Оформить
            заявку</a>
    </div>
</div>


