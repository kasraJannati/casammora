<script src="<?=BASEURL?>public/js/jquery-3.5.1.js"></script>
<script src="<?=BASEURL?>public/js/bootstrap/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('.submit-register').click(function () {
            $('#registerModal').modal('hide');
            $('#registerConfirmModal').modal('show');
        });
    });
</script>