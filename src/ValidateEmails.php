<?php

declare(strict_types = 1);

namespace JackFrost\ValidateEmails;

class ValidateEmails
{
    public function check(array $emails): array
    {
        return array_map(
            function ($email) {
                if (empty($email)) {
                    return false;
                }
                list($user, $domain) = explode('@', $email);
                if (dns_get_record($domain, DNS_MX)) {
                    return $email;
                }
                return false;
            },
            filter_var($emails, FILTER_VALIDATE_EMAIL, FILTER_REQUIRE_ARRAY)
        );
    }
}
