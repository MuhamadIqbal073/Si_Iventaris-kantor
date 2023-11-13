<?php

use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/test2', function () {
    return view('admin.test2');
});

Auth::routes();

/*
KEAPALA
*/

// Route::group(['middleware' => 'admin'], function(){
//     Route::get('/tambahdatatanah', [App\Http\Controllers\NamatanahController::class, 'create'])->name('tambahdatatanah');
//     Route::post('/simpandatatanah', [App\Http\Controllers\NamatanahController::class, 'store'])->name('simpandatatanah');
//     Route::get('/datatanah/{tanah}/delete', [App\Http\Controllers\NamatanahController::class, 'delete'])->name('datatanah-delete-tanah');
//     Route::get('/datatanah/{tanah}/edit', [App\Http\Controllers\NamatanahController::class, 'edit'])->name('datatanah-edit-tanah');
//     Route::post('/datatanah/{tanah}/update', [App\Http\Controllers\NamatanahController::class, 'update'])->name('datatanah-update-tanah');

Route::get('/data-barang-masuk/{barangmasuk}', [BarangmasukController::class, 'show'])->name('public.data-barang-masuk');
Route::get('/data-barang-masuk/{barangmasuk}/print', [BarangmasukController::class, 'print_qr_code'])->name('public.print-qr-barang-masuk');

Route::get('qr-code', [QrCodeController::class, 'index'])->name('qr.index');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('category', CategoryController::class);

    Route::get('/tambahdataperalatan', [App\Http\Controllers\NamaperalatanController::class, 'create'])->name('tambahdataperalatan');
    Route::post('/simpandataperalatan', [App\Http\Controllers\NamaperalatanController::class, 'store'])->name('simpandataperalatan');
    Route::get('/dataperalatan/{peralatan}/delete', [App\Http\Controllers\NamaperalatanController::class, 'delete'])->name('dataperalatan-delete-peralatan');
    Route::get('/dataperalatan/{peralatan}/edit', [App\Http\Controllers\NamaperalatanController::class, 'edit'])->name('dataperalatan-edit-peralatan');
    Route::post('/dataperalatan/{peralatan}/update', [App\Http\Controllers\NamaperalatanController::class, 'update'])->name('dataperalatan-update-peralatan');
});

Route::get('/namabarang', [App\Http\Controllers\NamabarangController::class, 'index'])->name('namabarang');
Route::get('/tambahnamabarang', [App\Http\Controllers\NamabarangController::class, 'create'])->name('tambahnamabarang');
Route::post('/simpannamabarang', [App\Http\Controllers\NamabarangController::class, 'store'])->name('simpannamabarang');
Route::get('/namabarang/{namabarang}/delete', [App\Http\Controllers\NamabarangController::class, 'delete'])->name('namabarang-delete-namabarang');
Route::get('/namabarang/{namabarang}/edit', [App\Http\Controllers\NamabarangController::class, 'edit'])->name('namabarang-edit-namabarang');
Route::post('/namabarang/{namabarang}/update', [App\Http\Controllers\NamabarangController::class, 'update'])->name('namabarang-update-namabarang');

Route::get('/kodebarang', [App\Http\Controllers\KodebarangController::class, 'index'])->name('kodebarang');
Route::get('/tambahkodebarang', [App\Http\Controllers\KodebarangController::class, 'create'])->name('tambahkodebarang');
Route::post('/simpankodebarang', [App\Http\Controllers\KodebarangController::class, 'store'])->name('simpankodebarang');
Route::get('/kodebarang/{kodebarang}/delete', [App\Http\Controllers\KodebarangController::class, 'delete'])->name('kodebarang-delete-kodebarang');
Route::get('/kodebarang/{kodebarang}/edit', [App\Http\Controllers\KodebarangController::class, 'edit'])->name('kodebarang-edit-kodebarang');
Route::post('/kodebarang/{kodebarang}/update', [App\Http\Controllers\KodebarangController::class, 'update'])->name('kodebarang-update-kodebarang');

