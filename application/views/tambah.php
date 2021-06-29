<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('dashboard/simpan') ?>

              <div class="form-group">
                <label for="text">Kegiatan</label>
                <input type="text" name="Kegiatan" class="form-control" placeholder="Masukkan Nama Kegiatan">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Acara</label>
                <input type="date" name="Tanggal_Acara" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Waktu</label>
                <input type="text" name="Waktu" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Tempat</label>
                <input type="text" name="Tempat" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>