<?php								
								
use Illuminate\Http\Request;								
use Illuminate\Support\Facades\Route;								
use App\Http\Controllers\APIController;								
/*								
|--------------------------------------------------------------------------								
| API Routes								
|--------------------------------------------------------------------------								
|								
| Here is where you can register API routes for your application. These								
| routes are loaded by the RouteServiceProvider within a group which								
| is assigned the "api" middleware group. Enjoy building your API!								
|								
*/								
								
Route::middleware('auth:api')->get('/user', function (Request $request) {								
return $request->user();								
});								
								
// create api								
Route::get('/get-product',[ApiController::class,'getProducts']);								
															
Route::get('/get-product/{id}', [ApiController::class,'getOneProduct']);								
Route::post('/add-product',[ApiController::class,'addProduct']);								
Route::delete('/delete-product/{id}',[ApiController::class,'deleteProduct']);								
Route::put('/edit-product/{id}',[ApiController::class,'editProduct']);								
								
Route::post('/upload-image',[ApiController::class,'uploadImage']);								