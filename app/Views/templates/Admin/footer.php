<!-- Footer Start -->
<div class="container-fluid pt-4 px-4">
    <div class=" rounded-top p-4 bg-secondary">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#" class="text-danger">e-commerce</a>, Tous droits réservés.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                Conçu par <a href="#" class="text-danger">Steev</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
</div>
<!-- Content End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('admin/lib/chart/chart.min.js') ?>"></script>
<script src="<?= base_url('admin/lib/easing/easing.min.js') ?>"></script>
<script src="<?= base_url('admin/lib/waypoints/waypoints.min.js') ?>"></script>
<script src="<?= base_url('admin/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('admin/lib/tempusdominus/js/moment.min.js') ?>"></script>
<script src="<?= base_url('admin/lib/tempusdominus/js/moment-timezone.min.js') ?>"></script>
<script src="<?= base_url('admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Template Javascript -->
<script src="<?= base_url('admin/js/main.js') ?>"></script>
<?php
if (!isset($title)) {
    $title = 'admin';
} else if ($title === 'accueil') {
    ##<!-- Template Stylesheet -->
    include_once('foot.php');
}
?>
</body>

</html>