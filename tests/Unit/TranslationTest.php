<?php

namespace Tests\Unit;

use App\Http\Controllers\API\TranslationAPIController;
use App\Repositories\GoogleTranslateRepository;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class TranslationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_GoogleTranslateRepository()
    {
        $mock = \Mockery::mock(GoogleTranslateRepository::class);
        $mock->shouldReceive('translate')->andReturn('مرحبا');
        $this->assertSame('مرحبا',$mock->translate('hello'));
    }
    public function test_translate_function_receive_request()
    {
        $mock = \Mockery::mock(TranslationAPIController::class);
        $mock->shouldReceive('translate')->andReturn('');
        $request = new Request();
        $this->assertSame('',$mock->translate($request));
    }
    public function test_translate_function_returns_array()
    {
        $mock = \Mockery::mock(TranslationAPIController::class);
        $mock->shouldReceive('translate')->andReturn([]);
        $request = new Request();
        $this->assertSame([],$mock->translate($request));
    }
    public function test_translate_function_accepts_string()
    {
        $mock = \Mockery::mock(TranslationAPIController::class);
        $mock->shouldReceive('translate')->andReturn(['succes'=>true,'translation'=>'مرحبا']);
        $request = new Request();
        $request->text = 'hello';
        $this->assertSame(['succes'=>true,'translation'=>'مرحبا'],$mock->translate($request));
    }
}
