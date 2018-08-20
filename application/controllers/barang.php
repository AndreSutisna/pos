<?php
class Barang extends CI_Controller{
    
    function index()
    {
        echo ".";
         echo ".";
          echo ".";
           echo ".";
            echo ".";
             echo ".";
              echo "hidup seperti lerry :v";
               echo ".";
                 echo ".";
                   echo ".";
                     echo ".";
                       echo ".";
                         echo ".";
    }
    
    function elektronik()
    {
        $data['title']="daftar barang patrick";
        //$data['elektronik']=array('nokia','iphone','samsung','asia','notepad','compack disk'); 
        $this->load->model('model_barang');
        $data['list_barang']= $this->model_barang->tampilkan_data()->result();
        $this->load->view('daftarbarang',$data);
    }
    
    function pakaian()
    {
        $data['title']="pakaian wanita";
        $this->load->view('daftarbarang',$data);
    }
}