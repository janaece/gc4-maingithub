<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GcrInstitutionSaltHistory', 'doctrine');

/**
 * BaseGcrInstitutionSaltHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $institutionid
 * @property string $salt
 * 
 * @method integer                   getId()            Returns the current record's "id" value
 * @method integer                   getInstitutionid() Returns the current record's "institutionid" value
 * @method string                    getSalt()          Returns the current record's "salt" value
 * @method GcrInstitutionSaltHistory setId()            Sets the current record's "id" value
 * @method GcrInstitutionSaltHistory setInstitutionid() Sets the current record's "institutionid" value
 * @method GcrInstitutionSaltHistory setSalt()          Sets the current record's "salt" value
 * 
 * @package    globalclassroom
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGcrInstitutionSaltHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gcr_institution_salt_history');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'gcr_institution_salt_history_id',
             'length' => 8,
             ));
        $this->hasColumn('institutionid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('salt', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}