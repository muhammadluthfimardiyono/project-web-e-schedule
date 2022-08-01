<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update &mdash; Selamat Datang</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('ptgas_mc')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a> 
        </div>
        <h1>edit petugas mc sholat jumat</h1>
    </div>

    <div class="section-body">

    <div class="card">

        <div class="card-header">
            <h4>Buat Petugas MC Sholat Jumat</h4>
        </div>

        <div class="card-body">
            <form action="<?=site_url('ptgas_mc/'.$mc_jumat->id_mc)?>" method="post" autocomplete="off">
                <?= csrf_field()?>
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" value="<?=$mc_jumat->tanggal?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Petugas MC</label>
                    <input type="text" name="nama_mc" value="<?=$mc_jumat->nama_mc?>" class="form-control" required autofocus>
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