<?php
include "../php-file/koneksi.php";

$data_return = [];
$data_produksi = [];
$mape_terkecil = 0;
$alpha = 0.1;

$data_return ["n_time_peramalan"] = 1;

$data = $koneksi->prepare("SELECT id, dari_tanggal, sampai_tanggal, jml_produksi FROM tb_produksi");
$data->execute();
$data->setFetchMode(PDO::FETCH_ASSOC);
foreach ($data as $value) {
  $data_produksi [] = $value;
}
$data_return["data_produksi"] = $data_produksi;

for ($i=0; $i < 9; $i++) {

  $mape = [];
  $data_peramalan = [];
  $jumlah_bulan_sebelumnya = 0;

  foreach ($data_produksi as $data) {
    if ($jumlah_bulan_sebelumnya == 0) {
      $jumlah_bulan_sebelumnya = $data["jml_produksi"];
      $data_peramalan [] = [
        "dari_tanggal" => $data["dari_tanggal"],
        "sampai_tanggal" => $data["sampai_tanggal"],
        "jml_produksi" => $data["jml_produksi"],
        "s_aksen" => "",
        "pe" => "",
        "ape" => ""
      ];
      continue;
    }
    $s_aksen = $alpha * $data["jml_produksi"] + (1 - $alpha) * $jumlah_bulan_sebelumnya;
    $pe = (($s_aksen - $data["jml_produksi"]) / $data["jml_produksi"]) * 100;
    $mape[] = abs($pe);

    $data_peramalan [] = [
      "dari_tanggal" => $data["dari_tanggal"],
      "sampai_tanggal" => $data["sampai_tanggal"],
      "jml_produksi" => $data["jml_produksi"],
      "s_aksen" => number_format($s_aksen, 2),
      "pe" => number_format($pe, 2),
      "ape" => number_format(abs($pe), 2)
    ];
    // $jumlah_bulan_sebelumnya = $data["jml_produksi"];
    $jumlah_bulan_sebelumnya = $s_aksen;
  }
  $n_peramalan = $alpha * $data["jml_produksi"] + (1 - $alpha) * $jumlah_bulan_sebelumnya; //original
  // $n_peramalan = $alpha * 0 + (1 - $alpha) * $jumlah_bulan_sebelumnya;
  // $n_peramalan = $jumlah_bulan_sebelumnya + ($alpha * ($data["jml_produksi"] - $jumlah_bulan_sebelumnya));  it's same like original
  $mape = number_format(array_sum($mape) / count($mape), 2);

  $data_return ["data"] [] = [
    "alpha" => $alpha,
    "mape" => $mape,
    "n_peramalan" => number_format($n_peramalan, 2),
    "data_peramalan" => $data_peramalan
  ];

  if ($mape_terkecil == 0) {
    $data_return ["kesimpulan"] = [
      "alpha" => $alpha,
      "mape" => $mape,
      "n_peramalan" => number_format($n_peramalan, 2)
    ];
  } elseif ($mape < $mape_terkecil) {
    $data_return ["kesimpulan"] = [
      "alpha" => $alpha,
      "mape" => $mape,
      "n_peramalan" => number_format($n_peramalan, 2)
    ];
  }

  $alpha += 0.1;
}
echo json_encode($data_return);
?>
