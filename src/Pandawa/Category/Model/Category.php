<?php
declare(strict_types=1);

namespace Pandawa\Category\Model;

use Pandawa\Component\Ddd\AbstractModel;

/**
 * @author root
 */
class Category extends AbstractModel
{
    protected $table = 'categories';
    public $timestamps = false;
}
