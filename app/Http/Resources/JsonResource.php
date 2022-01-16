<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as BaseResource;

abstract class JsonResource extends BaseResource
{
    protected function prepareDateTime(Carbon $date): string
    {
        return $date->format("Y-m-d H:i:s");
    }

    protected function prepareDate(Carbon $date): string
    {
        return $date->format("Y-m-d");
    }
}