<div class="col-12 col-lg-6 col-contact-form" data-aos="fade-up">
    <div class="contact-form-wrap radius18">
        <div class="contact-form-headings">
            <h2 class="heading text-32" data-aos="fade-up">
                @if(!empty($selectedResources))
                    Outsource Resources Inquiry
                @else
                    Make an Appointment
                @endif
            </h2>
            <p class="heading text-14 mt-4" data-aos="fade-up">
                Feel free to contact with us, we don't spam your email
            </p>
        </div>

        {{-- <!-- Selected Resources Summary -->
        @if(!empty($selectedResources))
            <div class="mb-6 p-4 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-lg border border-primary/20" data-aos="fade-up">
                <h4 class="font-bold text-lg text-primary mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Selected Resources for Outsourcing
                </h4>
                <div class="space-y-2 max-h-40 overflow-y-auto pr-2">
                    @foreach($selectedResources as $resource)
                        <div class="flex items-center justify-between bg-white/50 p-2 rounded">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-accent mr-3"></div>
                                <span class="font-medium text-gray-800">{{ $resource['role'] }}</span>
                                <span class="text-sm text-gray-600 ml-2">({{ $resource['experience'] }})</span>
                            </div>
                            <button type="button" 
                                    onclick="removeResource(this, '{{ $resource['role'] }}|{{ $resource['experience'] }}')"
                                    class="text-red-500 hover:text-red-700 cursor-pointer">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 pt-3 border-t border-gray-300 text-sm text-gray-600">
                    <p class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <strong>{{ count($selectedResources) }} resource(s)</strong> selected from Salary Guide
                    </p>
                </div>
            </div>
        @endif --}}

        <!-- Flash message integration starts here -->
        @if (session('success'))
            <div id="success-message" class="mt-4" role="alert" data-aos="fade-up"
                style="color: #155724; background-color: #d4edda; border: 1px solid #c3e6cb; border-radius: 5px; padding: 12px 40px 12px 15px; margin-bottom: 15px; position: relative; opacity: 1; transition: opacity 0.5s ease;">
                <span class="font-medium">{{ session('success') }}</span>
                <button type="button" class="close-btn" aria-label="Close"
                    style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; border: none; font-size: 20px; cursor: pointer; color: #e01b1b; opacity: 0.7;"
                    onclick="fadeOutAndHide(this.parentElement)">
                    ×
                </button>
            </div>

            <script>
                // Auto-hide script placed right after the message
                (function() {
                    const message = document.getElementById('success-message');
                    if (message) {
                        setTimeout(() => {
                            fadeOutAndHide(message);
                        }, 5000);
                    }
                })();

                function fadeOutAndHide(element) {
                    if (!element) return;

                    // Start fade out animation
                    element.style.opacity = '0';

                    // Hide completely after fade out completes
                    setTimeout(() => {
                        element.style.display = 'none';
                    }, 500);
                }
            </script>
        @endif
        <!-- Flash message integration ends here -->

        <form action="{{ route('appointments.store') }}" method="POST" class="form contact-form" data-aos="fade-up" id="appointmentForm">
            @csrf
            
            <!-- Hidden input for selected resources -->
            @if(!empty($selectedResources))
                @foreach($selectedResources as $resource)
                    <input type="hidden" name="selected_resources[]" value="{{ $resource['role'] }}|{{ $resource['experience'] }}">
                @endforeach
            @endif

            <div class="field">
                <label for="ContactForm-name" class="visually-hidden">
                    Your Name
                </label>
                <input id="ContactForm-name" class="text text-16" type="text" placeholder="Your Name *"
                    name="name" required value="{{ old('name') }}">
            </div>
            <div class="field">
                <label for="ContactForm-email" class="visually-hidden">
                    Email Here
                </label>
                <input id="ContactForm-email" class="text text-16" type="email" placeholder="Email Here *"
                    name="email" required value="{{ old('email') }}">
            </div>
            <div class="field">
                <label for="ContactForm-service" class="visually-hidden">
                    Service Type
                </label>
                <select id="ContactForm-service" class="text text-16" name="service" required>
                    <option value="">Select Service Type *</option>
                    <option value="Outsource Resource" {{ old('service') == 'Outsource Resource' || !empty($selectedResources) ? 'selected' : '' }}>
                        Outsource Resource
                    </option>
                    <option value="Consultation" {{ old('service') == 'Consultation' ? 'selected' : '' }}>
                        Consultation
                    </option>
                    <option value="Technical Support" {{ old('service') == 'Technical Support' ? 'selected' : '' }}>
                        Technical Support
                    </option>
                    <option value="Training" {{ old('service') == 'Training' ? 'selected' : '' }}>
                        Training
                    </option>
                    <option value="Custom Service" {{ old('service') == 'Custom Service' ? 'selected' : '' }}>
                        Custom Service (Other)
                    </option>
                </select>
            </div>
            <div class="field">
                <label for="ContactForm-body" class="visually-hidden">
                    Your Comment / Selected Resources
                </label>
                <textarea id="ContactForm-body" class="text text-16" rows="6" placeholder="Your Comment *" name="message" required>{{ old('message', $resourceSummary ?? '') }}</textarea>
                @if(!empty($selectedResources))
                    <div class="text-xs text-gray-500 mt-1">
                        Resources list has been auto-filled. You can edit or add more details.
                    </div>
                @endif
            </div>
            <div class="form-button">
                <button type="submit" class="button button--secondary" aria-label="Send Message">
                    @if(!empty($selectedResources))
                        Submit Outsourcing Inquiry
                    @else
                        Send Message
                    @endif
                    <span class="svg-wrapper">
                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>

