<?php
class ThiDua {
    const COLLECTION = 'thidua';
    private $_mongo;
    private $_collection;

    public $id = '';
    public $ten = 0;
    
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
}
?>