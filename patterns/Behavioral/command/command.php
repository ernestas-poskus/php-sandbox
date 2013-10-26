<?php
/**
 * Created by JetBrains PhpStorm.
 * User: oWR
 * Date: 6/2/13
 * Time: 1:37 PM
 * To change this template use File | Settings | File Templates.
 */

/**
 * Command Pattern
 *
 * Problem solves: encapsulates a command or functionality inside object
 *
 * Structure:
 *  Command - what you exec
 *  Receiver
 *  Invoker
 */


//Command
interface Command {
    public function execute();
}

class GetCompanyCommand implements Command {

    private $stockSim;

    public function execute() {
        $this->stockSim->getCompany();
    }
}

class updatePriceCommand implements Command {

    private $stockSim;

    public function execute() {
        $this->stockSim->updatePrice();
    }
}

// ----------------------------------------------------------------------------//


//Receiver
class StockSim {
    public function getCompany() {

    }

    public function updatePrice() {

    }
}


//Invoker
if (class_exists($in)) {
    $comm = new $in(new StockSim());
} else {
    throw new Exception('...');
}

//Client
$in = getAction();


/**
 * \INCOMPLETE
 */












