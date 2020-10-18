<div class="sidebar">
    <div class="sidebar-inner">
        <h2><?php _e('Categories');?></h2>
        <ul>
            <?php wp_list_cats('sort_column=name&optioncout=1&hierarchial=0'); ?>
        </ul>
        <h2><?php _e('Categories');?></h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>

</div>