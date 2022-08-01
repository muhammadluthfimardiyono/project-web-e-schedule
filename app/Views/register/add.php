<?= $this->extend('register/user') ?>

<?= $this->section('title') ?>
<title>Registrasi &mdash; Selamat Datang</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('register')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a> 
        </div>
        <h1>Registrasi User</h1>
    </div>

    <div class="section-body">
    <div class="card">

        <div class="card-header">
            <h4>Buat User</h4>
        </div>

        <div class="card-body">
            <form action="<?=site_url('register')?>" method="post" autocomplete="off">
                <?= csrf_field()?>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
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