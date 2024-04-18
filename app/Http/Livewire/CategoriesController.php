<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CategoriesController extends Component
{

    use WithFileUploads;
    use WithPagination;

    public $name, $search, $selected_id, $pageTitle, $componentName;
    private $pagination = 5 ;

    public function render()
    {
        // Obtenemos las categorías desde el modelo Category
        $categories = Category::all();

        // Retornamos la vista 'livewire.category.categories' con las categorías como datos
        return view('livewire.category.categories', [
            'categories' => $categories
        ]);
    }
}
