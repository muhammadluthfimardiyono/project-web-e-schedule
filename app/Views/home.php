<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Home &mdash; Selamat Datang</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <h1>Jadwal Petugas Masjid Jami' Al-Akhyar</h1>
          </div>

          <div class="section-body">
          <a href="<?=site_url('ptgas_jumat')?>">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-calendar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jadwal Petugas Sholat Jumat</h4>
                  </div>
                  <div class="card-body">
                  </div>
                </div>
              </div>
              </a>
            </div>
            <a href="<?=site_url('ptgas_teraweh')?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-calendar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jadwal Petugas Sholat Teraweh</h4>
                  </div>
                  <div class="card-body">
                  </div>
                </div>
              </div>
              </a>
            </div>
            <a href="<?=site_url('ptgas_mc')?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-calendar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jadwal Petugas MC Sholat Jumat</h4>
                  </div>
                  <div class="card-body">
                  </div>
                </div>
              </div>
              </a>
            </div>
            
          </div>
          </div>
        </section>
<?= $this->endSection() ?>