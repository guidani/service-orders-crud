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

        if ($this->request->getMethod() === 'post') {
            $this->serviceOrderModel->save($this->request->getPost());
            return view('messages', [
                'title' => 'Nova ordem de serviço',
                'message' => 'ordem salva com sucesso',
            ]);
        }

        $data = [
            'title' => 'Nova ordem de serviço',
        ];
        return view('CreateOrder', $data);
    }

    public function deleteOrder($id)
    {
        if ($this->serviceOrderModel->delete($id)) {
            return true;
        } else {
            echo 'Erro';
        }
    }

    public function saveOrder()
    {
        return view('messages', [
            'message' => 'salvo',
        ]);
    }

}
