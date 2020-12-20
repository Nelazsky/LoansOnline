<div class="offers">
    <div class="offers_available">
        <?php
        $args = array(
            'numberposts' => 5,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true,
            );
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