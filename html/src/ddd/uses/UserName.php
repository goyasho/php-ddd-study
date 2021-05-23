<?php


class UserName
{
    private string $name;

    public function __construct(string $name)
    {
        if ($name == null) {
            throw new Exception('必須');
        }
        if (strlen($name) < 3) {
            throw new Exception('3文字以上');
        }
        if (strlen($name) > 20) {
            throw new Exception('20文字以下');
        }

        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}


