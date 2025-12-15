<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;
use Livewire\WithPagination;

class ProjectsFilter extends Component
{
    use WithPagination;
    
    public $search = '';
    public $selectedType = '';
    public $selectedIndustry = '';
    public $selectedRegion = '';
    
    protected $queryString = [
        'search' => ['except' => ''],
        'selectedType' => ['except' => ''],
        'selectedIndustry' => ['except' => ''],
        'selectedRegion' => ['except' => '']
    ];

    public function updated($propertyName)
    {
        // Reset to first page when filters change
        $this->resetPage();
    }

    public function render()
    {
        $query = Project::query();
        
        // Apply search filter
        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('short_description', 'like', '%' . $this->search . '%')
                  ->orWhere('content_section_1', 'like', '%' . $this->search . '%')
                  ->orWhere('content_section_2', 'like', '%' . $this->search . '%');
            });
        }
        
        // Apply type filter
        if (!empty($this->selectedType)) {
            $query->where('type', $this->selectedType);
        }
        
        // Apply industry filter
        if (!empty($this->selectedIndustry)) {
            $query->where('industry', $this->selectedIndustry);
        }
        
        // Apply region filter
        if (!empty($this->selectedRegion)) {
            $query->where('region', $this->selectedRegion);
        }
        
        $projects = $query->latest()->paginate(12);
        
        // Get available filters from database
        $types = Project::distinct()
            ->whereNotNull('type')
            ->pluck('type')
            ->map(fn($type) => ucfirst(str_replace('_', ' ', $type)))
            ->toArray();
        
        $industries = Project::distinct()
            ->whereNotNull('industry')
            ->pluck('industry')
            ->toArray();
        
        $regions = Project::distinct()
            ->whereNotNull('region')
            ->pluck('region')
            ->toArray();

        return view('livewire.projects-filter', [
            'projects' => $projects,
            'types' => $types,
            'industries' => $industries,
            'regions' => $regions,
            'totalProjectsCount' => Project::count()
        ]);
    }

    public function resetFilters()
    {
        $this->reset(['search', 'selectedType', 'selectedIndustry', 'selectedRegion']);
        $this->resetPage();
    }

    public function selectType($type)
    {
        $this->selectedType = $type;
        $this->resetPage();
    }

    public function selectIndustry($industry)
    {
        $this->selectedIndustry = $industry;
        $this->resetPage();
    }

    public function selectRegion($region)
    {
        $this->selectedRegion = $region;
        $this->resetPage();
    }
}