<?php

class persegiPanjang
{
  var $panjang;
  var $lebar;
  function __construct($p, $l)
  {
    $this->panjang = $p;
    $this->lebar = $l;
  }
  function getLuas()
  {
    return  $this->panjang * $this->lebar;
  }
  function getKel()
  {
    return 2 * ($this->panjang + $this->lebar);
  }
}
?>

