<?php

namespace App\Validate\User;

use App\Validate\BaseValidate;

class UserValidate extends BaseValidate
{
    protected $rule = [
        'open_id' => ['required', 'max:100'],
    ];

    protected $message = [
      'open_id.required' => 'openID不能为空',
        'id.required' =>  'id 不能为空'
    ];

    protected $scene = [
        'add' => ['open_id'],
        'edit' => ['id', 'open_id']
    ];
}
