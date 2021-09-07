<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use InfyOm\Generator\Utils\ResponseUtil;
use Illuminate\Http\Request;
use App\Models\AssignTrees;
use Response;
use Carbon\Carbon;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }

    public function sendSuccess($message)
    {
        return Response::json([
            'success' => true,
            'message' => $message
        ], 200);
    }

    public function tableCheck(Request $request)
    {
        if (Schema::hasTable($request->tableName)) {
            return 0;
        }

        return 1;
    }

    public function DashStats(Request $request)
    {
        $today = Carbon::now();

        $startData = new \DateTime($today->startOfWeek()->format('Y-m-d'));
        $endDate = new \DateTime($today->endOfWeek()->format('Y-m-d'));

        $labels = [];
        $data = [];

        for($i = $startData; $i <= $endDate; $i->modify('+1 day')){
            $query = AssignTrees::whereDate('created_at', '=', $i->format("Y-m-d"))->sum('number_to_assign');

            $labels[] = $i->format("d");
            $data[] = (int) $query;
        }

        return response([
            'labels' => $labels,
            'data' => $data,
        ], 200);
    }
}
