<?php
/*
Template Name: newdesigned
*/
get_header();
?>
<div class="loan-more  data-offer='<?php echo json_encode([
    "offer_logo" => $offer->offer_file_src,
    "offer_rating" => $offer->loan_rating,
    "offer_first_sum" => $offer->loan_first_sum,
    "offer_time" => $offer->loan_time,
]) ?>'">
</div>
<div class="new-header">
        <div class="container">
            <div class="new-topbar">
                <p>❌ НЕ БЕРИТЕ ЗАЙМ, ЕСЛИ МОЖЕТЕ НЕ БРАТЬ</p>
                <p>⚡ НЕСКОЛЬКО ЗАЯВОК = ГАРАНТИРУЮТ ВЫДАЧУ на 99%</p>
            </div>
        </div>
    </div>
    <div class="new-main">
        <div class="container">
            <div class="new-main__wrapper">
                <div class="new-title">
                    <div>Только надёжные МФО с лиц. ЦБ</div>
                    <div>Рейтинг на <?= get_current_date() ?> г.</div>
                </div>
                <div class="new-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="new-offers"></div>
    </div>
    <div class="footer">
        <div class="container">
            <p>
                ❌ ВАЖНО
                ⭕ НЕ хотим подсаживать вас иглу на микрозаймов.
                <b>Правило простое: МОЖЕТЕ НЕ БРАТЬ - НЕ БЕРИТЕ.</b>
                ⭕ Предоплату берут только мошенники!
                ⭕ Если МФО или МКК не имеет лицензии ЦБ РФ - это мошенники
                ⭕ Если вам предлагают за деньги сделать так, чтобы вы не платили займ - это мошенники (но вы можете воспользоваться процедурой банкротства физ лица)
                ⭕ Все представленные МФО в нашем ТОПе — являются надёжными и имеют лицензию ЦБ РФ. Но даже они могут взыскать с вас до +150% от займа
            </p>
            <p>
                Сайт не является финансовым учреждением, банком или кредитором.
                Мы не выдаем займы.
            </p>
            <p>
                <b><a class="vk-link" href="https://vk.com/micro_credits" target="_blank">Наша группа ВК</a></b>
            </p>
        </div>
    </div>
    <?php get_footer() ?>
