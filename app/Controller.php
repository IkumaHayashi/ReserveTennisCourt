<?php
declare(strict_types=1);

require_once './model/Account.php';
require_once './model/BaseLogicOperator.php';
require_once './model/ChromeOperator.php';
require_once './model/FacilityConditionResercher.php';
require_once './model/FacilityReservationConfirmer.php';
require_once './model/ReservationInformation.php';
require_once './model/CourtReserver.php';
require_once './vendor/autoload.php';


$server_url = 'http://localhost:4444/wd/hub';
$start_url = 'https://www.e-reserve.jp/eap-rj/rsv_rj/Core_i/init.asp?KLCD=212019&SBT=1&Target=_Top&LCD=';
$frame_name = 'MainFrame';
$account = new Account('10008771','1125k');

//try{

    //設備の予約状況を取得して配列に格納
    
    $court_condition_resercher = new FacilityConditionResercher($server_url,$start_url,$frame_name, new DateTime('2019-09-28'), '境川緑道公園テニスコート');
    $table_values = array();
    $table_values = $court_condition_resercher->get_facility_status();
    var_dump($table_values);
    $court_condition_resercher = null;
    

    //アカウント指定して予約状況を取得して配列に格納
    /*
    $reserver_confirmer = new FacilityReservationConfirmer($server_url,$start_url,$frame_name,$account );
    $table_values = array();
    $reserver_confirmer->get_reservation(new DateTime('2019-09-01 00:00:00'), new DateTime('2019-09-30 23:59:59'), $table_values );
    var_dump($table_values);
    $reserver_confirmer = null;
    */
    
    //予約
    /*
    $reservation_information = new ReservationInformation($account, '木ノ下テニスコート', array('第１コート（クレー）', '第２コート（クレー）'), new DateTime('2019-09-28 12:30:00'), 4
                                                         , 'ハヤシ イクマ', '林 郁真', '080-5158-7732');
    $court_reserver = new CourtReserver($server_url,$start_url,$frame_name, $reservation_information);
    $court_reserver->reserve();
    fgets(STDIN);
    $court_reserver = null;
    */
/*
}catch (Exception $e) {
    
    print($e->getMessage());

}finally{
}
*/