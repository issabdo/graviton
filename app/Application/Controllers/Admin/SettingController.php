<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\SettingsDataTable;
use App\Application\Model\Setting;
use Yajra\Datatables\Request;
use Alert;

class SettingController extends AbstractController
{
    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }

    public function index(SettingsDataTable $dataTable){
        return $dataTable->render('admin.setting.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.setting.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/setting');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.setting.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/setting')->with('sucess' , 'Done Delete setting From system');
    }
}
