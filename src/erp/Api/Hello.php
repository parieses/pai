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
namespace Erp\Api;

use Erp\Model\MemberWeixin;
use PhalApi\Api;

class Hello extends Api {

    public function world() {
        $select = new MemberWeixin();
        return $select->get(1);
        return array('title' => 'Hello World!');
    }
}