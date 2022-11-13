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
            'orders' => $this->serviceOrderModel->paginate(20),
            'pager' => $this->serviceOrderModel->pager,
            'title' => 'Ordens de serviço',
        ];
        
        return view('Home', $data);
    }

    public function createOrder()
    {

        if ($this->request->getMethod() === 'post') {
            $this->serviceOrderModel->save($this->request->getPost());
            return view('messages', [
                'message' => 'Ordem salva com sucesso',
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
            return view('messages', [
                'message' => 'Ordem excluída com sucesso!'
            ]);
        } else {
            echo 'Erro';
        }
    }

    public function editOrder($id)
    {
        $data = [
            'order' => $this->serviceOrderModel->find($id),
        ];

        return view('createOrder', $data);
    }
}
