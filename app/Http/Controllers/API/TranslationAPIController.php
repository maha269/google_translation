<?php
/**
 * Translation API controller to translate text from english to arabic language.
 *
 * PHP version 7.4.8
 *
 * @category  Web_Application
 * @package   Laravel
 * @author    Maha Ahmed <maha2691992@gmail.com>
 * @copyright 2020 Maha Ahmed
 * @license   MIT https://laravel.com
 * @link      https://laravel.com
 */

namespace App\Http\Controllers\API;

use App\Repositories\GoogleTranslateRepository;
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
class TranslationAPIController extends  ApiBaseController
{
    protected $translationRepository;
    /**
     * Initialize google translate repository.
     *
     * @void
     */
    public function __construct()
    {
        $this->translationRepository = new GoogleTranslateRepository();
    }
    /**
     * Translates a string.
     *
     * @param  Illuminate\Http\Request $request String $text to be translated
     * @return array [
    'success'   => $success,
    'error'   => $error,
    'translation'      => $translation
    ];
     */
    public function translate(Request $request)
    {
        if (!$request->has('text') || gettype($request->text)!= "string") {
            return $this->sendTranslationResponse(
                false, 'text string is required', null
            );
        }
        $result = $this->translationRepository->translate($request->text);
        if (!$result) {
            return $this->sendTranslationResponse(
                false, 'Error translating test',  null
            );
        }
        return $this->sendTranslationResponse(true, '',  $result['translated_text']);
    }
}
