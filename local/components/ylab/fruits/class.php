<?php

class FruitsComponent extends CBitrixComponent
{
    private function getFruits()
    {
    if(CModule::IncludeModule("iblock"))
    {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME");
        $arFilter = Array("IBLOCK_ID" => 17, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
        $res = CIBlockElement::GetList(
            Array("DATA_ACTIVE_FROM" => "ASC"),
            $arFilter,
            false,
            false,
            $arSelect
        );
        while($ob = $res->GetNextElement()){ 
            $arFields = $ob->GetFields(); 
            print_r($arFields);
            $arProps = $ob->GetProperties();
            print_r($arProps);
        }
        print_r($arResult);
    }
    }
        public function executeComponent()
    {
        global $APPLICATION;
        //$APPLICATION->RestartBuffer();
        $this->arResult = $this->getFruits();
        $this->includeComponentTemplate();
    }
}
