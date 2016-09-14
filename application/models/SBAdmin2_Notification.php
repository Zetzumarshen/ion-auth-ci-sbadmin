<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 2016-09-13
 * Time: 9:40 AM
 */
class SBAdmin2_Notification extends  CI_Model implements iNotification, iNotification
{
    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $link;


    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return SBAdmin2_Notification
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return SBAdmin2_Notification
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return "<strong>{$this->name}<strong>";
    }

    /**
     * @param mixed $name
     * @return SBAdmin2_Notification
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return SBAdmin2_Notification
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function get_relative_timestamp(){
        $date = $this->date->getTimestamp();

        $secondsago = time() - $date;
        if ($secondsago <= 59) {$timestamp = "less than a minute ago";}
        else if ($secondsago <= 119) {$timestamp = floor(($secondsago / 60)) . " minute ago (" . strftime('%R', $date) . ")";}
        else if ($secondsago <= 3599) {$timestamp = round(($secondsago / 60)) . " minutes ago (" . strftime('%R', $date) . ")";}
        else if ($secondsago <= 7199) {$timestamp = round(($secondsago / 3600),1) . " hours ago (" . strftime('%a %R', $date) . ")";}
        else if ($secondsago <= 86400) {$timestamp = round(($secondsago / 3600)) . " hours ago (" . strftime('%a %R', $date) . ")";}
        else if ($secondsago <= 345600) {$timestamp = round(($secondsago / 86400)) . " days ago (" . strftime('%a %R', $date) . ")";}
        else { $timestamp = strftime('%d %m %Y %R', $date); }

        return "<span class=\"pull-right text-muted\"><em>$timestamp</em></span>";
    }
}