Route::get('/banyaknyabarang', [App\Http\Controllers\BanyaknyabarangController::class, 'index'])->name('banyaknyabarang');
Route::get('/tambahbanyaknyabarang', [App\Http\Controllers\BanyaknyabarangController::class, 'create'])->name('tambahbanyaknyabarang');
Route::post('/simpanbanyaknyabarang', [App\Http\Controllers\BanyaknyabarangController::class, 'store'])->name('simpanbanyaknyabarang');
Route::get('/banyaknyabarang/{banyaknyabarang}/delete', [App\Http\Controllers\BanyaknyabarangController::class, 'delete'])->name('banyaknyabarang-delete-banyaknyabarang');
Route::get('/banyaknyabarang/{banyaknyabarang}/edit', [App\Http\Controllers\BanyaknyabarangController::class, 'edit'])->name('banyaknyabarang-edit-banyaknyabarang');
Route::post('/banyaknyabarang/{banyaknyabarang}/update', [App\Http\Controllers\BanyaknyabarangController::class, 'update'])->name('banyaknyabarang-update-banyaknyabarang');

Route::get('/kodepenanggungjawab', [App\Http\Controllers\KodepenanggungjawabController::class, 'index'])->name('kodepenanggungjawab');
Route::get('/tambahkodepenanggungjawab', [App\Http\Controllers\KodepenanggungjawabController::class, 'create'])->name('tambahkodepenanggungjawab');
Route::post('/simpankodepenanggungjawab', [App\Http\Controllers\KodepenanggungjawabController::class, 'store'])->name('simpankodepenanggungjawab');
Route::get('/kodepenanggungjawab/{kodepenanggungjawab}/delete', [App\Http\Controllers\KodepenanggungjawabController::class, 'delete'])->name('kodepenanggungjawab-delete-kodepenanggungjawab');
Route::get('/kodepenanggungjawab/{kodepenanggungjawab}/edit', [App\Http\Controllers\KodepenanggungjawabController::class, 'edit'])->name('kodepenanggungjawab-edit-kodepenanggungjawab');
Route::post('/kodepenanggungjawab/{kodepenanggungjawab}/update', [App\Http\Controllers\KodepenanggungjawabController::class, 'update'])->name('kodepenanggungjawab-update-kodepenanggungjawab');

Route::get('/barangmasuk', [App\Http\Controllers\BarangmasukController::class, 'index'])->name('barangmasuk');
Route::get('/tambahbarangmasuk', [App\Http\Controllers\BarangmasukController::class, 'create'])->name('tambahbarangmasuk');
Route::post('/simpanbarangmasuk', [App\Http\Controllers\BarangmasukController::class, 'store'])->name('simpanbarangmasuk');
Route::get('/barangmasuk/{barangmasuk}/delete', [App\Http\Controllers\BarangmasukController::class, 'delete'])->name('barangmasuk-delete-barangmasuk');
Route::get('/barangmasuk/{barangmasuk}/edit', [App\Http\Controllers\BarangmasukController::class, 'edit'])->name('barangmasuk-edit-barangmasuk');
Route::post('/barangmasuk/{barangmasuk}/update', [App\Http\Controllers\BarangmasukController::class, 'update'])->name('barangmasuk-update-barangmasuk');

Route::get('/barangkeluar', [App\Http\Controllers\BarangkeluarController::class, 'index'])->name('barangkeluar');
Route::get('/tambahbarangkeluar', [App\Http\Controllers\BarangkeluarController::class, 'create'])->name('tambahbarangkeluar');
Route::post('/simpanbarangkeluar', [App\Http\Controllers\BarangkeluarController::class, 'store'])->name('simpanbarangkeluar');
Route::get('/barangkeluar/{barangkeluar}/delete', [App\Http\Controllers\BarangkeluarController::class, 'delete'])->name('barangkeluar-delete-barangkeluar');
Route::get('/barangkeluar/{barangkeluar}/edit', [App\Http\Controllers\BarangkeluarController::class, 'edit'])->name('barangkeluar-edit-barangkeluar');
Route::post('/barangkeluar/{barangkeluar}/update', [App\Http\Controllers\BarangkeluarController::class, 'update'])->name('barangkeluar-update-barangkeluar');

