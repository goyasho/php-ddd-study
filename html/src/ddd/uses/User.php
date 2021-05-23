<?php


class User
{
    private UserId $id;
    private UserName $name;

    public function __construct(UserId $id, UserName $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
