<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author DELL
 */
class User {
    private $iduser;
    private $tenuser;
    private $matkhau;
    private $sodienthoai;
    private $email;
    private $diachi;

    public function __construct($iduser,$tenuser, $matkhau,$sodienthoai,$email, $diachi) {
        $this->iduser =$iduser;
        $this->tenuser =$tenuser;
        $this->matkhau = $matkhau;
        $this->sodienthoai = $sodienthoai;
        $this->email = $email;
        $this->diachi = $diachi;
    
    }

    public function showUser() {
        echo "Ma: " . $this->iduser . "<br>";
        echo "Tên: " . $this->tenuser . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Sở thích: " . $this->sothich . "<br>";
        echo "Giới tính: " . $this->gioitinh . "<br>";
    }

    public function get_matkhau() {
        return $this->matkhau;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_tenuser() {
        return $this->tenuser;
    }

     public function get_diachi() {
        return $this->diachi;
    }

    public function get_sodienthoai() {
        return $this->sodienthoai;
    }
    public function get_iduser() {
        return $this->iduser;
    

}
}