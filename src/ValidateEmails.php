<?php

declare(strict_types = 1);

namespace JackFrost\ValidateEmails;

class ValidateEmails
{
    public function check(array $emails): array
    {
        return array_map(
            function ($email): bool {
                if (empty($email)) {
                    return false;
                }
                list($user, $domain) = explode('@', $email);
                $record = dns_get_record($domain, DNS_MX);
                $record_host = $record[0]['host'] ?? '';
                if ($record_host !== $domain) {
                    return false;
                }
                elseif (empty($arr[0]['target'])) {
                    return false;
                }
                return $arr[0]['target'];
            },
            filter_var($emails, FILTER_VALIDATE_EMAIL, FILTER_REQUIRE_ARRAY)
        );
    }
}
