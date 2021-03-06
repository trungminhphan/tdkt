<?php
class Nam {
    const COLLECTION = 'nam';
    private $_mongo;
    private $_collection;

    public $id = '';
    public $ten = 0;

    public function __construct(){
        $this->_mongo = DBConnect::init();
        $this->_collection = $this->_mongo->getCollection(Nam::COLLECTION);
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
        $query = array('ten' => intval($this->ten));
        return $this->_collection->insert($query);
    }

    public function edit(){
        $query = array('$set' => array( 'ten' => intval($this->ten)));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function delete(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->remove($query);
    }

}
?>