@php
function generateResourceSummary($resources) {
    $summary = "I'm interested in outsourcing the following resources:\n\n";
    
    // Group by role
    $groupedResources = [];
    foreach ($resources as $resource) {
        $role = $resource['role'];
        if (!isset($groupedResources[$role])) {
            $groupedResources[$role] = [];
        }
        $groupedResources[$role][] = $resource['experience'];
    }
    
    // Create formatted summary
    foreach ($groupedResources as $role => $experiences) {
        $summary .= "• {$role}: " . implode(', ', $experiences) . "\n";
    }
    
    $summary .= "\nPlease contact me with more information about hiring these resources.";
    
    return $summary;
}
@endphp

<style>
    /* Custom styles for the contact form */
    select.text-16 {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        background-color: white;
        color: #374151;
        font-size: 16px;
        line-height: 1.5;
        transition: all 0.2s ease;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 16px center;
        background-size: 20px;
    }
    
    select.text-16:focus {
        outline: none;
        border-color: #205781;
        box-shadow: 0 0 0 3px rgba(32, 87, 129, 0.1);
    }
    
    select.text-16 option {
        padding: 12px;
    }
    
    /* Scrollbar styling for selected resources */
    .overflow-y-auto::-webkit-scrollbar {
        width: 6px;
    }
    
    .overflow-y-auto::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }
    
    .overflow-y-auto::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 3px;
    }
    
    .overflow-y-auto::-webkit-scrollbar-thumb:hover {
        background: #a1a1a1;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Remove resource from list
        window.removeResource = function(button, resourceValue) {
            const resourceDiv = button.closest('.flex.items-center.justify-between');
            if (resourceDiv) {
                // Fade out animation
                resourceDiv.style.opacity = '0';
                resourceDiv.style.transform = 'translateX(-10px)';
                resourceDiv.style.transition = 'all 0.3s ease';
                
                setTimeout(() => {
                    resourceDiv.remove();
                    
                    // Update hidden inputs
                    const hiddenInputs = document.querySelectorAll('input[name="selected_resources[]"]');
                    hiddenInputs.forEach(input => {
                        if (input.value === resourceValue) {
                            input.remove();
                        }
                    });
                    
                    // Update textarea summary
                    updateTextareaSummary();
                    
                    // Update counter
                    updateResourceCounter();
                    
                    // If no resources left, reset form
                    const resources = document.querySelectorAll('input[name="selected_resources[]"]');
                    if (resources.length === 0) {
                        resetFormToDefault();
                    }
                }, 300);
            }
        };
        
        // Update textarea with current resources
        function updateTextareaSummary() {
            const resources = document.querySelectorAll('input[name="selected_resources[]"]');
            if (resources.length === 0) {
                document.getElementById('ContactForm-body').value = '';
                return;
            }
            
            // Group resources by role
            const grouped = {};
            resources.forEach(input => {
                const [role, experience] = input.value.split('|');
                if (!grouped[role]) {
                    grouped[role] = [];
                }
                grouped[role].push(experience);
            });
            
            // Build summary
            let summary = "I'm interested in outsourcing the following resources:\n\n";
            for (const [role, experiences] of Object.entries(grouped)) {
                summary += `• ${role}: ${experiences.join(', ')}\n`;
            }
            summary += "\nPlease contact me with more information about hiring these resources.";
            
            document.getElementById('ContactForm-body').value = summary;
        }
        
        // Update resource counter
        function updateResourceCounter() {
            const resources = document.querySelectorAll('input[name="selected_resources[]"]');
            const counter = document.querySelector('.selected-resources-count');
            if (counter) {
                counter.textContent = resources.length;
            }
        }
        
        // Reset form to default when all resources are removed
        function resetFormToDefault() {
            const serviceSelect = document.getElementById('ContactForm-service');
            const heading = document.querySelector('.contact-form-headings h2');
            const submitButton = document.querySelector('.form-button button');
            
            if (serviceSelect) serviceSelect.value = '';
            if (heading) heading.textContent = 'Make an Appointment';
            if (submitButton) submitButton.innerHTML = `
                Send Message
                <span class="svg-wrapper">
                    <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                    </svg>
                </span>
            `;
            
            // Remove selected resources summary container
            const summaryContainer = document.querySelector('.mb-6.p-4.bg-gradient-to-r');
            if (summaryContainer) {
                summaryContainer.style.opacity = '0';
                summaryContainer.style.transform = 'translateY(-10px)';
                summaryContainer.style.transition = 'all 0.3s ease';
                
                setTimeout(() => {
                    summaryContainer.remove();
                }, 300);
            }
        }
        
        // Initialize summary if resources exist
        const hasResources = document.querySelectorAll('input[name="selected_resources[]"]').length > 0;
        if (hasResources) {
            updateResourceCounter();
        }
        
        // Service type change handler
        const serviceSelect = document.getElementById('ContactForm-service');
        if (serviceSelect) {
            serviceSelect.addEventListener('change', function() {
                if (this.value !== 'Outsource Resource' && hasResources) {
                    // Warn user if they change from Outsource Resource with resources selected
                    if (confirm('Changing service type will clear your selected resources. Continue?')) {
                        // Clear all hidden resource inputs
                        document.querySelectorAll('input[name="selected_resources[]"]').forEach(input => {
                            input.remove();
                        });
                        resetFormToDefault();
                    } else {
                        this.value = 'Outsource Resource';
                    }
                }
            });
        }
    });
</script>