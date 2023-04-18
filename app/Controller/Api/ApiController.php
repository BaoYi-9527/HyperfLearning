<?php


namespace App\Controller\Api;

use App\Controller\BaseController;
use Hyperf\HttpServer\Contract\RequestInterface;

class ApiController extends BaseController
{
    public function index(RequestInterface $request)
    {
        return 222;
    }
}