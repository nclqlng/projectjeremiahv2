<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class BaseAdminController extends Controller
{
    protected $model;
    protected $viewPath;
    protected $routePrefix;
    protected $validationRules = [];

    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'can:allow_admin']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = $this->model::all();
        $viewData = $this->getIndexViewData($items);
        
        return view("{$this->viewPath}.index", $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = $this->getCreateViewData();
        
        return view("{$this->viewPath}.create", $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->getValidationRules());
        
        $item = $this->model::create($this->processStoreData($validated));
        
        return $this->redirectAfterStore($item);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = $this->model::findOrFail($id);
        $viewData = $this->getShowViewData($item);
        
        return view("{$this->viewPath}.show", $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = $this->model::findOrFail($id);
        $viewData = $this->getEditViewData($item);
        
        return view("{$this->viewPath}.edit", $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = $this->model::findOrFail($id);
        $validated = $request->validate($this->getValidationRules($id));
        
        $item->update($this->processUpdateData($validated, $item));
        
        return $this->redirectAfterUpdate($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = $this->model::findOrFail($id);
        
        $this->beforeDelete($item);
        $item->delete();
        
        return $this->redirectAfterDelete();
    }

    // Abstract methods to be implemented by child classes
    abstract protected function getValidationRules($id = null): array;
    
    // Methods that can be overridden by child classes
    protected function getIndexViewData($items): array
    {
        return ['items' => $items];
    }

    protected function getCreateViewData(): array
    {
        return [];
    }

    protected function getShowViewData($item): array
    {
        return ['item' => $item];
    }

    protected function getEditViewData($item): array
    {
        return ['item' => $item];
    }

    protected function processStoreData(array $validated): array
    {
        return $validated;
    }

    protected function processUpdateData(array $validated, $item): array
    {
        return $validated;
    }

    protected function beforeDelete($item): void
    {
        // Override in child classes if needed
    }

    protected function redirectAfterStore($item)
    {
        return redirect()->route("{$this->routePrefix}.show", $item->id)
            ->with('success', 'Item created successfully.');
    }

    protected function redirectAfterUpdate($item)
    {
        return redirect()->route("{$this->routePrefix}.show", $item->id)
            ->with('success', 'Item updated successfully.');
    }

    protected function redirectAfterDelete()
    {
        return redirect()->route("{$this->routePrefix}.index")
            ->with('success', 'Item deleted successfully.');
    }
}