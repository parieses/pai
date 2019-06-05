<?php
/**
 * Created by PhpStorm.
 * User: Mr.亮先生
 * Date: 2018/11/27
 * Time: 9:28
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 */
namespace Common\Common;

class Request extends \PhalApi\Request {

    public function getService() {
        // 优先返回自定义格式的接口服务名称
        $service = $this->get('r');
        if (!empty($service)) {
            $namespace = count(explode('/', $service)) == 2 ? 'Erp.' : '';
            return $namespace . str_replace('/', '.', $service);
        }
        return parent::getService();
    }
}