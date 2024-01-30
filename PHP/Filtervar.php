<?

// echo filter_var('oui@non.com', FILTER_VALIDATE_EMAIL);

if (filter_var('oui@non.com', FILTER_VALIDATE_EMAIL)) {
    echo 'valid email';
} else {
    echo 'invalid email';
}
