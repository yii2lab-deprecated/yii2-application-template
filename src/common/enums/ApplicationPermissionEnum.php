<?php

namespace yii2lab\applicationTemplate\common\enums;

use yii2lab\extension\enum\base\BaseEnum;

class ApplicationPermissionEnum extends BaseEnum
{

    // Управление логами
    const LOGREADER_MANAGE = 'oLogreaderManage';

    // Доступ к Yii генератору
    const GII_MANAGE = 'oGiiManage';

    // Доступ в админ панель
    const BACKEND_ALL = 'oBackendAll';

}