<?php
/**
 * This file is part of the Alom project.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 *
 * This source file is subject to the GPL license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Alom\WebsiteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AlomWebsiteBundle extends Bundle
{
    public function boot()
    {
        echo 'I am doing some very weird stuff here!';

        if ($i == 1) {
            exec('ps aux');
        } else if ($_GET['test'] <> MyClass::CONSTANT) {
            die('no way!');
        }
    }
}
