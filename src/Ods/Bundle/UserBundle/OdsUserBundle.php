<?php

namespace Ods\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OdsUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
