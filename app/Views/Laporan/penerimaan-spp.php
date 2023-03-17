<?=$this->extend('Dashboard');?>
<?=$this->section('content');?>
<h2>Laporan Penerimaan Pembayaran SPP</h2>
<p>Silahkan masukan tanggal penerimaan SPP</p>

    <div class="form-group">
    <label class="font-weight-bold">Tanggal Penerimaan SPP</label>
        <div class="input-group">
            <input type="date" class="form-control" id="txtTglBayar" autofocus autocomplete="off">
            <div class="input-group-append">
                <button type="button" class="btn btn-primary" id="tampilLaporan">Tampilkan</button>
            </div>
        </div>
    </div>

<div id="hasilCariLaporan"></div>
<button class="btn btn-success" onclick="window.print()">cetak</button>
<?=$this->endSection();?>
