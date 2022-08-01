<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create &mdash; Selamat Datang</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('ptgas_jumat')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a> 
        </div>
        <h1>Tambahkan Petugas Sholat Jumat</h1>
    </div>
    <div class="section-body">
    <div class="card">
        <div class="card-header">
            <h4>Tambahkan Petugas</h4>
        </div>
        <div class="card-body">
            <form action="<?=site_url('ptgas_jumat')?>" method="post" autocomplete="off">
                <?= csrf_field()?>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Khotib</label>
                    <input type="text" name="nama_khotib" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Nama Imam</label>
                    <input type="text" name="nama_imam" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Nama Bilal</label>
                    <input type="text" name="nama_bilal" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Nama Muazin</label>
                    <input type="text" name="nama_muazin" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
    </section>
<?= $this->endSection() ?>