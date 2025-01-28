<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalsController
{
    public function respond()
    {
        return "ini respond approval";
    }

    public function approve()
    {
        return "ini approve approval";
    }

    public function reject()
    {
        return "ini reject approval";
    }

    public function rejectAll()
    {
        return "ini reject all approval";
    }

    public function approveAll()
    {
        return "ini approve all approval";
    }
}
