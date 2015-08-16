<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GcrInstitution', 'doctrine');

/**
 * BaseGcrInstitution
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $full_name
 * @property string $external_url
 * @property boolean $suspended
 * @property string $logo
 * @property integer $contact1
 * @property integer $contact2
 * @property integer $address
 * @property boolean $visible
 * @property string $short_name
 * @property boolean $is_new
 * @property boolean $is_internal
 * @property string $admin_password
 * @property integer $creator_id
 * @property integer $creation_date
 * @property string $default_eschool_id
 * @property integer $institution_type
 * @property string $password_salt
 * 
 * @method integer        getId()                 Returns the current record's "id" value
 * @method string         getFullName()           Returns the current record's "full_name" value
 * @method string         getExternalUrl()        Returns the current record's "external_url" value
 * @method boolean        getSuspended()          Returns the current record's "suspended" value
 * @method string         getLogo()               Returns the current record's "logo" value
 * @method integer        getContact1()           Returns the current record's "contact1" value
 * @method integer        getContact2()           Returns the current record's "contact2" value
 * @method integer        getAddress()            Returns the current record's "address" value
 * @method boolean        getVisible()            Returns the current record's "visible" value
 * @method string         getShortName()          Returns the current record's "short_name" value
 * @method boolean        getIsNew()              Returns the current record's "is_new" value
 * @method boolean        getIsInternal()         Returns the current record's "is_internal" value
 * @method string         getAdminPassword()      Returns the current record's "admin_password" value
 * @method integer        getCreatorId()          Returns the current record's "creator_id" value
 * @method integer        getCreationDate()       Returns the current record's "creation_date" value
 * @method string         getDefaultEschoolId()   Returns the current record's "default_eschool_id" value
 * @method integer        getInstitutionType()    Returns the current record's "institution_type" value
 * @method string         getPasswordSalt()       Returns the current record's "password_salt" value
 * @method GcrInstitution setId()                 Sets the current record's "id" value
 * @method GcrInstitution setFullName()           Sets the current record's "full_name" value
 * @method GcrInstitution setExternalUrl()        Sets the current record's "external_url" value
 * @method GcrInstitution setSuspended()          Sets the current record's "suspended" value
 * @method GcrInstitution setLogo()               Sets the current record's "logo" value
 * @method GcrInstitution setContact1()           Sets the current record's "contact1" value
 * @method GcrInstitution setContact2()           Sets the current record's "contact2" value
 * @method GcrInstitution setAddress()            Sets the current record's "address" value
 * @method GcrInstitution setVisible()            Sets the current record's "visible" value
 * @method GcrInstitution setShortName()          Sets the current record's "short_name" value
 * @method GcrInstitution setIsNew()              Sets the current record's "is_new" value
 * @method GcrInstitution setIsInternal()         Sets the current record's "is_internal" value
 * @method GcrInstitution setAdminPassword()      Sets the current record's "admin_password" value
 * @method GcrInstitution setCreatorId()          Sets the current record's "creator_id" value
 * @method GcrInstitution setCreationDate()       Sets the current record's "creation_date" value
 * @method GcrInstitution setDefaultEschoolId()   Sets the current record's "default_eschool_id" value
 * @method GcrInstitution setInstitutionType()    Sets the current record's "institution_type" value
 * @method GcrInstitution setPasswordSalt()       Sets the current record's "password_salt" value
 * 
 * @package    globalclassroom
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGcrInstitution extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gcr_institution');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'gcr_institution_id',
             'length' => 8,
             ));
        $this->hasColumn('full_name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('external_url', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('suspended', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'false',
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('logo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('contact1', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('contact2', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('address', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('visible', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'true',
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('short_name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('is_new', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'true',
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_internal', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'false',
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('admin_password', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('creator_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('creation_date', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('default_eschool_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('institution_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('password_salt', 'string', null, array(
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