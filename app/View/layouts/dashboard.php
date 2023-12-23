<!DOCTYPE html>
<html lang="en">

<?php
$URI = explode('/', trim($_GET['uri'], '/'));
require ('head.php');
?>

<body>
    
<?php
require ('header.php');
require ('sidebar.php');
?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1><?=$URI[0]?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Home">Accueil</a></li>
                    <?php 
                    foreach($URI as $place){
                    ?>
                    <li class="breadcrumb-item active"><?=$place?></li>
                    <?php
                    }
                    ?>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
            <?php include "../app/View/admin/$view.php";?>
        </section>
    </main>






    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
    <!-- Vendor JS Files -->
    <div class="script">
        <script src="<?= asset('asset/vendor/apexcharts/apexcharts.min.js')?>"></script>
        <script src="<?= asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?= asset('asset/vendor/echarts/echarts.min.js')?>"></script>
        <script src="<?= asset('asset/vendor/simple-datatables/simple-datatables.js')?>"></script>
        <script src="<?= asset('asset/vendor/tinymce/tinymce.min.js')?>"></script>
    </div>
    <!-- Template Main JS File -->
    <script src="<?= asset('asset/js/main.js')?>"></script>

</body>

</html>