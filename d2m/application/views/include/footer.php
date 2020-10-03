</div>

<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js')?>"></script>

<!-- Custom Theme JavaScript -->

<?php if (!empty($js_to_load)&&count($js_to_load) > 0) {
    foreach($js_to_load as $js){
        ?>
        <script src="<?php echo base_url('assets/' . $js . ''); ?>"></script>
    <?php } } ?>
<script src="<?php echo base_url('assets/dist/js/sb-admin-2.js')?>"></script>


<script>

</script>

</body>

</html>