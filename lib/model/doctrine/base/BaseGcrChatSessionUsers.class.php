<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GcrChatSessionUsers', 'doctrine');

/**
 * BaseGcrChatSessionUsers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $session_id
 * @property string $user_eschool_id
 * @property integer $time_created
 * 
 * @method integer             getUserId()          Returns the current record's "user_id" value
 * @method integer             getSessionId()       Returns the current record's "session_id" value
 * @method string              getUserEschoolId()   Returns the current record's "user_eschool_id" value
 * @method integer             getTimeCreated()     Returns the current record's "time_created" value
 * @method GcrChatSessionUsers setUserId()          Sets the current record's "user_id" value
 * @method GcrChatSessionUsers setSessionId()       Sets the current record's "session_id" value
 * @method GcrChatSessionUsers setUserEschoolId()   Sets the current record's "user_eschool_id" value
 * @method GcrChatSessionUsers setTimeCreated()     Sets the current record's "time_created" value
 * 
 * @package    globalclassroom
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGcrChatSessionUsers extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gcr_chat_session_users');
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('session_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_eschool_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('time_created', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}