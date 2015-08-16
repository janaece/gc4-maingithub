<?php

/**
 * GcrCommissionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class GcrCommissionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object GcrCommissionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GcrCommission');
    }
    public static function createCommission($institution, $eschool, $rate)
    {
        $commission = new GcrCommission();
        $commission->setInstitutionId($institution->getShortName());
        $commission->setEschoolId($eschool->getShortName());
        $commission->setCommissionRate($rate);
        $commission->save();
        return $commission;
    }
    public static function getCommission($institution, $eschool)
    {
        $commission = Doctrine::getTable('GcrCommission')
                ->createQuery('c')
                ->where('c.institution_id = ?', $institution->getShortName())
                ->andWhere('c.eschool_id = ?', $eschool->getShortName())     
                ->fetchOne();
        return $commission;
    }
}