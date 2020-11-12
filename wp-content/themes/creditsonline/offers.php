<div class="offers">
    <div class="offers_available">
        <?php
        $args = array('post_type' => 'offer', 'posts_per_page' => 10,);
        $offers = get_posts($args);

        foreach ($offers as $offer) {
            setup_postdata($offer);
            if(true){
                include 'offer.php';
            }
        }

        ?>
    </div>
    <div class="unavailable">Результаты, не соответствующие условиям первого кредита</div>
    <div class="offers_unavailable">
        <?php
        foreach ($offers as $offer) {
            setup_postdata($offer);
            if(true){
                include 'offer.php';
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</div>