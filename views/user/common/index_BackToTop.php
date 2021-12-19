<!--   آیکون برگشت به بالا   -->

<div class="container-fluid text-center">
    <div class="row">
        <div class="toTop">
            <a class="toTop2">
                <i class="material-icons spI1">keyboard_arrow_up</i>
                <span class="spT2">برگشت به بالا</span>
            </a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.toTop2').click(function () {
            $("html,body").animate({
                scrollTop: 0,
            })
        })
    })
</script>

<!--   آیکون برگشت به بالا   -->