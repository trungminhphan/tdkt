<?php
class DonVi {
    const COLLECTION = 'donvi';
    private $_mongo;
    private $_collection;

    public $id = '';
    public $ten = '';
    public $id_parent = '';
    public $diachi = '';
    public $dienthoai = '';
    public $thongtinkhac = '';


    public function __construct(){
        $this->_mongo = DBConnect::init();
        $this->_collection = $this->_mongo->getCollection(DonVi::COLLECTION);
    }

    public function get_all_list(){
        return $this->_collection->find()->sort(array('ten'=>-1));
    }

    public function get_list_condition($condition){
        return $this->_collection->find($condition)->sort(array('ten'=>-1));
    }

    public function get_one(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->findOne($query);
    }

    public function insert(){
        $query = array(
            'ten' => $this->ten,
            'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '',
            'diachi' => $this->diachi, 
            'dienthoai' => $this->dienthoai,
            'thongtinkhac' => $this->thongtinkhac
        );
        return $this->_collection->insert($query);
    }

    public function edit(){
        $query = array('$set' => array(
            'ten' => $this->ten,
            'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '',
            'diachi' => $this->diachi, 
            'dienthoai' => $this->dienthoai,
            'thongtinkhac' => $this->thongtinkhac));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function delete(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->remove($query);
    }

}
?>