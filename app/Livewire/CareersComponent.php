<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Career;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;

class CareersComponent extends Component
{
    public $search = '';
    public $selectedType = '';
    public $selectedCategory = '';
    
    protected $queryString = [
        'search' => ['except' => ''],
        'selectedType' => ['except' => ''],
        'selectedCategory' => ['except' => '']
    ];

    public function updated($propertyName)
    {
        // This will be called whenever any property is updated
        // No need for separate methods
    }

    public function render()
    {
        $query = Career::query()->where('is_active', true);
        
        // Apply search filter
        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('job_title', 'like', '%' . $this->search . '%');
                //   ->orWhere('job_content', 'like', '%' . $this->search . '%')
                //   ->orWhere('job_location', 'like', '%' . $this->search . '%')
                //   ->orWhere('job_category', 'like', '%' . $this->search . '%');
            });
        }
        
        // Apply job type filter
        if (!empty($this->selectedType)) {
            $query->where('job_type', $this->selectedType);
        }
        
        // Apply category filter
        if (!empty($this->selectedCategory)) {
            $query->where('job_category', $this->selectedCategory);
        }
        
        $careers = $query->latest()->get();
        
        // Get available job types from database
        $jobTypes = Career::where('is_active', true)
            ->distinct()
            ->pluck('job_type')
            ->filter()
            ->values()
            ->toArray();
        
        // If no job types in DB, use defaults
        if (empty($jobTypes)) {
            $jobTypes = ['online', 'onsite', 'hybrid'];
        }
        
        // Get categories with counts
        $categories = Career::where('is_active', true)
            ->select('job_category')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('job_category')
            ->get()
            ->keyBy('job_category')
            ->map(function($item) {
                return $item->count;
            })
            ->toArray();

        return view('livewire.careers-component', [
            'careers' => $careers,
            'jobTypes' => $jobTypes,
            'categories' => $categories,
            'totalJobsCount' => Career::where('is_active', true)->count()
        ]);
    }

    public function resetFilters()
    {
        $this->reset(['search', 'selectedType', 'selectedCategory']);
    }

    public function selectCategory($category)
    {
        $this->selectedCategory = $category;
    }

     /**
     * Redirect to job apply page
     */
    public function viewJob($careerId)
    {
        try {
            // Validate career exists and is active
            $career = Career::where('id', $careerId)
                ->where('is_active', true)
                ->firstOrFail();
            
            // Redirect to the apply route
            return redirect()->route('careers.apply', $careerId);
            
        } catch (\Exception $e) {
            // Log error and show message
            Log::error('Error redirecting to career apply page: ' . $e->getMessage());
            
            // You can optionally show an error message
            // session()->flash('error', 'Job not found or no longer available.');
        }
    }

    /**
     * Alternative method using Livewire's redirect
     * This works better if you want to keep Livewire's state
     */
    #[On('view-job')]
    public function viewJobAlternative($careerId)
    {
        // This method can be called from JavaScript
        $this->redirectRoute('careers.apply', $careerId);
    }
}