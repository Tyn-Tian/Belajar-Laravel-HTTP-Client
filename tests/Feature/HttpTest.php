<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HttpTest extends TestCase
{
    public function testGet()
    {
        $response = Http::get('https://enhmm1ik062ud.x.pipedream.net');
        self::assertTrue($response->ok());
    }

    public function testPost()
    {
        $response = Http::post('https://enhmm1ik062ud.x.pipedream.net');
        self::assertTrue($response->ok());
    }

    public function testDelete()
    {
        $response = Http::delete('https://enhmm1ik062ud.x.pipedream.net');
        self::assertTrue($response->ok());
    }
}