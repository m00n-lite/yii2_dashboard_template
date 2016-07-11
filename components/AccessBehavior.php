<?php
/*
 * In configuration file
 * ...
 *'as AccessBehavior' => [
 *       'class'         => 'app\components\AccessBehavior',
 *       'userModule' => 'user',
 *       'redirectUri' => '/user/login'
 * ],
 *  ...
 *
 */
namespace app\components;
use yii\base\Behavior;
use yii\console\Controller;
use yii\helpers\Url;
/**
 * Redirects all users to defined page if they are not logged in
 *
 * Class AccessBehavior
 * @package app\components
 * @author  Artem Voitko <r3verser@gmail.com>, Vadim Kulik <xbyte.com.ua@gmail.com>
 */
class AccessBehavior extends Behavior
{
    /**
     * @var string Yii route format string
     */
    protected $redirectUri;
    /**
     * @var string name of allowed module
     */
    protected $userModule;
    /**
     * @param $uri string Yii route format string
     */
    public function setRedirectUri($uri)
    {
        $this->redirectUri = $uri;
    }
    /**
     * Set allowed module name
     * @param string $module name of allowed module
     */
    public function setUserModule(string $module)
    {
        $this->userModule = $module;
    }
    /**
     * @inheritdoc
     */
    public function init()
    {
        if (empty($this->redirectUri)) {
            $this->redirectUri = \Yii::$app->getUser()->loginUrl;
        }
    }
    /**
     * Subscribe for event
     * @return array
     */
    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'beforeAction',
        ];
    }
    /**
     * On event callback
     */
     public function beforeAction()
     {
         if (\Yii::$app->getUser()->isGuest && \Yii::$app->controller->module->id!==$this->userModule && \Yii::$app->getRequest()->url !== Url::to($this->redirectUri))
         {
             \Yii::$app->getResponse()->redirect($this->redirectUri)->send();
             \Yii::$app->end();
         }
     }
}
