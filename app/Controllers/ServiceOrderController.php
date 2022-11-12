<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceOrderModel;

class ServiceOrderController extends BaseController
{

    private $serviceOrderModel;

    public function __construct()
    {
        $this->serviceOrderModel = new ServiceOrderModel();
    }
    
    public function index()
    {
        $data = [
            'orders' => $this->serviceOrderModel->findAll(),
            'title' => 'Ordens de serviço',
        ];
        return view('Home', $data);
    }

    public function createOrder()
    {
        $data = [
            'title' => 'Nova ordem de serviço'
        ];
        return view('CreateOrder', $data);
    }

    public function deleteOrder($id)
    {
        if($this->serviceOrderModel->delete($id)){
            return true;
        } else {
            echo 'Erro';
        }
    }

    
}
