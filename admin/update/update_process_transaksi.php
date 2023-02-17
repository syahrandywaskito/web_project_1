<?php

include "../../koneksi.php";
$no = $_POST['no_transaksi'];
$id_pengunjung = $_POST['id_pengunjung'];
$id_karyawan = $_POST['id_karyawan'];
$array_kamar = $_POST['data_kamar'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];

// data untuk mengetahui jumlah kamar yang dipesan
$jumlah_kamar = count($array_kamar);

// --> data untuk lama menginap seseorang <--

// tanggal masuk
$pisah_tgl_masuk = explode("-", $tgl_masuk);
$int_tgl_masuk = intval($pisah_tgl_masuk[2]);

// // tanggal keluar
$pisah_tgl_keluar = explode("-", $tgl_keluar);
$int_tgl_keluar = intval($pisah_tgl_keluar[2]);

$lama_nginap = $int_tgl_keluar - $int_tgl_masuk;

// --> ... <--

// --> mengambil harga kemudian ditotal <--
$prefix_q = "query_kamar_";
$prefix_r = "result_";
$str_h = "str_harga_";
$int_h = "int_harga_";
$total_harga = 0;
for ($i=0; $i < count($array_kamar); $i++) { 
  ${$prefix_q.$i} = "SELECT * FROM kamar WHERE no_kamar = '$array_kamar[$i]'";
  ${$prefix_r.$i} = mysqli_query($koneksi, ${$prefix_q.$i});

  foreach (${$prefix_r.$i} as $row) {
    ${$str_h.$i} = $row['harga'];
  }
  ${$int_h . $i} = intval(${$str_h.$i});
  $total_harga += ${$int_h . $i};
}
// --> ... <--

$query = "UPDATE transaksi SET
          no_transaksi = '$no',
          id_pengunjung = '$id_pengunjung',
          id_karyawan = '$id_karyawan',
          jumlah_kamar = '$jumlah_kamar',
          tgl_masuk = '$tgl_masuk',
          tgl_keluar = '$tgl_keluar',
          lama_nginap = '$lama_nginap',
          total_harga = '$total_harga'
          WHERE no_transaksi = '$no'";

// update detail transaksi
$detail_transaksi = mysqli_query($koneksi, "SELECT * FROM detail_transaksi WHERE no_transaksi = '$no'");
$array_detail = mysqli_fetch_array($detail_transaksi);
$no_kamar_detail = implode(" - ", $array_kamar);
$query_detail = "UPDATE detail_transaksi SET
                 id_dtl_transaksi = '$array_detail[0]',
                 no_transaksi = '$array_detail[1]',
                 no_kamar = '$no_kamar_detail'
                 WHERE id_dtl_transaksi = '$array_detail[0]'";

mysqli_query($koneksi, $query);
mysqli_query($koneksi, $query_detail);
header("location:../show_transaksi.php");

?>