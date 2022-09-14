<?php
namespace Axoloth\TestExtension;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'Super extension pour Bolt CMS';
    }
}