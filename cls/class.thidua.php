<?php
class ThiDua {
    const COLLECTION = 'thidua';
    private $_mongo;
    private $_collection;

    public $id = '';
    public $id_nam = '';
    public $id_danhhieu = '';
    public $nhansu = ''; //array(id_nhansu, id_donvi, id)
    public $date_post = '';
    public $xetduyet_1 = array();
    public $xetduyet_2 = array();
    public $xetduyet_3 = array();
    
    public function __construct(){
        $this->_mongo = DBConnect::init();
        $this->_collection = $this->_mongo->getCollection(ThiDua::COLLECTION);
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
            'id_nam' => new MongoId($this->id_nam),
            'id_danhhieu' => new MongoId($this->id_danhhieu),
            'nhansu' => $this->nhansu,
            'date_post' => new MongoDate()
        );
        return $this->_collection->insert($query);
    }

    public function edit(){
        $query = array('$set' => array(
            'id_nam' => new MongoId($this->id_nam),
            'id_danhhieu' => new MongoId($this->id_danhhieu),
            'nhansu' => $this->nhansu
        ));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);   
    }

    public function delete(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->remove($query);
    }
}
?>