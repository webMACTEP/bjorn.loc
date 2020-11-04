<?php

  namespace WebpConverter\Settings;

  class Errors
  {
    private $cache    = null;
    private $filePath = WEBPC_PATH . '/resources/components/errors/%s.php';

    public function __construct()
    {
      add_filter('webpc_server_errors', [$this, 'getServerErrors']);
    }

    /* ---
      Functions
    --- */

    public function getServerErrors()
    {
      if ($this->cache !== null) return $this->cache;

      $this->cache = $this->loadErrorMessages([
        'path_uploads_unavailable'   => ($this->ifUploadsPathExists() !== true),
        'path_htaccess_not_writable' => ($this->ifHtaccessIsWriteable() !== true),
        'path_webp_not_writable'     => ($this->ifWebpPathIsWriteable() !== true),
        'path_webp_duplicated'       => ($this->ifPathsAreDifferent() !== true),
        'rest_api_disabled'          => ($this->ifRestApiIsEnabled() !== true),
        'libs_not_installed'         => ($this->ifLibsAreInstalled() !== true),
        'libs_without_webp_support'  => ($this->ifLibsSupportWebp() !== true),
        'bypassing_apache'           => ($this->ifBypassingApacheIsActive() === true),
        'settings_incorrect'         => ($this->ifSettingsAreCorrect() !== true),
      ]);
      return $this->cache;
    }

    private function loadErrorMessages($errors)
    {
      $list = [];
      foreach ($errors as $error => $status) {
        if ($status !== true) continue;
        ob_start();
        include sprintf($this->filePath, str_replace('_', '-', $error));
        $list[$error] = ob_get_contents();
        ob_end_clean();
      }
      return $list;
    }

    private function ifUploadsPathExists()
    {
      $path = apply_filters('webpc_uploads_path', '');
      return (is_dir($path) && ($path !== ABSPATH));
    }

    private function ifHtaccessIsWriteable()
    {
      $pathDir  = apply_filters('webpc_uploads_path', '');
      $pathFile = $pathDir . '/.htaccess';
      if (file_exists($pathFile)) return (is_readable($pathFile) && is_writable($pathFile));
      else return is_writable($pathDir);
    }

    private function ifWebpPathIsWriteable()
    {
      $path = apply_filters('webpc_uploads_webp', '');
      return (is_dir($path) || is_writable(dirname($path)));
    }

    private function ifPathsAreDifferent()
    {
      $pathUploads = apply_filters('webpc_uploads_path', '');
      $pathWebp    = apply_filters('webpc_uploads_webp', '');
      return ($pathUploads !== $pathWebp);
    }

    private function ifRestApiIsEnabled()
    {
      return ((apply_filters('rest_enabled', true) === true)
        && (apply_filters('rest_jsonp_enabled', true) === true)
        && (apply_filters('rest_authentication_errors', true) === true));
    }

    private function ifLibsAreInstalled()
    {
      return (extension_loaded('gd') || (extension_loaded('imagick') && class_exists('\Imagick')));
    }

    private function ifLibsSupportWebp()
    {
      $methods = apply_filters('webpc_get_methods', []);
      return (($this->ifLibsAreInstalled() !== true) || (count($methods) > 0));
    }

    private function ifBypassingApacheIsActive()
    {
      $ctx = stream_context_create([
        'http' => [
          'timeout' => 1,
        ],
      ]);
      $filePng = @file_get_contents(WEBPC_URL . 'public/img/icon-before.png', false, $ctx);
      if ($filePng === false) return false;

      $filePng2 = @file_get_contents(WEBPC_URL . 'public/img/icon-before.png2', false, $ctx);
      if ($filePng2 === false) return false;

      return (strlen($filePng) < strlen($filePng2));
    }

    private function ifSettingsAreCorrect()
    {
      $settings = apply_filters('webpc_get_values', [], true);
      if ((!isset($settings['extensions']) || !$settings['extensions'])
        || (!isset($settings['dirs']) || !$settings['dirs'])
        || (!isset($settings['method']) || !$settings['method'])
        || (!isset($settings['quality']) || !$settings['quality'])) return false;

      return true;
    }
  }