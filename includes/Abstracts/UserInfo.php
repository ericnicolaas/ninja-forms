<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Abstracts_UserInfo
 */
abstract class NF_Abstracts_UserInfo extends NF_Abstracts_Input
{
    protected $_name = 'input';

    protected $_group = 'user_info';

    protected $_type = 'text';

    public function __construct()
    {
        parent::__construct();

        $settings = Ninja_Forms::config( 'UserInfoFieldSettings' );

        $this->_settings = array_merge( $this->_settings, $settings );
    }
}