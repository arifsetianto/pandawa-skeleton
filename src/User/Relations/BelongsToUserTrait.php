<?php

declare(strict_types=1);

namespace User\Relations;

use Pandawa\Component\Ddd\Relationship\BelongsTo;
use Pandawa\Component\Ddd\RelationshipBehaviorTrait;
use User\Model\User;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
trait BelongsToUserTrait
{
    use RelationshipBehaviorTrait;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}