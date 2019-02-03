@if($progress == 0)
    <span class="badge badge-danger">Registered</span>
 @elseif($progress == 1)
    <span class="badge badge-primary">Belum Kunci Data</span>
 @elseif($progress == 2)
     <span class="badge badge-danger">Belum Bayar</span>
 @elseif($progress == 3)
     <span class="badge badge-warning">Menunggu Konfirmasi Pembayaran</span>
 @elseif($progress == 4)
     <span class="badge badge-success">Telah Membayar</span>
 @elseif($progress == 5)
     <span class="badge badge-info">Telah Upload #1</span>
 @elseif($progress == 6){
     <span class="badge badge-success">Lolos Penyisihan #1</span>
 @elseif($progress == 7)
     <span class="badge badge-success">Penyisihan #2</span>
 @elseif($progress == 8)
     <span class="badge badge-success">Lolos Kebabak FINAL</span>
 @elseif($progress == 98)
     <span class="badge badge-danger">Belum Membayar</span>
 @elseif($progress == 99)
     <span class="badge badge-danger">Tidak Lulus Seleksi</span>
 @endif