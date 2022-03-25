<?php
declare(strict_types=1);

namespace Pandawa\Product\Command;

use Pandawa\Product\Service\ProductEditor;

/**
 * @author root
 */
final class EditProductHandler
{
    /**
     * @var mixed|null
     */
    private $result;

    public function __construct(private ProductEditor $editor)
    {
    }

    /**
     * @param EditProduct $message
     *
     * @return mixed
     */
    public function handle(EditProduct $message)
    {

        return $this->editor->edit($message);
    }
}

