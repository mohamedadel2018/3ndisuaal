<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="3ANDDY SO2AL Api Documentation",
 *      description="(NOTE) SEND Content-Language in header = one of these valu (ar-en-id) To Localize Api Data",
 * )
 */

  /**
     * @OA\Get(
     *     path="/test",
     *    tags={"TEST"},
     *     description="List All test",
     *     @OA\Response(response="default", description="Welcome page")
     * )
     *  @OA\Server(
        *      url="http://127.0.0.1:8000/api",
        *      description="3ANDY SO2AL"
        * )
     */

class ApiController extends Controller
{
    //
}
