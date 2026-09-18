<?php
// The original educator-fellowships page has been merged into
// /fellowships-incubators/ (Fellowships and Incubators).
// Keep this file as a hard redirect so deep links and the old URL keep working,
// independent of .htaccess/allow-overrides configuration on the server.
if (!headers_sent()) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /fellowships-incubators/');
}
exit;
