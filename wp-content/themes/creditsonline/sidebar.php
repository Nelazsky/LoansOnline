<div class="sidebar">
    <div class="sidebar__inner">
        <div class="credit_calc">
            <div class="credit_calc_row">
                <div class="calc_sum">
                    <div class="calc_sum_value">
                        <div class="calc_sum_value_suffix">руб</div>
                        <input type="text" class="calc_sum_value_input" data-calc="sum" value="5000">
                    </div>
                    <div class="calc_sum_label">
                        Сумма займа
                    </div>
                </div>
                <div class="slider_line_cont">
                    <div class="jqueryui_slider calc_loanslider loan_amount_slider" data-val="<?= INITIAL_SUM ?>"
                         data-min="1000" data-max="99999" data-step="1000"></div>
                    <div class="slider_control slider_minus">
                        <div class="icon"></div>
                    </div>
                    <div class="slider_control slider_plus">
                        <div class="icon"></div>
                    </div>
                </div>
            </div>
            <div class="credit_calc_row calc_term">
                <div class="calc_sum">
                    <div class="calc_sum_value">
                        <div class="calc_sum_value_suffix">дней</div>
                        <input type="text" class="calc_time_value_input " data-calc="term" value="30">
                    </div>
                    <div class="calc_sum_label">
                        Срок займа
                    </div>
                </div>
                <div class="slider_line_cont">
                    <div class="jqueryui_slider calc_loanslider loan_amount_slider" data-val="<?= INITIAL_TERM ?>"
                         data-min="1" data-max="99" data-step="1"></div>
                    <div class="slider_control slider_minus">
                        <div class="icon"></div>
                    </div>
                    <div class="slider_control slider_plus">
                        <div class="icon"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- <div class="notifications"></div> -->
    <input type="text" class="loan-input-sum" value="5000">
    <input type="text" class="loan-input-time" value="30">
</div>
<script>
jQuery(document).ready(function ($) {

    function updateOffer(){
        $.ajax({
            url: '<?php echo admin_url("admin-ajax.php") ?>',
            type: 'POST',
            data: {
                "action" : "filter",
                "offer_sum": $(".calc_sum_value_input").val(),
                "offer_time": $(".calc_time_value_input").val()
            }, // можно также передать в виде массива или объекта
            beforeSend: function( xhr ) {

                console.log('beforeSend!');

                // $('#misha_button').text('Загрузка, 5 сек...');
            },
            success: function( data ) {

                $('.loan_wrapper').html(data)
            }
        });
    }
    updateOffer();
    $(".calc_sum_value_input").on('input',function(){
        updateOffer();
    })
    $(".calc_time_value_input").on('input',function(){
        updateOffer();
    })

})
</script>