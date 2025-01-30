<?php

namespace App\Http\Controllers\Recommendation;

use Illuminate\Http\Request;

class QuotaController
{
    public function addQuota()
    {
        return "ini add quota";
    }

    public function removeQuota()
    {
        return "ini remove quota";
    }

    public function selExpired()
    {
        return "ini sel expired";
    }
}
