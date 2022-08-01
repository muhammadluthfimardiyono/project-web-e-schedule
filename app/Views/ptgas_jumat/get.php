<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Petugas Sholat Jumat &mdash; Selamat Datang</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="section">
  <div class="section-header">
    <h1>Petugas Sholat Jumat</h1>
    <div class="section-header-button">
      <a href="<?=site_url('ptgas_jumat/add')?>" class="btn btn-primary">Tambahkan Petugas Baru</a> 
    </div>
  </div>

  <?php if(session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Success</b>
        <?=session()->getFlashdata('success')?>
      </div>
    </div>
  <?php endif; ?>
  <?php if(session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>error</b>
        <?=session()->getFlashdata('error')?>
      </div>
    </div>
  <?php endif; ?>

  <div class="section-body">
  <div class="card">

  <div class="card-header">
    <h4>Data Petugas Sholat Jumat</h4>
  </div>
  
  <div class="card-header">
    <form action="" method="GET" autocomplete="off">
        <div class="float-left">
        <?php $request = \Config\Services::request() ?>                          
          <input type="text" name="keyword" value="<?= $request->getGet('keyword'); ?>" class="form-control" style="width:180pt;" placeholder="Search Here">            
        </div>
        <div class="float-right ml-2">
          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        </div>
      </form>
  </div>

  <div class="card-body table-responsive">
          <table class="table table-striped table-md">
          <tbody><tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Khotib</th>
            <th>Nama Imam</th>
            <th>Nama Bilal</th>
            <th>Nama Muazin</th>
            <th>Action</th>
          </tr>
          <?php foreach ($petugas_jumat as $key => $value) : ?>
          
          <tr>
            <td><?= $nomor++; ?></td>
            <td><?=date('d/m/y', strtotime($value->tanggal))?></td>
            <td><?=$value->nama_khotib?></td>
            <td><?=$value->nama_imam?></td>
            <td><?=$value->nama_bilal?></td>
            <td><?=$value->nama_muazin?></td>
            
            <td class="text-center" style="width:15%">
              
              <a href="<?=site_url('ptgas_jumat/edit/'.$value->id_petugas)?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
              <form action="<?=site_url('ptgas_jumat/'.$value->id_petugas)?>" method="post" class="d-inline" onsubmit="return confirm('Apakah anda yakin data tersebut dihapus ?')">
              <?= csrf_field()?>
                <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i></a>
                  </button>
              </form>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?=$pager->links('petugas_jumat','bootstrap_pagination');?>
    </div>
  </div>
</section>
<?= $this->endSection() ?>