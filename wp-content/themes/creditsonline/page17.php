<?php
/*
Template Name:  Page 17
*/
?>
<?php get_header(); ?>
<div class="wrapper">
    <div class="header">
        <div class="topbar">
            <div class="container topbar-container">
                <div class="topbar-left-text">
                    <p>❌ НЕ БЕРИТЕ ЗАЙМ, ЕСЛИ МОЖЕТЕ НЕ БРАТЬ</p>
                    <p>⚡ НЕСКОЛЬКО ЗАЯВОК = 100% ШАНСОВ НА ВЫДАЧУ</p>
                </div>
            </div>
        </div>
        <div class="recommend">
            <div class="container recommend-container">
                <div class="recommend-inner-text">
                    Собираем ТОПовые микро-займы РФ в 1 месте. Для простых людей. Без впаривания, мошенников и кидал.
                </div>
            </div>
        </div>
    </div>


    <main>
        <div class="container">

            <div class="sidebar-sticky">
                <?php get_sidebar(); ?>
            </div>

            <div class="main-content">
                <div class="main-top clearfix">
                    <div>Только надёжные МФО КРЫМ с лиц. ЦБ</div>
                    <div>Рейтинг на <?= get_current_date() ?> г.</div>
                </div>
                <!-- Offers block START-->
                <?php //get_template_part('offers'); ?>
                <div class="loan_wrapper"></div>
                <!-- Offers block END-->
            </div>
        </div>
    </main>
    <div class="delimetr"></div>
    <div class="footer">
        <div class="container">
            <p>
                ❌ ВАЖНО
                ⭕ НЕ хотим подсаживать вас иглу на микро-займов.
                <b>Правило простое: МОЖЕТЕ НЕ БРАТЬ - НЕ БЕРИТЕ.</b>
                ⭕ Предоплату берут только мошенники!
                ⭕ Если МФО не имеет лицензии ЦБ РФ - это мошенники
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
            <div class="copyrights">
                ООО "ПРОФИТАТОР", ОГРН 5147746156718
            </div>
        </div>
    </div>
    <?php get_footer() ?>
