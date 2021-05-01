<?php
  require 'vendor/autoload.php';

  // Excel - Årsutveckling mellan 2010-2020
  $Year = 'Excel/AllaBrottArsvis.xls';
  $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Year);

  // 2010
  $Year2010_1 = $spreadsheet->getActiveSheet()->getCell('B9')->getValue();
  $Year2010_2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
  $Year2010_3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
  $Year2010_4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
  $Year2010_5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
  $Year2010_6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
  $Year2010_7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

  // 2011
  $Year2011_1 = $spreadsheet->getActiveSheet()->getCell('C9')->getValue();
  $Year2011_2 = $spreadsheet->getActiveSheet()->getCell('C12')->getValue();
  $Year2011_3 = $spreadsheet->getActiveSheet()->getCell('C14')->getValue();
  $Year2011_4 = $spreadsheet->getActiveSheet()->getCell('C17')->getValue();
  $Year2011_5 = $spreadsheet->getActiveSheet()->getCell('C20')->getValue();
  $Year2011_6 = $spreadsheet->getActiveSheet()->getCell('C23')->getValue();
  $Year2011_7 = $spreadsheet->getActiveSheet()->getCell('C26')->getValue();

  // 2012
  $Year2012_1 = $spreadsheet->getActiveSheet()->getCell('D9')->getValue();
  $Year2012_2 = $spreadsheet->getActiveSheet()->getCell('D12')->getValue();
  $Year2012_3 = $spreadsheet->getActiveSheet()->getCell('D14')->getValue();
  $Year2012_4 = $spreadsheet->getActiveSheet()->getCell('D17')->getValue();
  $Year2012_5 = $spreadsheet->getActiveSheet()->getCell('D20')->getValue();
  $Year2012_6 = $spreadsheet->getActiveSheet()->getCell('D23')->getValue();
  $Year2012_7 = $spreadsheet->getActiveSheet()->getCell('D26')->getValue();

  // 2013
  $Year2013_1 = $spreadsheet->getActiveSheet()->getCell('E9')->getValue();
  $Year2013_2 = $spreadsheet->getActiveSheet()->getCell('E12')->getValue();
  $Year2013_3 = $spreadsheet->getActiveSheet()->getCell('E14')->getValue();
  $Year2013_4 = $spreadsheet->getActiveSheet()->getCell('E17')->getValue();
  $Year2013_5 = $spreadsheet->getActiveSheet()->getCell('E20')->getValue();
  $Year2013_6 = $spreadsheet->getActiveSheet()->getCell('E23')->getValue();
  $Year2013_7 = $spreadsheet->getActiveSheet()->getCell('E26')->getValue();

  // 2014
  $Year2014_1 = $spreadsheet->getActiveSheet()->getCell('F9')->getValue();
  $Year2014_2 = $spreadsheet->getActiveSheet()->getCell('F12')->getValue();
  $Year2014_3 = $spreadsheet->getActiveSheet()->getCell('F14')->getValue();
  $Year2014_4 = $spreadsheet->getActiveSheet()->getCell('F17')->getValue();
  $Year2014_5 = $spreadsheet->getActiveSheet()->getCell('F20')->getValue();
  $Year2014_6 = $spreadsheet->getActiveSheet()->getCell('F23')->getValue();
  $Year2014_7 = $spreadsheet->getActiveSheet()->getCell('F26')->getValue();

  // 2015
  $Year2015_1 = $spreadsheet->getActiveSheet()->getCell('G9')->getValue();
  $Year2015_2 = $spreadsheet->getActiveSheet()->getCell('G12')->getValue();
  $Year2015_3 = $spreadsheet->getActiveSheet()->getCell('G14')->getValue();
  $Year2015_4 = $spreadsheet->getActiveSheet()->getCell('G17')->getValue();
  $Year2015_5 = $spreadsheet->getActiveSheet()->getCell('G20')->getValue();
  $Year2015_6 = $spreadsheet->getActiveSheet()->getCell('G23')->getValue();
  $Year2015_7 = $spreadsheet->getActiveSheet()->getCell('G26')->getValue();

  // 2016
  $Year2016_1 = $spreadsheet->getActiveSheet()->getCell('H9')->getValue();
  $Year2016_2 = $spreadsheet->getActiveSheet()->getCell('H12')->getValue();
  $Year2016_3 = $spreadsheet->getActiveSheet()->getCell('H14')->getValue();
  $Year2016_4 = $spreadsheet->getActiveSheet()->getCell('H17')->getValue();
  $Year2016_5 = $spreadsheet->getActiveSheet()->getCell('H20')->getValue();
  $Year2016_6 = $spreadsheet->getActiveSheet()->getCell('H23')->getValue();
  $Year2016_7 = $spreadsheet->getActiveSheet()->getCell('H26')->getValue();

  // 2017
  $Year2017_1 = $spreadsheet->getActiveSheet()->getCell('I9')->getValue();
  $Year2017_2 = $spreadsheet->getActiveSheet()->getCell('I12')->getValue();
  $Year2017_3 = $spreadsheet->getActiveSheet()->getCell('I14')->getValue();
  $Year2017_4 = $spreadsheet->getActiveSheet()->getCell('I17')->getValue();
  $Year2017_5 = $spreadsheet->getActiveSheet()->getCell('I20')->getValue();
  $Year2017_6 = $spreadsheet->getActiveSheet()->getCell('I23')->getValue();
  $Year2017_7 = $spreadsheet->getActiveSheet()->getCell('I26')->getValue();

  // 2018
  $Year2018_1 = $spreadsheet->getActiveSheet()->getCell('J9')->getValue();
  $Year2018_2 = $spreadsheet->getActiveSheet()->getCell('J12')->getValue();
  $Year2018_3 = $spreadsheet->getActiveSheet()->getCell('J14')->getValue();
  $Year2018_4 = $spreadsheet->getActiveSheet()->getCell('J17')->getValue();
  $Year2018_5 = $spreadsheet->getActiveSheet()->getCell('J20')->getValue();
  $Year2018_6 = $spreadsheet->getActiveSheet()->getCell('J23')->getValue();
  $Year2018_7 = $spreadsheet->getActiveSheet()->getCell('J26')->getValue();

  // 2019
  $Year2019_1 = $spreadsheet->getActiveSheet()->getCell('K9')->getValue();
  $Year2019_2 = $spreadsheet->getActiveSheet()->getCell('K12')->getValue();
  $Year2019_3 = $spreadsheet->getActiveSheet()->getCell('K14')->getValue();
  $Year2019_4 = $spreadsheet->getActiveSheet()->getCell('K17')->getValue();
  $Year2019_5 = $spreadsheet->getActiveSheet()->getCell('K20')->getValue();
  $Year2019_6 = $spreadsheet->getActiveSheet()->getCell('K23')->getValue();
  $Year2019_7 = $spreadsheet->getActiveSheet()->getCell('K26')->getValue();
  
  // 2020
  $Year2020_1 = $spreadsheet->getActiveSheet()->getCell('L9')->getValue();
  $Year2020_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
  $Year2020_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
  $Year2020_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
  $Year2020_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
  $Year2020_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
  $Year2020_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();
  
?>