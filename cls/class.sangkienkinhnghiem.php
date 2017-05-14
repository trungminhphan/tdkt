<?php
class SangKienKinhNghiem {
    const COLLECTION = 'sangkienkinhnghiem';
    private $_mongo;
    private $_collection;

    public $id = '';
    public $id_nam = 0;
    public $ten = '';
    public $nhansu = array(); //id_nhansu, id_donvi
    public $xetduyet = 0; //0 - dang chờ xử lý, 1 - Ok, 2 - no
    public $noidung = '';
    public $date_post = '';
    public $id_user_regis = '';
    public $id_user_check = '';

    public function __construct(){
        $this->_mongo = DBConnect::init();
        $this->_collection = $this->_mongo->getCollection(SangKienKinhNghiem::COLLECTION);
    }

    public function get_all_list(){
        return $this->_collection->find()->sort(array('date_post'=>-1));
    }

    public function get_list_condition($condition){
        return $this->_collection->find($condition)->sort(array('date_post'=>-1));
    }

    public function get_one(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->findOne($query);
    }

    public function insert(){
        $query = array(
            'id_nam' => new MongoId($this->id_nam),
            'ten' => $this->ten,
            'nhansu' => $this->nhansu,
            'xetduyet' => 0,
            'noidung' => '',
            'date_post' => new MongoDate(),
            'id_user_regis' => new MongoId($this->id_user_regis)
        );
        return $this->_collection->insert($query);
    }

    public function check(){
        $query = array('$set' => array(
            'xetduyet' => intval($this->xetduyet),
            'noidung' => $this->noidung,
            'id_user_check' => new MongoId($this->id_user_check),
            'date_check' => new MongoDate()
        ));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function edit(){
        $query = array('$set' => array(
            'id_nam' => new MongoId($this->id_nam),
            'ten' => $this->ten,
            'nhansu' => $this->nhansu,
        ));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function delete(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->remove($query);
    }

    public function check_skkn(){
        $query = array(
            'id_nam' => new MongoId($this->id_nam),
            'nhansu' => $this->nhansu,
            'xetduyet' => intval(1)
        );
        $field = array('_id' => true);
        $result = $this->_collection->findOne($query, $field);
        if(isset($result['_id']) && $result['_id'] ) return true;
        else return false;
    }

}
?>