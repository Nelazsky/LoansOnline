
<div class="offer <?=$offer->feature? 'feature' : ''?>" <?=$offer->feature? 'style="border-color:'.$offer->loan_color.'"' : ''?>>
    <?php if($offer->feature) { ?>
        <div class="offer_feature">
        <span <?=$offer->feature? 'style="background-color:'.$offer->loan_color.'"' : ''?>>
            <?php echo $offer->extra_text; ?>
        </span>
        </div>
    <?php } ?>
    <div class="offer_logo" data-offer='<?php echo json_encode([
        "offer_logo" => $offer->offer_file_src,
        "offer_rating" => $offer->loan_rating,
        "offer_first_sum" => $offer->loan_first_sum,
        "offer_time" => $offer->loan_time,
    ]) ?>'>
        <div class="offer_logo_con">
            <img src="<?php echo $offer->offer_file_src; ?>" alt="Лого">
        </div>
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
            <div class="offer_rating_text">
                (<?=$offer->loan_rating?>)
            </div>
        </div>
    </div>
    <div class="offer_info">
        <div class="offer_info_con">
            <div class="offer_money">
                <div>
                    <div class="label">К выплате</div>
                    <div class="value">
                        <?=$offer_sum+($offer_sum * $offer_time * $offer->arp_first / 100 ) ?>
                        <small> руб</small>
                    </div>
                </div>
                <div>
                    <div class="label">Сумма </div>
                    <div class="value">
                        <?=$offer_sum ?>
                        <small> руб</small>
                    </div>
                </div>
                <div>
                    <div class="label">Комиссия <span
                            class="fee_days"><?php echo $offer->loan_time; ?></span> дн
                    </div>
                    <div class="value">
                        <?= $offer_sum * $offer_time * $offer->arp_first / 100 ?>
                        <small> руб</small>
                    </div>
                </div>
            </div>
            <div class="offer_conditions">
                <div>
                    <div class="label">Первый</div>
                    <div class="value">
                        <?php echo $offer->loan_first_sum; ?>
                        <small>руб</small>
                    </div>
                </div>
                <div>
                    <div class="label">Ставка</div>
                    <div class="value">
                        <?php echo $offer->arp_first; ?>
                        <small> %</small>
                    </div>
                </div>
                <div>
                    <div class="label">Срок</div>
                    <div class="value">
                        <?php echo $offer->loan_time; ?>
                        <small> дней</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer_open">
            <a href="<?php echo $offer->loan_url; ?>" target="_blank" class="btn primary_btn">Оформить</a>
        </div>
    </div>
</div>
