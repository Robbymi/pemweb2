<?php

class Dispenser{
  protected $volume;
  protected $hargaSegelas;
  private $volumeGelas;
  public $namaMinuman;

  function  volume($vol){
    $this->volume = $vol;
  }
}

class Minuman extends Dispenser
{
  public $saldo;
  function __construct($saldo, $namaminuman, $volumegelas, $harga)
  {
    $this->saldo = $saldo;
    $this->namaMinuman = $namaminuman;
    $this->volumeGelas = $volumegelas;
    $this->hargaSegelas = $harga;
  }

  function transaksi($saldo)
  {
    $this->saldo = $saldo;
    return  $this->saldo - $this->hargaSegelas;
  }

  function volumeSetelahdibeli()
  {
    $this->volume = $this->volume - $this->volumeGelas;
    return $this->volume;
  }

  function cetak()
  {
    echo '<h1>'. 'AKUA, Air putih nomor wahid di Indonesia!!! '.'</h1>';
    echo '<hr>';
    echo 'Nama Minuman : ' . $this->namaMinuman . "<br>";
    echo 'Saldo : ' . $this->saldo . "<br>";
    echo 'Kapasistas Dispenser : ' . $this->volume . 'ml' . "<br>";
    echo 'Harga Segelas Minuman : ' . $this->hargaSegelas . "<br>";
    echo 'Sisa Kapasitas Dispenser: ' . $this->volumeSetelahDibeli() . 'ml' . "<br>";
    echo 'Saldo tersisa: ' . $this->transaksi($this->saldo);
    echo '<hr>';
    echo '<br>';
    echo '<h3>'. 'Jangan lupa beli lagi ya!!!'.'</h3>';
    echo '<hr>';
  }
}

$minuman = new Minuman(5000, 'Suprapto', 250, 500);
$minuman->transaksi($minuman->saldo);
$minuman->volume(19000);
$minuman->cetak();
?>