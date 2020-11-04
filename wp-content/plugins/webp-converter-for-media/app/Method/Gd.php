<?php

  namespace WebpConverter\Method;

  use WebpConverter\Convert\Directory;
  use WebpConverter\Convert\Server;

  class Gd
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

        $response = $this->convertColorPalette($image, $path);
        if (!$response['success']) throw new \Exception($response['message']);
        else $image = $response['data'];

        $image    = apply_filters('webpc_gd_before_saving', $image, $path);
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
      $methods   = apply_filters('webpc_gd_create_methods', [
        'imagecreatefromjpeg' => ['jpg', 'jpeg'],
        'imagecreatefrompng'  => ['png'],
        'imagecreatefromgif'  => ['gif'],
      ]);
      try {
        foreach ($methods as $method => $extensions) {
          if (!in_array($extension, $extensions)) {
            continue;
          } else if (!function_exists($method)) {
            throw new \Exception(sprintf('Server configuration: "%s" function is not available.', $method));
          } else if (!$image = @$method($path)) {
            throw new \Exception(sprintf('"%s" is not a valid image file.', $path));
          }
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

    private function convertColorPalette($image)
    {
      try {
        if (!function_exists('imageistruecolor')) {
          throw new \Exception(sprintf('Server configuration: "%s" function is not available.', 'imageistruecolor'));
        } else if (!imageistruecolor($image)) {
          if (!function_exists('imagepalettetotruecolor')) {
            throw new \Exception(sprintf('Server configuration: "%s" function is not available.', 'imagepalettetotruecolor'));
          }
          imagepalettetotruecolor($image);
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
        } else if (!function_exists('imagewebp')) {
          throw new \Exception(sprintf('Server configuration: "%s" function is not available.', 'imagewebp'));
        } else if ((imagesx($image) > 8192) || (imagesy($image) > 8192)) {
          throw new \Exception(sprintf('Image is larger than maximum 8K resolution: "%s".', $path));
        } else if (!$success = imagewebp($image, $output, $settings['quality'])) {
          throw new \Exception(sprintf('Error occurred while converting image: "%s".', $path));
        }

        if (filesize($output) % 2 === 1) file_put_contents($output, "\0", FILE_APPEND);
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