Route::get('/laporanmasuk', [App\Http\Controllers\LaporanmasukController::class, 'index'])->name('laporanmasuk');
Route::get('/laporanmasuk/print', [App\Http\Controllers\LaporanmasukController::class, 'print'])->name('laporanmasuk.print');


Route::get('/laporankeluar', [App\Http\Controllers\LaporankeluarController::class, 'index'])->name('laporankeluar');

// Route::get('/jenisbarang', [App\Http\Controllers\JenisbarangController::class, 'index'])->name('jenisbarang');
// Route::get('/tambahjenisbarang', [App\Http\Controllers\JenisbarangController::class, 'create'])->name('tambahjenisbarang');
// Route::post('/simpanjenisbarang', [App\Http\Controllers\JenisbarangController::class, 'store'])->name('simpanjenisbarang');
// Route::get('/jenisbarang/{jenisbarang}/delete', [App\Http\Controllers\JenisbarangController::class, 'delete'])->name('jenisbarang-delete-jenisbarang');
// Route::get('/jenisbarang/{jenisbarang}/edit', [App\Http\Controllers\JenisbarangController::class, 'edit'])->name('jenisbarang-edit-jenisbarang');
// Route::post('/jenisbarang/{jenisbarang}/update', [App\Http\Controllers\JenisbarangController::class, 'update'])->name('jenisbarang-update-jenisbarang');

// Route::get('/ruanganbarang', [App\Http\Controllers\RuanganbarangController::class, 'index'])->name('ruanganbarang');
// Route::get('/tambahruanganbarang', [App\Http\Controllers\RuanganbarangController::class, 'create'])->name('tambahruanganbarang');
// Route::post('/simpanruanganbarang', [App\Http\Controllers\RuanganbarangController::class, 'store'])->name('simpanruanganbarang');
// Route::get('/ruanganbarang/{ruanganbarang}/delete', [App\Http\Controllers\RuanganbarangController::class, 'delete'])->name('ruanganbarang-delete-ruanganbarang');
// Route::get('/dataperalatan/{peralatan}/delete', [App\Http\Controllers\JenisbarangController::class, 'delete'])->name('databarang-delete-databarang');
// Route::post('/simpandatabarang', [App\Http\Controllers\DatabarangController::class, 'store'])->name('simpandatabarang');
// Route::get('/tambahdatagedung', [App\Http\Controllers\NamagedungController::class, 'create'])->name('tambahdatagedung');
// Route::post('/simpandatagedung', [App\Http\Controllers\NamagedungController::class, 'store'])->name('simpandatagedung');
// Route::get('/datagedung/{gedung}/delete', [App\Http\Controllers\NamagedungController::class, 'delete'])->name('datagedung-delete-gedung');
// Route::get('/datagedung/{gedung}/edit', [App\Http\Controllers\NamagedungController::class, 'edit'])->name('datagedung-edit-gedung');
// Route::post('/datagedung/{gedung}/update', [App\Http\Controllers\NamagedungController::class, 'update'])->name('datagedung-update-gedung');

// Route::get('/tambahdatajalan', [App\Http\Controllers\NamajalanController::class, 'create'])->name('tambahdatajalan');
// Route::post('/simpandatajalan', [App\Http\Controllers\NamajalanController::class, 'store'])->name('simpandatajalan');
// Route::get('/datajalan/{jalan}/delete', [App\Http\Controllers\NamajalanController::class, 'delete'])->name('datajalan-delete-jalan');
// Route::get('/datajalan/{jalan}/edit', [App\Http\Controllers\NamajalanController::class, 'edit'])->name('datajalan-edit-jalan');
// Route::post('/datajalan/{jalan}/update', [App\Http\Controllers\NamajalanController::class, 'update'])->name('datajalan-update-jalan');

