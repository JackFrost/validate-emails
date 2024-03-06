<?php

declare(strict_types = 1);

namespace JackFrost\ValidateEmails;

class ValidateEmails
{
    public function check(array $emails): array
    {
        return array_flip($emails);
    }
}