<?php

use App\Http\Controllers\Approval\TypeController as ApprovalTypeController;
use App\Http\Controllers\Recommendation\TypeController as RecommendationTypeController;
use App\Http\Controllers\Recommendation\ApprovalController as RecommendationApprovalController;
use App\Http\Controllers\Recommendation\Approval\StatusController as RecommendationStatusController;

use App\Http\Controllers\Approval\FlowTypeController;
use App\Http\Controllers\Approval\SettingsController;
use App\Http\Controllers\ApprovalsController;
use App\Http\Controllers\AritmatikaController;
use App\Http\Controllers\Recommendation\LogController;
use App\Http\Controllers\Recommendation\Quota\Generator\ScheduleController;
use App\Http\Controllers\Recommendation\QuotaController;
use App\Http\Controllers\Recommendation\StatusController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\RecommendationTypeActionsController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

route::get("/aritmatika/penambahan/{angka1}/{angka2}", [AritmatikaController::class, 'penambahan']);

// result Contoller
route::get("/result", [ResultController::class, 'result']);

// Approvals Controller
route::get("approvals/respond", [ApprovalsController::class, 'respond']);
route::get("approvals/approve", [ApprovalsController::class, 'approve']);
route::get("approvals/reject", [ApprovalsController::class, 'reject']);
route::get("approvals/rejectAll", [ApprovalsController::class, 'rejectAll']);
route::get("approvals/approveAll", [ApprovalsController::class, 'approveAll']);

// Approval
route::get("approval/flowtype", [FlowTypeController::class, 'FlowType']);
route::get("/approval/setting", [SettingsController::class, 'setting']);
route::get("/approval/type", [ApprovalTypeController::class, 'approvalType']);

// recommendation
route::get("/recommendation", [RecommendationController::class, 'recommendation']);
route::get("/recommendation/type", [RecommendationTypeController::class, 'recommendationType']);
route::get("/recommendation/status", [StatusController::class, 'status']);
route::get("/recommendation/approval", [RecommendationApprovalController::class, 'recommendationApproval']);
route::get("/recommendation/approval/status", [RecommendationStatusController::class, "status"]);
route::get("/recommendation/add/quota", [QuotaController::class, "addQuota"]);
route::get("/recommendation/remove/quota", [QuotaController::class, "removeQuota"]);
route::get("/recommendation/sel-expired", [QuotaController::class, "selExpired"]);
route::get("/recommendation/log", [LogController::class, "insertLog"]);
route::get("/recommendation/interval", [ScheduleController::class, "interval"]);
route::get("/recommendation/action/type", [RecommendationTypeActionsController::class, "actionType"]);
