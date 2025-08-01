<?php

use CodeIgniter\I18n\Time;

function validateDate($date, $format = 'Y-m-d')
{
  $d = DateTime::createFromFormat($format, $date);
  // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
  return $d && strtolower($d->format($format)) === strtolower($date);
}

function tanggal_sekarang()
{
  $tanggal = new Time('today', 'Asia/Jakarta', 'id_ID');
  $tanggal_now = $tanggal->toLocalizedString('yyyy-MM-dd');
  $display = $tanggal_now;
  return $display;
}

function tanggal($tgl)
{
  $tanggal = new Time($tgl, 'Asia/Jakarta', 'id_ID');
  if (validateDate($tgl) == true) {
    $display_tanggal = $tanggal->toLocalizedString('dd MMMM yyyy');
  } else {
    $display_tanggal = '....';
  }

  return $display_tanggal;
}

function tanggal_short($tgl)
{
  $tanggal = new Time($tgl, 'Asia/Jakarta', 'id_ID');
  $tanggal_now = $tanggal->toLocalizedString('dd/MM/yyyy');
  $display_tanggal = $tanggal_now;
  return $display_tanggal;
}

function tanggal_full($tgl)
{
  $tanggal = new Time($tgl, 'Asia/Jakarta', 'id_ID');
  $tanggal_now = $tanggal->toLocalizedString('dd MMMM yyyy');
  $day = date('D', strtotime($tanggal));
  $dayList = array(
    'Sun' => 'Ahad',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => "Jum'at",
    'Sat' => 'Sabtu'
  );
  $hari = $dayList[$day];
  $display_tanggal = $hari . ', ' . $tanggal_now;
  return $display_tanggal;
}

function tanggal_en($tgl)
{
  $tanggal = new Time($tgl, 'America/Chicago', 'en_EN');
  $tanggal_now = $tanggal->toLocalizedString('MMM d, yyyy');
  $display_tanggal = $tanggal_now;
  return $display_tanggal;
}
