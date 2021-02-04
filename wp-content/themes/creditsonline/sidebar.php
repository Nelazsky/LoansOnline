<div class="sidebar">
    <div class="sidebar__inner">
        <div class="credit_calc">
            <div class="credit_calc_row">
                <div class="calc_sum">
                    <div class="calc_sum_value">
                        <div class="calc_sum_value_suffix">руб</div>
                        <input type="number" class="calc_sum_value_input" data-calc="sum" value="5000" min="1000"
                               max="99999">
                    </div>
                    <div class="calc_sum_label">
                        <?php if(( get_page_template_slug() == 'page1.php') or ( get_page_template_slug() == 'page11.php')){
                            echo "Сумма ";
                        }else{
                                echo "Сумма займа";
                        }  ?>
                    </div>
                </div>
                <div class="slider_line_cont">
                    <div class="slider_control slider_minus slider_minus_sum">
                        <div class="icon"></div>
                    </div>
                    <input type="range" min="1000" max="99999" step="1000" value="5000" class="range_input_sum">
                    <div class="slider_control slider_plus slider_plus_sum">
                        <div class="icon"></div>
                    </div>
                </div>
            </div>
            <div class="credit_calc_row calc_term">
                <div class="calc_sum">
                    <div class="calc_sum_value">
                        <div class="calc_sum_value_suffix">дней</div>
                        <input type="number" class="calc_time_value_input " min="1" max="99" value="10">
                    </div>
                    <div class="calc_sum_label">
                        <?php if(( get_page_template_slug() == 'page1.php') or ( get_page_template_slug() == 'page11.php')){
                            echo "Срок ";
                        }else{
                            echo "Срок займа";
                        }  ?>
                    </div>
                </div>

                <div class="slider_line_cont">
                    <div class="slider_control slider_minus slider_minus_time">
                        <div class="icon"></div>
                    </div>
                    <input type="range" class="range_input_time" min="1" max="99" value="10">
                    <div class="slider_control slider_plus slider_plus_time">
                        <div class="icon"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function ($) {

        function updateOffer() {
            var sum = $(".calc_sum_value_input").val();
            var time = $(".calc_time_value_input").val();

            if ((time >= 1) && (time <= 100) && sum >= 1000 && sum <= 99000) {
                $.ajax({
                    url: '<?php echo admin_url("admin-ajax.php") ?>',
                    type: 'POST',
                    data: {
                        "action": "filter",
                        "offer_sum": sum,
                        "offer_time": time,
                        "current_template": '<?php echo get_page_template_slug(); ?>'
                    }, // можно также передать в виде массива или объекта
                    beforeSend: function (xhr) {

                    },
                    success: function (data) {

                        $('.loan_wrapper').html(data)
                    }
                });
            }
        }


        updateOffer();
        $(".calc_sum_value_input").on('input', function () {
            updateOffer();
        })


        //Sum
        function changeSum(sum) {
            if (sum >= 1000 && sum <= 99000) {
                $(".range_input_sum").val(sum);
                $(".calc_sum_value_input").val(sum);
            }
        }

        $(".calc_sum_value_input").on('input', function () {
            var sum = $(".calc_sum_value_input").val();
            changeSum(sum);
            console.log(sum);
            updateOffer();
        })

        $('.slider_plus_sum').click(function () {
            var sum = $(".range_input_sum").val();
            changeSum(+sum + 1000);
            console.log(+sum + 1000);
            updateOffer();
        })

        $('.slider_minus_sum').click(function () {
            var sum = $(".range_input_sum").val();
            changeSum(+sum - 1000);
            console.log(+sum - 1000);
            updateOffer();
        })

        $('.range_input_sum').on('change', function () {

            var sum = $(".range_input_sum").val();
            changeSum(sum);
            console.log(sum);
            updateOffer();
        });

        //Time

        function changeTime(time) {
            if ((time >= 1) && (time <= 100)) {
                $(".range_input_time").val(time);
                $(".calc_time_value_input").val(time);
            }
        }

        $(".calc_time_value_input").on('input', function () {
            var time = $(".calc_time_value_input").val();
            changeTime(+time);
            console.log(+time);
            updateOffer();
        })

        $('.slider_plus_time').click(function () {
            var time = $(".range_input_time").val();
            changeTime(+time + 1);
            console.log(+time + 1);
            console.log("slider_plus_time");
            updateOffer();
        })


        $('.slider_minus_time').click(function () {
            var time = $(".range_input_time").val();
            changeTime(+time - 1);
            console.log(+time - 1);
            updateOffer();
        })

        $('.range_input_time').on('change', function () {

            var time = $(".range_input_time").val();
            changeTime(+time);
            console.log(+time);
            updateOffer();
        });
    })
</script>