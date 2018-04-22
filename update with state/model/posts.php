<?php
namespace Model;
class Posts extends \Orm\Model{
    protected static $_table_name = 'attractions';
    protected static $_properties= array( 'id','body','title','image', 'state');
    protected static $_has_many = array('comment' => array(
        'key_from' => 'id',
        'model_to' => 'Model\Comment',
        'key_to' => 'att_id',
        'cascade_save' => true,
        'cascade_delete' => false,
    ));

   

}
