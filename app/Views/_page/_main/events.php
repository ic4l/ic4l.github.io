<?= $this->extend('_template/_main/template') ?>

<?= $this->section('content') ?>
<!-- START Section Page Title -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-uppercase mb-4 c-white">Events</h2>
            </div>
        </div>
    </div>
</section>
<!-- END Section Page Title -->

<!-- START Section About Us -->
<section class="bg-light sp-100">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 col-12">
                <h5 class="subtitle-left">Cerpen</h5>
                <p>1/8/2020 s.d. 20/8/2020</p>
                <h3>Tema : Cinta Bertepuk Sebelah Tangan</h3>
                <p class="mb-30">Cinta tidak selalu memiliki. Cinta tidak selamanya terbalaskan. Cinta itu buta. Mari buat cerpen tentang cinta yang bertepuk sebelah tangan. Kita jadikan sebuah buku untuk sebuah kenangan.</p>
                <ul class="list-one">
                    <li>Judul : Bebas</li>
                    <li>Jumlah Kata : 1000 - 1500</li>
                    <li>Naskah diketik dengan font 'Times New Roman' dengan ukuran 11</li>
                    <li>Naskah bukan hasil plagiat</li>
                    <li>Perhatikan tanda baca & PUEBI</li>
                    <li>Naskah dikirim dalam format words ke PJ event</li>
                </ul>
            </div>
            <div class="col-lg-6 col-12 d-none d-lg-block wow zoomIn pl-5">
                <div class="about-page-img">
                    <img src="<?= base_url('_assets/_images/_events'); ?>/event_default.png" class="img-fluid" alt="Cerpen">
                </div>
            </div>
            <button type="button" name="button" class="btn btn-primary mt-3">Join Event</button>
        </div>
        <hr>

        <div class="row align-items-center mb-5 mt-5">
            <div class="col-lg-6 col-12">
                <h5 class="subtitle-left">Puisi</h5>
                <p>1/8/2020 s.d. 20/8/2020</p>
                <h3>Tema : Ayah</h3>
                <p class="mb-30">Ya, ayah adalah sosok yang sangat penting dalam kehidupan. Setiap hari berjuang, jerih payahnya demi memberikan penghidupan yang baik untuk keluarga. Ayah merupakan sosok yang menjadi pahlawan dalam kehidupan. Ayah mengajarkan untuk hidup mandiri, kuat, dan tidak manja dalam menjalani hidup.</p>
                <ul class="list-one">
                  <li>Judul : Bebas</li>
                  <li>Jumlah Kata : 1000 - 1500</li>
                  <li>Naskah diketik dengan font 'Times New Roman' dengan ukuran 11</li>
                  <li>Naskah bukan hasil plagiat</li>
                  <li>Perhatikan tanda baca & PUEBI</li>
                  <li>Naskah dikirim dalam format words ke PJ event</li>
                </ul>
            </div>
            <div class="col-lg-6 col-12 d-none d-lg-block wow zoomIn pl-5">
                <div class="about-page-img">
                    <img src="<?= base_url('_assets/_images/_events'); ?>/event_default.png" class="img-fluid" alt="Puisi">
                </div>
            </div>
            <button type="button" name="button" class="btn btn-primary mt-3">Join Event</button>
        </div>
    </div>
</section>
<!-- END Section About Us -->
<?= $this->endSection() ?>
