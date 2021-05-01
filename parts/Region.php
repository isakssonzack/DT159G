<?php
require 'vendor/autoload.php';

// Excel - Bergslagen
$Berg = 'Excel/Bergslagen.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Berg);
  
$B1 = $spreadsheet->getActiveSheet()->getCell('B9') -> getValue();
$B2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
$B3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
$B4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
$B5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
$B6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
$B7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

// Excel - Mitt
$Mitt = 'Excel/Mitt.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Mitt);
  
$M1 = $spreadsheet->getActiveSheet()->getCell('B9') -> getValue();
$M2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
$M3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
$M4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
$M5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
$M6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
$M7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

// Excel - Nord
$Nord = 'Excel/Nord.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Nord);
  
$N1 = $spreadsheet->getActiveSheet()->getCell('B9') -> getValue();
$N2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
$N3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
$N4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
$N5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
$N6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
$N7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

// Excel - Öst
$Ost = 'Excel/Ost.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Ost);
  
$O1 = $spreadsheet->getActiveSheet()->getCell('B9') -> getValue();
$O2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
$O3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
$O4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
$O5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
$O6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
$O7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

// Excel - Stockholn
$Stock = 'Excel/Stockholm.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Stock);
  
$St1 = $spreadsheet->getActiveSheet()->getCell('B9') -> getValue();
$St2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
$St3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
$St4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
$St5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
$St6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
$St7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

// Excel - Syd
$Syd = 'Excel/Syd.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Syd);
  
$Sy1 = $spreadsheet->getActiveSheet()->getCell('B9') -> getValue();
$Sy2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
$Sy3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
$Sy4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
$Sy5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
$Sy6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
$Sy7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

// Excel - Väst
$Vast = 'Excel/Vast.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Vast);
  
$V1 = $spreadsheet->getActiveSheet()->getCell('B9') -> getValue();
$V2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
$V3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
$V4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
$V5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
$V6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
$V7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

?>