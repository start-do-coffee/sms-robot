<?php

class cotrollerIndex {
    
    
/************************************
    * 函式簡述： 登入
    * 輸入參數 ：Null
    * @return：JSON Array
***********************************/
    function index(){
        $smsApp = new SMSActivate(SMS_KEY);
        $freeSlots = $smsApp->getNumbersStatus(0,'tele2');
        var_dump($freeSlots);
    }
/************************************
    * 函式簡述： 登出
    * 輸入參數 ：Null
    * @return：JSON Array
***********************************/
    function logout(){

    }   
/************************************
    * 函式簡述： 取得帳號資訊
    * 輸入參數 ：Null
    * @return：JSON Array
***********************************/
    function getAccountData(){

    }   

}