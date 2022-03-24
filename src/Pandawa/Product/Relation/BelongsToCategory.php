<?php
declare(strict_types=1);

namespace Pandawa\Product\Relation;

use Pandawa\Category\Model\Category;
use Pandawa\Component\Ddd\Relationship\BelongsTo;
use Pandawa\Component\Ddd\RelationshipBehaviorTrait;

/**
 * @author root
 */
trait BelongsToCategory
{
    use RelationshipBehaviorTrait;

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
