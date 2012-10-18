<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
	public function test1Action(){
		ob_start();
		$rm = $this->event->getRouteMatch();
		\Zend\Debug\Debug::dump(($rm->getMatchedRouteName()));
		\Zend\Debug\Debug::dump(($rm->getParams()));
	}
	public function test2Action(){
		ob_start();
		$rm = $this->event->getRouteMatch();
		\Zend\Debug\Debug::dump(($rm->getMatchedRouteName()));
		\Zend\Debug\Debug::dump(($rm->getParams()));	
	}
}
