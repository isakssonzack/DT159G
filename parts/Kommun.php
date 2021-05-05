<?php
require 'vendor/autoload.php';

// Excel - Borlänge                                                         1
$Borlange = 'Excel/Borlange.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Borlange);

$Bor_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Bor_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Bor_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Bor_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Bor_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Bor_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Bor_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Eskilstuna                                                       2
$Eskilstuna = 'Excel/Eskilstuna.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Eskilstuna);

$Esk_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Esk_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Esk_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Esk_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Esk_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Esk_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Esk_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Gotland                                                          3
$Gotland = 'Excel/Gotland.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Gotland);

$Got_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Got_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Got_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Got_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Got_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Got_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Got_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Gävle                                                            4
$Gavle = 'Excel/Gavle.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Gavle);

$Gav_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Gav_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Gav_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Gav_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Gav_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Gav_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Gav_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Göteborg                                                         5
$Goteborg = 'Excel/Goteborg.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Goteborg);

$Gote_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Gote_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Gote_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Gote_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Gote_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Gote_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Gote_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Halmstad                                                         6
$Halmstad = 'Excel/Halmstad.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Halmstad);

$Ham_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Ham_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Ham_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Ham_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Ham_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Ham_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Ham_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Jönköping                                                        7
$Jonkoping = 'Excel/Jonkoping.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Jonkoping);

$Jon_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Jon_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Jon_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Jon_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Jon_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Jon_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Jon_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Kalmar                                                           8
$Kalmar = 'Excel/Kalmar.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Kalmar);

$Kal_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Kal_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Kal_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Kal_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Kal_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Kal_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Kal_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Karlskrona                                                       9
$Karlskrona = 'Excel/Karlskrona.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Karlskrona);

$KarK_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$KarK_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$KarK_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$KarK_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$KarK_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$KarK_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$KarK_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Karlstad                                                         10
$Karlstad = 'Excel/Karlstad.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Karlstad);

$KarS_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$KarS_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$KarS_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$KarS_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$KarS_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$KarS_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$KarS_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Kiruna                                                           11
$Kiruna = 'Excel/Kiruna.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Kiruna);

$Kiruna_1 = $spreadsheet->getActiveSheet()->getCell('K9') ->getValue();
$Kiruna_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Kiruna_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Kiruna_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Kiruna_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Kiruna_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Kiruna_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Linköping                                                       12
$Linkoping = 'Excel/Linkoping.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Linkoping);

$Li_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Li_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Li_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Li_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Li_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Li_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Li_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Malmö                                                            13
$Malmo = 'Excel/Malmo.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Malmo);

$Ma_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Ma_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Ma_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Ma_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Ma_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Ma_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Ma_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Stockholm                                                        14
$StockholmKommun = 'Excel/StockholmKommun.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($StockholmKommun);

$StK_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$StK_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$StK_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$StK_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$StK_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$StK_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$StK_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Sundsvall                                                        15
$Sundsvall = 'Excel/Sundsvall.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Sundsvall);

$Su_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Su_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Su_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Su_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Su_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Su_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Su_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Uppsala                                                          16
$Uppsala = 'Excel/Uppsala.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Uppsala);

$UpS_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$UpS_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$UpS_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$UpS_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$UpS_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$UpS_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$UpS_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Upplands västbyg                                                 17
$Uppland = 'Excel/Uppland.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Uppland);

$UpL_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$UpL_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$UpL_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$UpL_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$UpL_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$UpL_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$UpL_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Varberg                                                          18
$Varberg = 'Excel/Varberg.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Varberg);

$Var_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Var_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Var_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Var_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Var_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Var_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Var_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Västerås                                                         19
$Vasteras = 'Excel/Vasteras.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Vasteras);

$Vas_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Vas_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Vas_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Vas_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Vas_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Vas_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Vas_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Örebro                                                           20
$Orebro = 'Excel/Orebro.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Orebro);

$Ore_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Ore_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Ore_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Ore_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Ore_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Ore_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Ore_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

// Excel - Östersund                                                        21               
$Ostersund = 'Excel/Ostersund.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Ostersund);

$Oster_1 = $spreadsheet->getActiveSheet()->getCell('L9') ->getValue();
$Oster_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Oster_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Oster_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Oster_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Oster_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Oster_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();

?>