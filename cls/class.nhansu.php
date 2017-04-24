<?php
class NhanSu {
    const COLLECTION = 'nhansu';
    private $_mongo;
    private $_collection;

    public $id = '';
    public $hoten = '';
    public $bidanh = '';
    public $ngaysinh = '';
    public $gioitinh = '';
    public $nguyenquan = '';
    public $cmnd = '';
    public $sodienthoai = '';
    public $donvi = array(); //array('_id', 'id_donvi', 'id_chucvu', ngayquyetdinh)
    public $date_post = array();

    public function __construct(){
        $this->_mongo = DBConnect::init();
        $this->_collection = $this->_mongo->getCollection(NhanSu::COLLECTION);
    }

    public function get_all_list(){
        return $this->_collection->find()->sort(array('hoten'=>-1));
    }

    public function get_list_condition($condition){
        return $this->_collection->find($condition)->sort(array('hoten'=>-1));
    }

    public function get_one(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->findOne($query);
    }

    public function insert(){
        $query = array(
            'hoten' => $this->hoten,
            'bidanh' => $this->bidanh,
            'ngaysinh' => $this->ngaysinh, 
            'gioitinh' => $this->gioitinh,
            'nguyenquan' => $this->nguyenquan,
            'cmnd' => $this->cmnd,
            'sodienthoai' => $this->sodienthoai,
            'donvi' => $this->donvi,
            'date_post' => new MongoDate()
        );
        return $this->_collection->insert($query);
    }

    public function edit(){
        $query = array('$set' => array(
            'hoten' => $this->hoten,
            'bidanh' => $this->bidanh,
            'ngaysinh' => $this->ngaysinh, 
            'gioitinh' => $this->gioitinh,
            'nguyenquan' => $this->nguyenquan,
            'cmnd' => $this->cmnd,
            'sodienthoai' => $this->sodienthoai));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function delete(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->remove($query);
    }
}
?>