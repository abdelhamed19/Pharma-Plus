<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardPagination extends Component
{
    public $paginator;
    /**
     * Create a new component instance.
     */
    public function __construct($paginator = null)

    {
        $this->paginator = $paginator;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-pagination', ['paginator' => $this->paginator]);
    }
}
