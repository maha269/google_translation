<?php
/**
 * Base controller to translate text from english to arabic language.
 *
 * PHP version 7
 *
 * @category  Web_Application
 * @package   Laravel
 * @author    Maha Ahmed <maha2691992@gmail.com>
 * @copyright 2020 Maha Ahmed
 * @license   MIT https://laravel.com
 * @link      https://laravel.com
 */
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * Controller .
 *
 * @category  Web_Application
 * @package   Laravel
 * @author    Maha Ahmed <maha2691992@gmail.com>
 * @copyright 2020 Maha Ahmed
 * @license   MIT https://laravel.com
 * @link      https://laravel.com
 */
class ApiBaseController extends Controller
{
    /**
     * Format the translation response.
     *
     * @param  string $translation The translates output string
     * @param  bool   $success     Boolean describing output status
     * @param  string $error       Error message
     * @return array
     */
    public function sendTranslationResponse(
        $translation, $success = true, $error = null
    ) {
        return [
            'success'   => $success,
            'error'   => $error,
            'translation'      => $translation
        ];
    }
}
