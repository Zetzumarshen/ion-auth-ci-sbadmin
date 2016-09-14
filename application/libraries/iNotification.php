<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 2016-09-13
 * Time: 9:40 AM
 */
interface iNotification
{
    /**
     * @return string
     */
    public function getLink();

    /**
     * @param string $link
     * @return SBAdmin2_Notification
     */
    public function setLink($link);

    /**
     * @return mixed
     */
    public function getDate();

    /**
     * @param mixed $date
     * @return SBAdmin2_Notification
     */
    public function setDate(DateTime $date);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param mixed $name
     * @return SBAdmin2_Notification
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getMessage();

    /**
     * @param mixed $message
     * @return SBAdmin2_Notification
     */
    public function setMessage($message);

    public function get_relative_timestamp();
}