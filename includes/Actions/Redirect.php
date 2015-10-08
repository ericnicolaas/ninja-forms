<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Action_Redirect
 */
final class NF_Actions_Redirect extends NF_Abstracts_Action
{
    /**
    * @var string
    */
    protected $_name  = '';

    /**
    * @var array
    */
    protected $_tags = array();

    /**
    * @var string
    */
    protected $_timing = 'normal';

    /**
    * @var int
    */
    protected $_priority = '10';

    /**
    * Constructor
    */
    public function __construct()
    {

    }

    /*
    * PUBLIC METHODS
    */

    public function save()
    {

    }

    public function process( $action_id, $form_id, $data )
    {
        $data['redirect'] = Ninja_Forms()->form( $form_id )->get_action( $action_id )->get_setting( 'url' );

        return $data;
    }
}