!(function ($) {
    "use strict";
    $(window).on("load", function () {
        const language = document.querySelector("html").getAttribute("lang");
        var initial = document.getElementById("initial-value"),
            potencial = document.getElementById("potencial-value"),
            calc_btn = document.getElementsByClassName("calc-btn")[0],
            err_msg_calculator = document.getElementsByClassName("error-msg-calc")[0],
            calculator_values = "";
        calc_btn.addEventListener("click", function () {
            var initial_value = initial.value;
            calculator_values += initial_value + " ";
            var cmt = $("#cmt");
            (cmt.value = calculator_values),
                err_msg_calculator.classList.add("d-none"),
                initial_value < 200
                    ? ((potencial.value = ""), (err_msg_calculator.style.color = "red"), err_msg_calculator.classList.remove("d-none"))
                    : 200 == initial_value
                    ? (potencial.value = (2.13254 * initial_value).toFixed(2))
                    : initial_value > 200 && initial_value < 500
                    ? (potencial.value = (2.51257 * initial_value).toFixed(2))
                    : initial_value >= 500 && initial_value < 1e3
                    ? (potencial.value = (3.54563 * initial_value).toFixed(2))
                    : initial_value >= 1e3 && initial_value < 5e3
                    ? (potencial.value = (5.19874 * initial_value).toFixed(2))
                    : initial_value >= 5e3 && (potencial.value = (5.53647 * initial_value).toFixed(2)),
                cmt.text(potencial.value);
        });
    });
})(jQuery);

            // popup modal

            (function ($) {
                "use strict";
                $(document).ready(function () {
                    $('.modal-link').on('click', function () {
                        $('body').addClass("modal-open");
                    });
                    $('.close-modal').on('click', function () {
                        $('body').removeClass("modal-open");
                    });
                });
            }(jQuery));