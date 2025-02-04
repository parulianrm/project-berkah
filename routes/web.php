<?php

use App\Http\Controllers\Approval\TypeController as ApprovalTypeController;
use App\Http\Controllers\Recommendation\TypeController as RecommendationTypeController;
use App\Http\Controllers\Recommendation\ApprovalController as RecommendationApprovalController;
use App\Http\Controllers\Recommendation\Approval\StatusController as RecommendationStatusController;

use App\Http\Controllers\Approval\FlowTypeController;
use App\Http\Controllers\Approval\SettingsController;
use App\Http\Controllers\ApprovalsController;
use App\Http\Controllers\AritmatikaController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\Recommendation\LogController;
use App\Http\Controllers\Recommendation\Quota\Generator\ScheduleController;
use App\Http\Controllers\Recommendation\QuotaController;
use App\Http\Controllers\Recommendation\StatusController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\RecommendationTypeActionsController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\ResultController;
use App\Models\Kalkulator;
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



route::get("/car/forward/{merk}/{type}/{colors}/{jarak}", [CarController::class, "moveForward"]);

// handphone
route::get("/hp/nyalakan", [HandphoneController::class, "nyalakan"]);
route::get("/hp/matikan", [HandphoneController::class, "matikan"]);
route::get("/hp/panggil-nomor/{nomor}", [HandphoneController::class, "panggil"]);
route::get("/hp/kirim-pesan/{pesan}", [HandphoneController::class, "sms"]);

//mesin cuci
route::get("/mesin/nyala", [MesinController::class, 'nyalakan']);
route::get("/mesin/tambah-detergen", [MesinController::class, 'tambahDetergen']);
route::get("/mesin/mulai-mencuci", [MesinController::class, 'mulaiCuci']);
route::get("/mesin/keringin", [MesinController::class, 'keringin']);


// perpustakaan
route::get("/perpus/pinjam-buku/{judul}", [PerpustakaanController::class, "pinjam"]);
route::get("/perpus/hapus-buku/{judul}", [PerpustakaanController::class, "hapus"]);
route::get("/perpus/tambah-buku/{judul}", [PerpustakaanController::class, "tambah"]);
route::get("/perpus/kembali-buku/{judul}", [PerpustakaanController::class, "kembali"]);

// restoran
route::get("/restoran/tambah/{menu}", [RestoranController::class, "tambah"]);
route::get("/restoran/tampilkan-menu/{menu}", [RestoranController::class, "tampilkan"]);
route::get("/restoran/ambil-pesanan/{menu}", [RestoranController::class, "takeAway"]);
route::get("/restoran/bayar/{harga}", [RestoranController::class, "payBill"]);

//kalkulator
route::get("/kalkulator/penjumlahan/{a}/{b}", [KalkulatorController::class, "penjumlahan"]);
route::get("/kalkulator/pengurangan/{a}/{b}", [KalkulatorController::class, "pengurangan"]);
route::get("/kalkulator/perkalian/{a}/{b}", [KalkulatorController::class, "perkalian"]);
route::get("/kalkulator/pembagian/{a}/{b}", [KalkulatorController::class, "pembagian"]);

//
route::get("/car/percepat", [CarController::class, "percepat"]);
route::get("/car/rem", [CarController::class, "rem"]);
route::get("/car/isiBensin/{jumlah}", [CarController::class, "isiBensin"]);
route::get("/car/indikator", [CarController::class, "indikator"]);
