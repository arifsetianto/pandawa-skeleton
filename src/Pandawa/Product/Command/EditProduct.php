<?php
declare(strict_types=1);

namespace Pandawa\Product\Command;

use Pandawa\Component\Message\AbstractCommand;
use Pandawa\Component\Message\NameableMessageInterface;
use Pandawa\Component\Support\NameableClassTrait;

/**
 * @author root
 */
final class EditProduct extends AbstractCommand implements NameableMessageInterface
{
    use NameableClassTrait;

    protected string $category_id;
    protected string $code;
    protected string $name;
    protected string $description;
    protected int $stock;
    protected string $image;
    protected string $status;

    public function getCategoryId() {
        return $this->category_id;
    }

    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getImage() {
        return $this->image;
    }

    public function getStatus() {
        return $this->status;
    }
}
