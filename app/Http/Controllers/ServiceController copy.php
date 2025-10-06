<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Team;

class ServiceController extends Controller
{
    /**
     * Display all services
     */
    public function index()
    {
        $servicesData = $this->getServicesData();
        $services = $servicesData['services'] ?? [];
        $teams = Team::get();
        
        return view('pages.services.index', compact('services', 'teams'));
    }

    /**
     * Display a specific service
     */
    public function show($id)
    {
        $servicesData = $this->getServicesData();
        $services = $servicesData['services'] ?? [];
        
        // Find the requested service
        $service = collect($services)->firstWhere('id', $id);
        
        if (!$service) {
            abort(404, 'Service not found');
        }
        
        return view('pages.services.services_details', compact('service', 'services'));
    }

    /**
     * Get services data from JSON file
     */
    private function getServicesData()
    {
        $jsonPath = storage_path('app/data/services.json');
        
        if (!file_exists($jsonPath)) {
            return ['services' => []];
        }
        
        $jsonContent = file_get_contents($jsonPath);
        return json_decode($jsonContent, true);
    }

    public function getServiceIcon($serviceId)
    {
        $iconsPath = storage_path('app/data/service-icons.json');
        
        if (!file_exists($iconsPath)) {
            return $this->getDefaultIcon();
        }
        
        $icons = json_decode(file_get_contents($iconsPath), true);
        return $icons[$serviceId] ?? $this->getDefaultIcon();
    }

    private function getDefaultIcon()
    {
        return '<svg class="icon-40" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <path d="M20 0C8.954 0 0 8.954 0 20C0 31.046 8.954 40 20 40C31.046 40 40 31.046 40 20C40 8.954 31.046 0 20 0Z" fill="CurrentColor"/>
        </svg>';
    }

    /**
     * API endpoint to get all services (optional)
     */
    public function apiIndex()
    {
        $servicesData = $this->getServicesData();
        return response()->json($servicesData);
    }

    /**
     * API endpoint to get specific service (optional)
     */
    public function apiShow($id)
    {
        $servicesData = $this->getServicesData();
        $services = $servicesData['services'] ?? [];
        $service = collect($services)->firstWhere('id', $id);
        
        if (!$service) {
            return response()->json(['error' => 'Service not found'], 404);
        }
        
        return response()->json($service);
    }
}