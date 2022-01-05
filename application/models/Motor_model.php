<?php 
use GuzzleHttp\Client;

class Motor_model extends CI_model 
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/penyewaan-motor/index.php/'
        ]);
    }

    public function getAllMotor()
    {
        $response = $this->_client->request('GET', 'Sewa', [
            'query' => [
                'API-TOKEN' => '12345'
            ]
        ]);
        //return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];    

    }

    public function getMotorById($id)
    {
        $response = $this->_client->request('GET', 'Sewa', [
            'query' => [
                'API-TOKEN' => '12345',
                'id_motor' => $id
            ]
        ]);
        //return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0]; 
    }

    public function tambahDataMotor()
    {
        $data = [
            "nama_motor" => $this->input->post('nama_motor', true),
            "merek" => $this->input->post('merek', true),
            "tahun" => $this->input->post('tahun', true),
            "transmisi" => $this->input->post('transmisi', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $this->input->post('gambar', true),
            'API-TOKEN' => '12345'
        ];

        $response = $this->_client->request('POST', 'Sewa', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataMotor($id)
    {
        $response = $this->_client->request('DELETE', 'Sewa', [
            'form_params' => [
                'id_motor' => $id,
                'API-TOKEN' => '12345'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    
    public function ubahDataMotor()
    {
        $data = [
            "nama_motor" => $this->input->post('nama_motor', true),
            "merek" => $this->input->post('merek', true),
            "tahun" => $this->input->post('tahun', true),
            "transmisi" => $this->input->post('transmisi', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $this->input->post('gambar', true),
            "id_motor" => $this->input->post('id_motor', true),
            'API-TOKEN' => '12345'
        ];

        $response = $this->_client->request('PUT', 'Sewa', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

}