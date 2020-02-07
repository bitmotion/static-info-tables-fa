<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesFa\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['zn_name_en' => 'zn_name_fa'],
    'static_country_zones'
);
