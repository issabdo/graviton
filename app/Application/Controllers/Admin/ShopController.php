<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ShopsDataTable;
use App\Application\Model\Shop;
use Yajra\Datatables\Request;
use Alert;

class ShopController extends AbstractController
{
    public function __construct(Shop $model)
    {
        parent::__construct($model);
    }

    public function index(ShopsDataTable $dataTable){
        return $dataTable->render('admin.shop.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.shop.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/shop');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.shop.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/shop')->with('sucess' , 'Done Delete shop From system');
    }

    public function update(){
      dd('oui');
        return $this->deleteItem($id , 'admin/shop')->with('sucess' , 'Done Delete shop From system');
    }
}
