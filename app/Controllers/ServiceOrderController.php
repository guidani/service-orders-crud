<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceOrderModel;

class ServiceOrderController extends BaseController
{

    private $serviceOrderModel;
    private $db;

    public function __construct()
    {
        $this->serviceOrderModel = new ServiceOrderModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $variavel = 'olá console';
        echo "<script>console.log('{$variavel}')</script>";

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
                'message' => 'Ordem excluída com sucesso!',
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

    public function searchOrder()
    {
        $data = [
            'title' => 'Resultados',
        ];

        if ($this->request->getGet('q')) {
            $q = $this->request->getGet('q');
            $res = $this->db->table('orders')->like('cliente_nome', $q)->get()->getResult();
            $data['result'] = (array) $res;
        }

        return view('searchpage', $data);
    }
}
