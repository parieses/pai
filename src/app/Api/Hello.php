<?php
/**
 * Created by PhpStorm.
 * User: Mr.亮先生
 * Date: 2018/11/27
 * Time: 9:18
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 */
namespace App\Api;

use PhalApi\Api;
use PhalApi\Exception\BadRequestException;

class Hello extends Api {

    public function world() {
        \PhalApi\DI()->logger->error('fail to insert DB');
        throw new BadRequestException('签名失败', 1);
    }
}