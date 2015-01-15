<?php
/**
 * This file is part of the eZ Publish Kernel package
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Bundle\EzPublishLegacyBundle\Cache;

trait Switchable
{
    /** @var bool */
    private $isSwitchedOn = true;

    public function switchOn()
    {
        $this->isSwitchedOn = true;
    }

    public function switchOff()
    {
        $this->isSwitchedOn = false;
    }

    /**
     * Returns the value of the switch
     * @return bool
     */
    public function getSwitch()
    {
        return $this->isSwitchedOn;
    }
}
