
<script src="/assets/juhedao/admin-generator/js/chart.min.js"></script>
<script src="/assets/juhedao/admin-generator/js/chart-data.js"></script>
<script src="/assets/juhedao/admin-generator/js/easypiechart.js"></script>
<script src="/assets/juhedao/admin-generator/js/easypiechart-data.js"></script>
<script src="/assets/juhedao/admin-generator/js/easypiechart-data.js"></script>
<script src="/assets/juhedao/admin-generator/js/bootstrap-datepicker.js"></script>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>