<?php
declare(strict_types=1);

namespace Acme\Api\Presenter;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Pandawa\Component\Presenter\NameablePresenterInterface;
use Pandawa\Component\Presenter\NameablePresenterTrait;
use Pandawa\Component\Presenter\PresenterInterface;
use Pandawa\Module\Api\Http\Controller\InteractsWithRendererTrait;
use Pandawa\Product\Model\Product;
use Pandawa\Product\Repository\ProductRepository;

/**
 * @author  root
 */
final class ImagePresenter implements PresenterInterface, NameablePresenterInterface
{
  use NameablePresenterTrait;
  use InteractsWithRendererTrait {
      InteractsWithRendererTrait::render as response;
  }

  /**
   * @param Request $request
   *
   * @return View|Responsable
   */
  public function render(Request $request)
  {
    $id = $request->product;
    $validator = Validator::make(['product' => $id], [
      'product' => 'required|uuid|exists:products,id'
    ]);

    if ($validator->fails()) return response('<h1>Error Not Found</h1>', 404);

    $product = Product::find($id);
    $image = $product->image;
    $name = $product->name;

    return response("<img src=\"$image\" alt=\"$name\">");
  }
}
