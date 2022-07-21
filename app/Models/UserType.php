<?php

    final class UserType extends Enum{
        const ADMIN = 'admin';
        const USER = 'user';
    }
    print UserType::ADMIN;

?>