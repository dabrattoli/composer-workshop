<?php

/**
 * This file is part of the dabrattoli/composer-workshop library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) David Brattoli <davidbrattoli@yahoo.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace dbrattoli\ComposerWorkshop;

use dbrattoli\Uuid\Uuid;

use dbrattoli\Uuid\UuidInterface;

class PhpWorld
{
    /**
     * Returns a simple and friendly message.
     *
     * @return Uuid
     */
    public function getUuid(): UuidInterface
    {
        return Uuid::uuid4();
    }
}
