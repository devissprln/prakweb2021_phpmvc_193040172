<?php

class About
{
  public function page()
  {
    echo 'About/page';
  }

  public function index($nama = 'Devis Suparlan', $pekerjaan = 'mahasiswa', $umur = 20)
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
  }
}
