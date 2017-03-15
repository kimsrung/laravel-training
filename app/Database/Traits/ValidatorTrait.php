<?php
namespace App\Database\Traits;

use Validator;

/**
 * Created by PhpStorm.
 * User: BG
 * Date: 3/15/2017
 * Time: 11:43 AM
 */
trait ValidatorTrait
{
    /**
     * @return array
     */
    protected abstract function rules();

    /**
     * @param array $fields
     */
    public function validate(array $fields) {
        return Validator::make($fields, $this->rules())->validate();
    }
}