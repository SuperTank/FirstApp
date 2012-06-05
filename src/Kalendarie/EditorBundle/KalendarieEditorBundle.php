<?php

namespace Kalendarie\EditorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\DBAL\Types\Type;

class KalendarieEditorBundle extends Bundle
{
    
    public function boot() {     
        $em = $this->container->get('doctrine.orm.entity_manager');
        
        Type::addType('customdate', 'Kalendarie\EditorBundle\Type\CustomDate');        
        Type::addType('customtime', 'Kalendarie\EditorBundle\Type\CustomTime');
        
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('customdate', 'customdate');
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('customtime', 'customtime');
        
        /*
        $em = $this->container->get('doctrine.orm.entity_manager');
        Type::addType('blob', 'YOURDOMAIN\YOURBUNDLE\YOURTYPEDIRECTORY\BlobType');
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('blob','blob');         
         * */
    }
    
}