// Route::get('/tambahdataaset', [App\Http\Controllers\NamaAsetController::class, 'create'])->name('tambahdataaset');
// Route::post('/simpandataaset', [App\Http\Controllers\NamaAsetController::class, 'store'])->name('simpandataaset');
// Route::get('/dataaset/{aset}/delete', [App\Http\Controllers\NamaAsetController::class, 'delete'])->name('dataaset-delete-aset');
// Route::get('/dataaset/{aset}/edit', [App\Http\Controllers\NamaAsetController::class, 'edit'])->name('dataaset-edit-aset');
// Route::post('/dataaset/{aset}/update', [App\Http\Controllers\NamaAsetController::class, 'update'])->name('dataaset-update-aset');

// Route::get('/tambahdatakonstruksi', [App\Http\Controllers\KonstruksiController::class, 'create'])->name('tambahdatakonstruksi');
// Route::post('/simpandatakonstruksi', [App\Http\Controllers\KonstruksiController::class, 'store'])->name('simpandatakonstruksi');
// Route::get('/datakonstruksi/{konstruksi}/delete', [App\Http\Controllers\KonstruksiController::class, 'delete'])->name('datakonstruksi-delete-konstruksi');
// Route::get('/datakonstruksi/{konstruksi}/edit', [App\Http\Controllers\KonstruksiController::class, 'edit'])->name('datakonstruksi-edit-konstruksi');
// Route::post('/datakonstruksi/{konstruksi}/update', [App\Http\Controllers\KonstruksiController::class, 'update'])->name('datakonstruksi-update-konstruksi');

Route::get('/tambahpengadaan', [App\Http\Controllers\PengadaanController::class, 'create'])->name('tambahpengadaan');
Route::post('/simpanpengadaan', [App\Http\Controllers\PengadaanController::class, 'store'])->name('simpanpengadaan');
Route::get('/pengadaan/{pengadaan}/delete', [App\Http\Controllers\PengadaanController::class, 'delete'])->name('pengadaan-delete-pengadaan');
Route::get('/pengadaan/{pengadaan}/edit', [App\Http\Controllers\PengadaanController::class, 'edit'])->name('pengadaan-edit-pengadaan');
Route::post('/pengadaan/{pengadaan}/update', [App\Http\Controllers\PengadaanController::class, 'update'])->name('pengadaan-update-pengadaan');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Route::get('/datatanah', [App\Http\Controllers\NamatanahController::class, 'index'])->name('datatanah');

Route::get('/dataperalatan', [App\Http\Controllers\NamaperalatanController::class, 'index'])->name('dataperalatan');

// Route::get('/datagedung', [App\Http\Controllers\NamagedungController::class, 'index'])->name('datagedung');

// Route::get('datajalan', [App\Http\Controllers\NamajalanController::class, 'index'])->name('datajalan');

// Route::get('/dataaset', [App\Http\Controllers\NamaAsetController::class, 'index'])->name('dataaset');

// Route::get('/datakonstruksi', [App\Http\Controllers\KonstruksiController::class, 'index'])->name('datakonstruksi');

Route::get('/pengadaan', [App\Http\Controllers\PengadaanController::class, 'index'])->name('pengadaan');

// Route::get('/tanah', [App\Http\Controllers\LaporanController::class, 'tanah'])->name('tanah');

Route::get('/peralatan', [App\Http\Controllers\LaporanController::class, 'peralatan'])->name('peralatan');

// Route::get('/gedung', [App\Http\Controllers\LaporanController::class, 'gedung'])->name('gedung');

// Route::get('/jalan', [App\Http\Controllers\LaporanController::class, 'jalan'])->name('jalan');

// Route::get('/aset', [App\Http\Controllers\LaporanController::class, 'aset'])->name('aset');

// Route::get('/konstruksi', [App\Http\Controllers\LaporanController::class, 'konstruksi'])->name('konstruksi');


// PRINT
Route::get('/print', [App\Http\Controllers\PrintController::class, 'print'])->name('print');
