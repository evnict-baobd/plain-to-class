<?php

declare(strict_types=1);

namespace Tests\DTO;

class CustomTransformUserDTO
{
    public string $email;
    public string $username;


    /**
     * @param $login
     * @param $fio
     * @return CustomTransformUserDTO
     */
    public static function transform($login, $fio)
    {
        $dto = new self();
        $dto->email = $login;
        $dto->username = $fio;
        return $dto;
    }
}
