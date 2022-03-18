<?php
declare(strict_types=1);

namespace Pandawa\Category\Model;

use Pandawa\Component\Ddd\AbstractModel;

/**
 * @author root
 */
class Category extends AbstractModel
{
    /**
     * @var array
     */
    protected $guarded = [];
    protected $table = 'categories';
}
