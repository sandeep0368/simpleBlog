<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    public function index()
    {
    }
    function store()
    {
        helper(['form', 'url']);
        $input = $this->validate([
            'first_name' => 'required|min_length[3]',
            'last_name' => 'required',
            'mobile_no' => 'required|min_length[10]',
            'email' => 'required|valid_email',
            'gender' => 'required',
            'taken_amount' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        if (!$input) {
            echo view('pages/addCustomer', [
                'validation' => $this->validator
            ]);
        } else {
            $data = array(
                'first_name' => $this->request->getPost('first_name'),
                'last_name' => $this->request->getPost('last_name'),
                'mobile_no' => $this->request->getPost('mobile_no'),
                'email' => $this->request->getPost('email'),
                'gender' => $this->request->getPost('gender'),
                'taken_amount' => $this->request->getPost('taken_amount'),
                'start_date' => $this->request->getPost('start_date'),
                'end_date' => $this->request->getPost('end_date'),
            );
            $customer = new CustomerModel();
            $customer->insert($data);
            return $this->response->redirect(site_url('/'));
        }
    }
}
