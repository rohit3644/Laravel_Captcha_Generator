<?php

namespace App\Services;

class CaptchaGenerator
{
    public function captchGenerator()
    {
        $permitted_chars = '23456789';
        $string_length = 4;
        return $this->generate_string($permitted_chars, $string_length);
    }

    public function generate_string($input, $strength = 4)
    {
        $input_length = strlen($input);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }
}
