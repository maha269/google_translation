<?php
    /**
     * Base controller to translate text from english to arabic language.
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
namespace App\Repositories;


use GoogleTranslate;
/**
 * Class to contain translation logic .
 *
 * @category  Web_Application
 * @package   Laravel
 * @author    Maha Ahmed <maha2691992@gmail.com>
 * @copyright 2020 Maha Ahmed
 * @license   MIT https://laravel.com
 * @link      https://laravel.com
 */
class GoogleTranslateRepository
{
    /**
     * Translating text from request using google translation API.
     *
     * @param  string $text     String $language == source_language_code
     * @param  string $language String $language == source_language_code
     * @return array: Contains ["source_text" => string $text
     *                "source_language_code" => string
     *                "translated_text" => translated string
     *                "translated_language_code" => "ar"]
     */
    public function translate($text, $language = null)
    {
        return GoogleTranslate::translate($text, $language);
    }
}
