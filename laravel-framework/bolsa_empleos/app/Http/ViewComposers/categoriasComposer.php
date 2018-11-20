<?
namespace App\Http\ViewComposers;

use App\area_empresa;
use Illuminate\View\View;
use App\Repositories\UserRepository;

class CategoriasComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $categorias;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->categorias = area_empresa::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categorias_menu', $this->categorias);
    }
}