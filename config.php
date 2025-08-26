<?php
function pdoFromEnv(): PDO {
    // Ưu tiên DATABASE_URL nếu có
    if ($url = getenv('DATABASE_URL')) {
        $parts = parse_url($url);
        $host  = $parts['host'] ?? 'localhost';
        $port  = $parts['port'] ?? 5432;
        $user  = $parts['user'] ?? '';
        $pass  = $parts['pass'] ?? '';
        $db    = ltrim($parts['path'] ?? '', '/');

        // kiểm tra sslmode trong query
        $ssl = '';
        if (!empty($parts['query'])) {
            parse_str($parts['query'], $q);
            if (!empty($q['sslmode'])) $ssl = ';sslmode=' . $q['sslmode'];
        }

        $dsn = "pgsql:host={$host};port={$port};dbname={$db}{$ssl}";
        return new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    // Nếu dùng bộ DB_* rời
    $host = getenv('DB_HOST') ?: 'localhost';
    $port = getenv('DB_PORT') ?: 5432;
    $db   = getenv('DB_NAME') ?: 'postgres';
    $user = getenv('DB_USER') ?: 'postgres';
    $pass = getenv('DB_PASS') ?: '';

    // Nếu dùng External URL của Render, thường cần sslmode=require
    $ssl  = getenv('DB_SSLMODE') ? (';sslmode=' . getenv('DB_SSLMODE')) : '';

    $dsn = "pgsql:host={$host};port={$port};dbname={$db}{$ssl}";
    return new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
}

try {
    $conn = pdoFromEnv();
    // echo "OK";
} catch (PDOException $e) {
    die("DB connect error: " . $e->getMessage());
}
