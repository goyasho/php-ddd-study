<?php


class UserId
{
    private String $id;

    public function __construct(String $id)
    {
        if ($id == null) {
            throw new Exception('必須');
        }

        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}


