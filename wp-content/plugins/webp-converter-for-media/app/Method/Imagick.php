<?php

  namespace WebpConverter\Method;

  use WebpConverter\Convert\Directory;
  use WebpConverter\Convert\Server;

  class Imagick
  {
    /* ---
      Functions
    --- */

    public function convertImage($path, $settings)
    {
      (new Server())->setSettings();

      try {
        $status = (new Server())->checkIfFileExists($path);
        if ($status !== true) throw new \Exception($status);

        $response = $this->createImage($path);
        if (!$response['success']) throw new \Exception($response['message']);
        else $image = $response['data'];

        $image    = apply_filters('webpc_imagick_before_saving', $image, $path);
        $response = $this->convertToWebp($image, $path, $settings);
        if (!$response['success']) throw new \Exception($response['message']);
        else return [
          'success' => true,
          'data'    => $response['data'],
        ];
      } catch (\Exception $e) {
        if (in_array('debug_enabled', $settings['features'])) {
          error_log(sprintf('WebP Converter for Media: %s', $e->getMessage()));
        }

        return [
          'success' => false,
          'message' => $e->getMessage(),
        ];
      }
    }

    private function createImage($path)
    {
      $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
      try {
        if (!extension_loaded('imagick') || !class_exists('Imagick')) {
          throw new \Exception('Server configuration: Imagick module is not available with this PHP installation.');
        } else if (!$image = new \Imagick($path)) {
          throw new \Exception(sprintf('"%s" is not a valid image file.', $path));
        }
        if (!isset($image)) {
          throw new \Exception(sprintf('Unsupported extension "%s" for file "%s"', $extension, $path));
        }

        return [
          'success' => true,
          'data'    => $image,
        ];
      } catch (\Exception $e) {
        return [
          'success' => false,
          'message' => $e->getMessage(),
        ];
      }
    }

    private function convertToWebp($image, $path, $settings)
    {
      try {
        $output = (new Directory())->getPath($path, true);
        if (!$output) {
          throw new \Exception(sprintf('An error occurred creating destination directory for "%s" file.', $path));
        } else if (!in_array('WEBP', $image->queryFormats())) {
          throw new \Exception('Server configuration: Imagick does not support WebP format.');
        }

        $image->setImageFormat('WEBP');
        if (!in_array('keep_metadata', $settings['features'])) {
          $image->stripImage();
        }
        $image->setImageCompressionQuality($settings['quality']);
        $blob = $image->getImageBlob();

        $success = file_put_contents($output, $blob);
        if (!$success) {
          throw new \Exception('Error occurred while converting image.');
        }
        do_action('webpc_convert_after', $output, $path);

        return [
          'success' => true,
          'data'    => [
            'size' => [
              'before' => filesize($path),
              'after'  => filesize((file_exists($output)) ? $output : $path),
            ],
          ],
        ];
      } catch (\Exception $e) {
        return [
          'success' => false,
          'message' => $e->getMessage(),
        ];
      }

      return $image;
    }
  }