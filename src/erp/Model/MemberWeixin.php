<?php
/**
 * Created by PhpStorm.
 * User: Mr.亮先生
 * Date: 2018/11/27
 * Time: 10:12
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 */
namespace Erp\Model;

use PhalApi\Model\NotORMModel as NotORM;

class MemberWeixin extends NotORM {
    protected function getTableName($id) {
        return 'member_weixin';
    }
}