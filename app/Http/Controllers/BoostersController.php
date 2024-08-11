<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\BoostersService\BoostersContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class BoostersController extends Controller
{
    public function export(BoostersContract $boosters): JsonResponse
    {
        return response()->json($boosters->export());
    }
}
