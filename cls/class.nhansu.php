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
    public $donvi = array(); //array('_id', 'id_donvi', 'id_chucvu', ngayquyetdinh, date_post)
    public $id_donvi = '';
    public $id_chucvu = '';
    public $ngayquyetdinh = '';
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
            'donvi' => array($this->donvi),
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
            'sodienthoai' => $this->sodienthoai,
            'donvi.0.id_donvi' => $this->id_donvi ? new MongoId($this->id_donvi) : '',
            'donvi.0.id_chucvu' => $this->id_chucvu ? new MongoId($this->id_chucvu) : '',
            'donvi.0.ngayquyetdinh' => $this->ngayquyetdinh
        ));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function push_donvi(){
        $query = array('$push' => array('donvi' => array('$each' => array($this->donvi), '$position' => 0)));
        //$query = array('$push' => array('donvi' => $this->donvi));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function delete(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->remove($query);
    }
}
?>