<?php

namespace HitcKit\CatalogBundle\Services;

use HitcKit\CatalogBundle\Controller\DefaultController;
// use HitcKit\CoreBundle\Entity\Node;
use HitcKit\CoreBundle\Services\BaseTypeTrait;
use HitcKit\CoreBundle\Services\NodeTypeInterface;

class CatalogRootType implements NodeTypeInterface
{
    use BaseTypeTrait;

    public static function getName(): string
    {
        return 'hitc_kit_core.catalog_root_type';
    }

    public function getNameController(): string
    {
        return DefaultController::class.'::index';
    }
}
