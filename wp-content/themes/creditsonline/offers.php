<div class="offers">
    <div class="offers_available">
        <?php
        $args = array('post_type' => 'offer',);
        $offers = get_posts($args);

        foreach ($offers as $offer) {
            setup_postdata($offer);
                include 'offer.php';
        }

        ?>
    </div>
    <div class="unavailable">Результаты, не соответствующие условиям первого кредита</div>
    <div class="offers_unavailable">
        <?php
        foreach ($offers as $offer) {
            setup_postdata($offer);
                include 'offer.php';
        }
        wp_reset_postdata();
        ?>
    </div>
</div>