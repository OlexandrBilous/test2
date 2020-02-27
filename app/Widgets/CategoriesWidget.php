<?php

namespace App\Widgets;

use App\Models\Categories;
use App\Widgets\Contract\ContractWidget;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget implements ContractWidget
{
/**
* The configuration array.
*
* @var array
*/

/**
* Treat this method as a controller action.
* Return view() or other content to display.
*/
public function execute()
{
$data = Categories::all();
return view('Widgets::categories', [
'data' => $data
]);
}
}
