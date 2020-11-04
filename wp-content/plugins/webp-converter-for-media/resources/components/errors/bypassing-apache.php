<p>
  <?= sprintf(
    __('Requests to images are processed by your server bypassing Apache. When loading images, rules from the .htaccess file are not executed. Check the redirects for %s.png file%s %s(for which the redirection does not work)%s and for %s.png2 file%s %s(for which the redirection works correctly)%s. Change the server settings to stop ignoring the rules in the .htaccess file. Please contact your server administrator.', 'webp-converter-for-media'),
    '<a href="' . WEBPC_URL . 'public/img/icon-before.png" target="_blank">',
    '</a>',
    '<em>',
    '</em>',
    '<a href="' . WEBPC_URL . 'public/img/icon-before.png2" target="_blank">',
    '</a>',
    '<em>',
    '</em>'
  ); ?>
</p>