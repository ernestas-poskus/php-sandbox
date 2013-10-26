<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/16/13
 * Time: 5:07 PM
 */

/**
 * Decorator pattern
 *
 *
 * Problem solves: allows to add more functionality to class || object without having to subclass
 * original class
 */

interface Logger
{
    public function log($msg);
}


abstract class LoggerDecorator implements Logger
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function log($msg)
    {
        $this->logger->log($msg);
    }
}

//File Logger
class FileLogger implements Logger
{
    public function log($msg)
    {
        echo "<p>Logging to FILE: \"{$msg}\"</p>";
    }
}

//Email Logger
class EmailLogger extends LoggerDecorator
{
    public function log($msg)
    {
        $this->logger->log($msg);
        echo "<p>Logging to email: \"{$msg}\"</p>";
    }
}

//SMS Logger
class SMSLogger extends LoggerDecorator
{
    public function log($msg)
    {
        $this->logger->log($msg);
        echo "<p>Logging to SMS: \"{$msg}\"</p>";
    }
}

//Fax Logger
class FaxLogger extends LoggerDecorator
{
    public function log($msg)
    {
        $this->logger->log($msg);
        echo "<p>Logging to FAX: \"{$msg}\"</p>";
    }
}

//Print Logger
class PrintLogger extends LoggerDecorator
{
    public function log($msg)
    {
        $this->logger->log($msg);
        echo "<p>Logging to PRINT: \"{$msg}\"</p>";
    }
}


$log = new FileLogger();
$log = new SMSLogger($log);
$log = new FaxLogger($log);


$log->log('awf');












