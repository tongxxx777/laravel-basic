<?php

namespace App\Api\Helpers;

use Symfony\Component\HttpFoundation\Response;

/**
 * API 响应消息
 *
 * @Author 佟飞
 * @DateTime 2021-10-13
 */
trait ApiResponse
{
    /**
     * 成功消息
     *
     * @Author 佟飞
     * @DateTime 2021-10-13
     * @param array $data
     * @param string $msg
     * @param integer $code
     * @return mixed
     */
    public function success($data, $msg = 'success', $code = Response::HTTP_OK)
    {
        $response = [
            'success' => true,
            'msg' => $msg,
            'code' => $code,
            'data' => $data
        ];
        return $this->response($response);
    }

    /**
     * 失败消息
     *
     * @Author 佟飞
     * @DateTime 2021-10-13
     * @param string $msg
     * @param integer $code
     * @return void
     */
    public function failed($msg = 'failed', $code = Response::HTTP_BAD_REQUEST)
    {
        $response = [
            'success' => false,
            'msg' => $msg,
            'code' => $code
        ];
        return $this->response($response);
    }

    /**
     * 响应消息
     * 
     * @Author 佟飞
     * @DateTime 2021-10-13
     * @param array $response
     * @param int $status 默认均返回200 通过response code 判断具体错误
     * @param array $headers
     * @return void
     */
    public function response($response, $status = Response::HTTP_OK, $headers = [])
    {
        return response()->json($response, $status, $headers);
    }
}
