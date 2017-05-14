<?php
class ThiDuaTapThe {
    const COLLECTION = 'thiduatapthe';
    private $_mongo;
    private $_collection;

    public $id = '';
    public $id_nam = '';
    public $id_danhhieu = '';
    public $id_donvi = '';
    public $date_post = '';
    public $xetduyet_1 = array(); //array(t, id_danhhieu, noidung, date_post, id_user)
    public $xetduyet_2 = array(); //array(t, id_danhhieu, noidung, date_post, id_user)
    public $xetduyet_3 = array(); //array(t, id_danhhieu, noidung, date_post, id_user)
    
    public function __construct(){
        $this->_mongo = DBConnect::init();
        $this->_collection = $this->_mongo->getCollection(ThiDuaTapThe::COLLECTION);
    }

    public function get_all_list(){
        return $this->_collection->find()->sort(array('date_post'=>-1));
    }

     public function get_all_list_1(){
        return $this->_collection->find()->sort(array('date_post'=>-1, 'xetduyet_1.t' => 1));
    }
    public function get_all_list_2(){
        $query = array('xetduyet_1' => array('$exists' => true));
        return $this->_collection->find($query)->sort(array('date_post'=>-1, 'xetduyet_2.t' => 1));
    }

    public function get_all_list_3(){
        $query = array('xetduyet_2' => array('$exists' => true));
        return $this->_collection->find($query)->sort(array('date_post'=>-1, 'xetduyet_3.t' => 1));
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
            'id_danhhieu' => new MongoId($this->id_danhhieu),
            'id_donvi' => new MongoId($this->id_donvi),
            'date_post' => new MongoDate()
        );
        return $this->_collection->insert($query);
    }

    public function edit(){
        $query = array('$set' => array(
            'id_nam' => new MongoId($this->id_nam),
            'id_danhhieu' => new MongoId($this->id_danhhieu),
            'id_donvi' => new MongoId($this->id_donvi)
        ));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);   
    }

    public function delete(){
        $query = array('_id' => new MongoId($this->id));
        return $this->_collection->remove($query);
    }

    public function xetduyet_1(){
        $query = array('$set' => array('xetduyet_1' => $this->xetduyet_1));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function xetduyet_2(){
        $query = array('$set' => array('xetduyet_2' => $this->xetduyet_2));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function xetduyet_3(){
        $query = array('$set' => array('xetduyet_3' => $this->xetduyet_3));
        $condition = array('_id' => new MongoId($this->id));
        return $this->_collection->update($condition, $query);
    }

    public function check_exists(){
        $query = array(
            'id_nam' => new MongoId($this->id_nam),
            'id_donvi' => new MongoId($this->id_donvi)
        );
        $field = array('_id' => true);
        $result = $this->_collection->findOne($query, $field);
        if(isset($result['_id']) && $result['_id'] ) return true;
        else return false;
    }
}
?>