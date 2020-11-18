<?php declare(strict_types=1);


namespace app\api\controller\v1;


use app\api\validate\TestValidate;

class Banner
{
    /**
     * getBanner
     * 获取指定ID的banner信息栏
     * @url /banner/:id
     * @http GET
     * @param int|string $id banner的ID
     * @return array|mixed|null
     * @author PanZhexin
     */
    public function getBanner($id): ?array
    {
        $array = (new TestValidate())->goCheck();
        print_r($array);die();


    }
}
