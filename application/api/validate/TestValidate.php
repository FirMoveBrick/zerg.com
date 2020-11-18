<?php declare(strict_types=1);


namespace app\api\validate;

class TestValidate extends BaseValidate
{
    /**
     * @var array
     */
    protected $rule = [
        'name' => 'require|max:3',
        'email' => 'email',
    ];
}
