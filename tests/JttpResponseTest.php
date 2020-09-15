<?php


use Jttp\Jttp;
use Jttp\JttpResponse;
use PHPUnit\Framework\TestCase;

class JttpResponseTest extends TestCase
{
    protected $data;
    protected $ok;
    protected $okWithData;
    protected $responseOk;
    protected $responseOkWithData;

    protected function setUp(): void
    {
        $this->data = array(
            'book' => array(
                'id' => 1,
                'title' => 'foo',
                'tags' => array(1, 3, 11),
            ),
        );

        $this->ok = new JttpResponse(Jttp::ok());
        $this->okWithData = new JttpResponse(Jttp::ok($this->data));

        $this->responseOk = JttpResponse::ok();
        $this->responseOkWithData = JttpResponse::ok($this->data);


    }

    public function testOkHasCorrectStatus()
    {
        $this->assertEquals(Jttp::STATUS_SUCCESS, json_decode($this->ok->getContent(),true)['status']);
        $this->assertTrue($this->ok->isOk());
    }

    public function testOkWithDataHasCorrectStatus()
    {
        $this->assertEquals(Jttp::STATUS_SUCCESS, json_decode($this->okWithData->getContent(),true)['status']);
        $this->assertTrue($this->okWithData->isOk());
    }


    public function testResponseOkHasCorrectStatus()
    {
        $this->assertEquals(Jttp::STATUS_SUCCESS, json_decode($this->responseOk->getContent(),true)['status']);
        $this->assertTrue($this->responseOk->isOk());
    }


    public function testResponseOkWithDataHasCorrectStatus()
    {
        $this->assertEquals(Jttp::STATUS_SUCCESS, json_decode($this->responseOkWithData->getContent(),true)['status']);
        $this->assertTrue($this->responseOkWithData->isOk());
    }


    public function testCreateFromResponse(){

        $jttp = Jttp::createFromResponse($this->responseOkWithData);
        $content = json_decode($this->responseOkWithData->getContent(), true);
        $this->assertEquals($jttp->toArray(),$content);
    }

}