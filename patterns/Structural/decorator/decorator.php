<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/14/13
 * Time: 1:50 PM
 */

class player {
    public $data;

    public function __construct(array $info) {

        $this->data = $info;

    }
}

/**
 * Class player_decorator
 *
 * Like a template
 */
abstract class player_decorator {

    abstract public function add($int);
}


/**
 * Class player_str_decorate
 */
class player_str_decorate extends player_decorator {

    public function __construct(player $p) {

        $this->player = $p;

    }

    public function add($int) {
        $this->player->data['str'] += (int)$int;
    }

}

/**
 * Class player_dex_decorate
 */
class player_dex_decorate extends player_decorator {

    public function __construct(player $p) {
        $this->player = $p;
    }

    public function add($int) {
        $this->player->data['dex'] += (int)$int;
    }

}

/***************************************************************
Testing
***************************************************************/

$p = new Player( array('str' => 10, 'dex' => 15) );
echo 'Initial: ' . $p->data['str'];
echo ' & ';
echo $p->data['dex'];

echo '<hr />';

$str = new player_str_decorate($p);
$str->add(13);
echo $str->player->data['str'];

echo '<br />';

$dex = new player_dex_decorate($p);
$dex->add(21);
echo $dex->player->data['dex'];