<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GcrPaypal', 'doctrine');

/**
 * BaseGcrPaypal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $txn_id
 * @property decimal $mc_gross
 * @property string $payer_id
 * @property string $receiver_id
 * @property string $payment_status
 * @property string $receipt_id
 * @property decimal $mc_fee
 * @property decimal $tax
 * @property decimal $shipping
 * @property string $currency_code
 * @property string $parent_txn_id
 * @property string $first_name
 * @property string $last_name
 * @property string $recurring_payment_id
 * @property string $payment_date
 * @property decimal $gc_fee
 * @property decimal $commission_fee
 * 
 * @method string    getTxnId()                Returns the current record's "txn_id" value
 * @method decimal   getMcGross()              Returns the current record's "mc_gross" value
 * @method string    getPayerId()              Returns the current record's "payer_id" value
 * @method string    getReceiverId()           Returns the current record's "receiver_id" value
 * @method string    getPaymentStatus()        Returns the current record's "payment_status" value
 * @method string    getReceiptId()            Returns the current record's "receipt_id" value
 * @method decimal   getMcFee()                Returns the current record's "mc_fee" value
 * @method decimal   getTax()                  Returns the current record's "tax" value
 * @method decimal   getShipping()             Returns the current record's "shipping" value
 * @method string    getCurrencyCode()         Returns the current record's "currency_code" value
 * @method string    getParentTxnId()          Returns the current record's "parent_txn_id" value
 * @method string    getFirstName()            Returns the current record's "first_name" value
 * @method string    getLastName()             Returns the current record's "last_name" value
 * @method string    getRecurringPaymentId()   Returns the current record's "recurring_payment_id" value
 * @method string    getPaymentDate()          Returns the current record's "payment_date" value
 * @method decimal   getGcFee()                Returns the current record's "gc_fee" value
 * @method decimal   getCommissionFee()        Returns the current record's "commission_fee" value
 * @method GcrPaypal setTxnId()                Sets the current record's "txn_id" value
 * @method GcrPaypal setMcGross()              Sets the current record's "mc_gross" value
 * @method GcrPaypal setPayerId()              Sets the current record's "payer_id" value
 * @method GcrPaypal setReceiverId()           Sets the current record's "receiver_id" value
 * @method GcrPaypal setPaymentStatus()        Sets the current record's "payment_status" value
 * @method GcrPaypal setReceiptId()            Sets the current record's "receipt_id" value
 * @method GcrPaypal setMcFee()                Sets the current record's "mc_fee" value
 * @method GcrPaypal setTax()                  Sets the current record's "tax" value
 * @method GcrPaypal setShipping()             Sets the current record's "shipping" value
 * @method GcrPaypal setCurrencyCode()         Sets the current record's "currency_code" value
 * @method GcrPaypal setParentTxnId()          Sets the current record's "parent_txn_id" value
 * @method GcrPaypal setFirstName()            Sets the current record's "first_name" value
 * @method GcrPaypal setLastName()             Sets the current record's "last_name" value
 * @method GcrPaypal setRecurringPaymentId()   Sets the current record's "recurring_payment_id" value
 * @method GcrPaypal setPaymentDate()          Sets the current record's "payment_date" value
 * @method GcrPaypal setGcFee()                Sets the current record's "gc_fee" value
 * @method GcrPaypal setCommissionFee()        Sets the current record's "commission_fee" value
 * 
 * @package    globalclassroom
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGcrPaypal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gcr_paypal');
        $this->hasColumn('txn_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => '',
             ));
        $this->hasColumn('mc_gross', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('payer_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('receiver_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('payment_status', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('receipt_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('mc_fee', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('tax', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('shipping', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('currency_code', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('parent_txn_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('first_name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('last_name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('recurring_payment_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('payment_date', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('gc_fee', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'default' => '0',
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('commission_fee', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'default' => '0',
             'primary' => false,
             'length' => 18,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}