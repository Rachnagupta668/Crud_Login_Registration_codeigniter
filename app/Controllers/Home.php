<?php

namespace App\Controllers;
// use App/Models/UserModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function insert()
    {

        if ($this->request->getMethod() == "get") {
            echo view('register');
        } else if ($this->request->getMethod() == "post") {

            if ($this->validate([
                "user_name" => "required",
                "user_email" => "required|valid_email",
                "user_password" => "required|min+length[5]max_length[20]",
                "user_password" => "required",

            ])) {
                $user_name = $this->request->getVar("user_name");
                $user_email = $this->request->getVar("user_email");
                $user_password = $this->request->getVar("user_password");

                //save data in model
                $data = [
                    "user_name" => $user_name,
                    "user_email" => $user_email,
                    "user_password" => $user_password,

                ];
                $model = new UserModel();
                $model->insert($data);
                 return redirect()->to(base_url('login'));

            } else {
                return redirect()->back()->withInput();
            }
        }
    }

    public function show()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('show', $data);
    }

    public function delete($id = null)
    {
        $model = new UserModel();
        $model->where('user_id', $id)->delete();
        return redirect()->to(base_url('show'));
    }
    public function edit($id = null)
    {
        $model = new UserModel();
        $data['user'] = $model->where('user_id', $id)->first();
        return view('edit', $data);
    }
    public function Update()
    {

        $data = [
            'user_name' => $this->request->getVar('user_name'),
            'user_email' => $this->request->getVar('user_email'),
            'user_password' => $this->request->getVar('user_password'),

        ];

        $id = $this->request->getVar('id');
        $model = new UserModel();
        $model->update($id, $data);
        return redirect()->to(base_url('show'));
    }
    public function login()
    {
        if ($this->request->getMethod() == "get") {
            echo view('login');
        } else if ($this->request->getMethod() == "post") {
            if ($this->validate([
                "user_email" => "required|valid_email",
                "user_password" => "required",

            ])) {
                $model= new UserModel();
                $record=$model->where("user_email",$this->request->getVar("user_email"))
                ->where("user_password",$this->request->getVar("user_password"))
                ->first();
                                $session=session();

                if(!is_null($record)){
                    $sess_data=[
                        "user_name"=>$record['user_name'],
                        "user_email"=>$record['user_email'],
                        "user_type"=>$record['user_type']

                    ];
                    $session->set($sess_data);
                    if($record['user_type']=="user"){
                        $url="show";
                    }else if(($record['user_type']=="admin")){
                        $url="admin_dashboard";
                    }
                      return redirect()->to(base_url($url));

                
            } else {
                // $sesstion=session();

                $session->set("failed_message","Record does not match");
                $session->markAsFlashdata('failed_message');
                return redirect()->back()->withinput();

            }
        }else{
            return redirect()->back()->withinput();

        }
    }
}
}

