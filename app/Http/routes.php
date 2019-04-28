<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('master');
});
Route::get('photo', function () {
    return view('photo');
});
/*Route::get('receipt', function () {
    return view('receipts');
});*/

//Route::get('jigform', function () {
   // return view('jigsform');



Route::post('receipt','receipt@receiptInsert');
Route::post('client','plan@client');

Route::get('notes','receipt@updateNotes');
Route::post('vehicleout','receipt@vehicleOut');
Route::get('receiptview','receipt@receiptView');

Route::get('uploadjobpopulate','receipt@UploadjobPopulate');

Route::post('materials','material@materialInsert');
Route::post('note','material@updateNote');
Route::get('materialview','material@materialView');

Route::get('unloading','receipt@unloading');
Route::get('lotno','material@lot_show');

Route::post('processapproval','Controller@processApproval');

Route::post('processinsert','binding@processInsert');
Route::post('stageupdate','binding@stageUpdate');
Route::get('bndapprovelist','binding@approvalPopulate');
Route::get('bindjobpopulate','binding@jobPopulate');
Route::get('bindlotpopulate/{job_code}','binding@lotPopulate');


Route::post('degreaseinsert','degreasing@processInsert');
Route::post('degreaseupdate','degreasing@stageUpdate');
Route::get('degreasejigpopulate','degreasing@jigPopulate');
Route::get('dgrapprovelist','degreasing@approvalPopulate');


Route::post('picklinginsert','pickling@processInsert');
Route::post('picklingupdate','pickling@stageUpdate');
Route::get('picklingjigpopulate','pickling@jigPopulate');
Route::get('pckapprovelist','pickling@approvalPopulate');

Route::post('rinsinginsertprocess','rinsing@processInsert');
Route::post('rinsingstageupdate','rinsing@stageUpdate');
Route::get('rinsingjigpopulate','rinsing@jigPopulate');
Route::get('rnsapprovelist','rinsing@approvalPopulate');

Route::post('fluxinginsertprocess','fluxing@processInsert');
Route::post('fluxingstageupdate','fluxing@stageUpdate');
Route::get('fluxingjigpopulate','fluxing@jigPopulate');
Route::get('flxapprovelist','fluxing@approvalPopulate');

Route::post('dryinginsertprocess','drying@processInsert');
Route::post('dryingstageupdate','drying@stageUpdate');
Route::get('dryingjigpopulate','drying@jigPopulate');
Route::get('dryapprovelist','drying@approvalPopulate');

Route::post('galvanizeinsertprocess','galvanizing@processInsert');
Route::post('galvanizestageupdate','galvanizing@stageUpdate');
Route::get('galvanizejobpopulate','galvanizing@jobPopulate');
Route::get('galvanizejigpopulate','galvanizing@jigPopulate');
Route::get('glvapprovelist','galvanizing@approvalPopulate');

Route::post('quenchinginsertprocess','quenching@processInsert');
Route::post('quenchingstageupdate','quenching@stageUpdate');
Route::get('quenchingjigpopulate','quenching@jigPopulate');
Route::get('queapprovelist','quenching@approvalPopulate');

Route::post('passivationinsertprocess','passivation@processInsert');
Route::post('passivationstageupdate','passivation@stageUpdate');
Route::get('passivationjigpopulate','passivation@jigPopulate');
Route::get('pasapprovelist','passivation@approvalPopulate');

Route::post('labinsert','lab@labInsert');
Route::post('picklinglabinsert','lab@picklingLabInsert');
Route::post('rinsinglabinsert','lab@rinsingLabInsert');

Route::get('stageshow/{pid}','lab@stageShow');
Route::get('recoveryjobcode','quality@recoveryjobcode');
Route::post('recoveryloginsert','quality@qualityInsert');

Route::post('degreasingtank','Controller@degreasingTank');
Route::post('picklingtank','Controller@picklingTank');
Route::post('rinsingtank','Controller@rinsingTank');
Route::post('fluxingtank','Controller@fluxingTank');
Route::post('dryingtank','Controller@dryingTank');
Route::post('galvanizingtank','Controller@galvanizingTank');
Route::post('quenchingtank','Controller@quenchingTank');
Route::post('passivationtank','Controller@passivationTank');
Route::post('stagereverse','Controller@reverseProcess');
Route::post('photoupload','Controller@photoUpload'); //jimmy
Route::post('galplan','Controller@galPlan'); //jimmy


Route::post('jigsview','reports@jigDay'); //monica
Route::post('labreport','reports@labreports'); //monica

Route::get('labform','reports@labform');//monica
Route::get('jigform','reports@jigform');//monica

Route::post('cleaninginsertprocess','cleaning@processInsert'); //sharon
Route::post('cleaningstageupdate','cleaning@stageUpdate'); //sharon
Route::get('cleaningjigpopulate','cleaning@jigPopulate'); //sharon
Route::get('clnapprovelist','cleaning@approvalPopulate'); //sharon

Route::post('unbindinginsertprocess','unbinding@processInsert'); //sharon
Route::post('unbindingstageupdate','unbinding@stageUpdate'); //sharon
Route::get('unbindingjigpopulate','unbinding@jigPopulate'); //sharon
Route::get('ubnapprovelist','unbinding@approvalPopulate'); //sharon

Route::post('plan','plan@planInsert');
Route::get('planjobpopulate','plan@jobPopulate');

Route::post('inspect','inspection@inspectionInsert');