<?php declare(strict_types=1);


namespace app\api\validate;


use RuntimeException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    /**
     * 获取Http参数验证公共类
     * goCheck
     * @author PanZhexin
     * @return array|mixed|null
     */
    public function goCheck(): ?array
    {
        // 获取http参数
        $request = (new Request)->param();
        $result = $this->check($request);
        if (!$result) {
            throw new RuntimeException($this->error);
        }
        return $request;
    }
}
