<?php
function generate_salt_keys() {
    for ($i = 0; $i < 8; $i++) {
        echo bin2hex(random_bytes(32)) . "\n";
    }
}

generate_salt_keys();
?>