<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tobias
 * Date: 25.06.13
 * Time: 23:30
 * To change this template use File | Settings | File Templates.
 */

class HoauthController extends CController
{
    public function actions()
    {
        return array(
            'oauth'      => array(
                'class' => 'vendor.sleepwalker.hoauth.HOAuthAction',
            ),
            'oauthadmin' => array(
                'class' => 'vendor.sleepwalker.hoauth.HOAuthAdminAction',
            ),
        );
    }
}