<?php
@include_once($_SERVER['DOCUMENT_ROOT'].BX_ROOT.'/modules/obx.sms/providers/EMailProvider.php');
OBX\Sms\Provider\EMailProvider::registerProvider();