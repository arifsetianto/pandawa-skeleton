<?php

declare(strict_types=1);

namespace Order\Model;

use Pandawa\Component\Ddd\AbstractModel;
use User\Relations\BelongsToUserTrait;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class Order extends AbstractModel
{
    use BelongsToUserTrait;
}