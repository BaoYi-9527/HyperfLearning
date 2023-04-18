<?php


namespace App\Controller;


class BaseController extends AbstractController
{
    const CODE_SUCCESS = 0;
    const CODE_ERROR   = 1;

    private function httpResponse($code, $msg, $data = [])
    {
        return [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data
        ];
    }

    public function successResponse($data, $msg = 'success', $code = self::CODE_SUCCESS): array
    {
        return $this->httpResponse($code, $msg, $data);
    }

    public function successMsgResponse($msg, $data = [], $code = self::CODE_SUCCESS): array
    {
        return $this->httpResponse($code, $msg, $data);
    }

    public function errorMsgResponse($msg = 'fail', $code = self::CODE_ERROR): array
    {
        return $this->httpResponse($code, $msg);
    }

}