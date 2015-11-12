<IfModule mod_rewrite.c>
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ pretty-urls.php/$1 [L]
</IfModule>