<?php
declare(strict_types=1);

namespace Pandawa\Product\Command;

use Pandawa\Component\Message\AbstractCommand;
use Pandawa\Component\Message\NameableMessageInterface;
use Pandawa\Component\Support\NameableClassTrait;

/**
 * @author root
 */
final class DestroyProduct extends AbstractCommand implements NameableMessageInterface
{
    use NameableClassTrait;

    private string $id;

    public function getId() {
        return $this->id;
    }
}
