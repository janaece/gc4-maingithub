<?php

/**
 * GcrChatSessionInviteTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class GcrChatSessionInviteTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object GcrChatSessionInviteTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GcrChatSessionInvite');
    }
    public static function getAllChatSessionInvitations()
    {
        return self::getInstance()->findAll();
    }
    public static function clearExpired()
    {
        $expiration_time = time() - 60 * 60 * 24; // one day ago
        self::getInstance()->createQuery('c')
            ->delete()
            ->where('c.time_created < ?', $expiration_time)
            ->execute();
    }
}