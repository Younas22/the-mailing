        </div>
<!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Spice Hotel Template By
                <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RedStar Theme</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="<?=base_url('assets/')?>plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/')?>plugins/popper/popper.min.js"></script>
    <script src="<?=base_url('assets/')?>plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="<?=base_url('assets/')?>plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="<?=base_url('assets/')?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/')?>plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url('assets/')?>js/pages/sparkline/sparkline-data.js"></script>
    <!-- Common js-->
    <script src="<?=base_url('assets/')?>js/app.js"></script>
    <script src="<?=base_url('assets/')?>js/layout.js"></script>
    <script src="<?=base_url('assets/')?>js/theme-color.js"></script>
    <!-- material -->
    <script src="<?=base_url('assets/')?>plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="<?=base_url('assets/')?>js/pages/ui/animations.js"></script>
    <!-- morris chart -->
    <script src="<?=base_url('assets/')?>plugins/morris/morris.min.js"></script>
    <script src="<?=base_url('assets/')?>plugins/morris/raphael-min.js"></script>
    <script src="<?=base_url('assets/')?>plugins/jquery-tags-input/jquery-tags-input.js"></script>
    <script src="<?=base_url('assets/')?>plugins/jquery-tags-input/jquery-tags-input-init.js"></script>
    <script src="<?=base_url('assets/')?>plugins/select2/js/select2.js"></script>
    <script src="<?=base_url('assets/')?>js/pages/chart/morris/morris_home_data.js"></script>
    <script src="<?=base_url('assets/')?>js/pages/select2/select2-init.js"></script>
    <!-- end js include path -->



    <script>
$(function() {

function send_mail() {
    $.ajax({
        url: "<?php echo base_url("dashboard/send-mail");?>",
        type: "get",
        data: {msg:'ok'},
        dataType:"json",
        cache: false,
        success: function(dataResult){
            // alert(dataResult);
            location.reload();
        }

    });
}


setTimeout(function(){
    send_mail();
}, 10000);


});
    </script>



</body>

</html>