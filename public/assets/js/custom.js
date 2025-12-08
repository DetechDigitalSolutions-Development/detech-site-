document.querySelectorAll('.custom-select').forEach(select => {
    const trigger = select.querySelector('.custom-select__trigger');
    const options = select.querySelector('.custom-select__options');
    const optionItems = select.querySelectorAll('.custom-select__option');
    const hiddenSelect = select.querySelector('select'); // Get the hidden select

    trigger.addEventListener('click', () => {
        select.classList.toggle('open');
    });

    optionItems.forEach(option => {
        option.addEventListener('click', () => {
            const value = option.getAttribute('data-value');
            const text = option.textContent;

            // Update trigger text
            trigger.querySelector('span').textContent = text;

            // Update hidden select value
            if (hiddenSelect) {
                hiddenSelect.value = value;
                // Trigger change event on the hidden select
                hiddenSelect.dispatchEvent(new Event('change'));
            }

            // Update selected state
            optionItems.forEach(opt => opt.classList.remove('selected'));
            option.classList.add('selected');

            // Close dropdown
            select.classList.remove('open');
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!select.contains(e.target)) {
            select.classList.remove('open');
        }
    });
});



 function showService(serviceId) {
            // Hide all services
            const services = document.querySelectorAll('.service-details-content');
            services.forEach(s => s.style.display = 'none');

            // Show the clicked one
            document.getElementById(serviceId).style.display = 'block';
        }

        document.addEventListener('DOMContentLoaded', function() {
        // Typewriter configuration
        const typewriterConfig = {
          text: "AI-Power Tech",
          speed: 100, // typing speed in ms per character
          delay: 500, // initial delay before starting
          eraseDelay: 2000, // delay before erasing
          eraseSpeed: 50, // erasing speed in ms per character
          loop: true, // whether to loop the animation
          loopDelay: 1000 // delay before restarting
        };

        // Get the typewriter elements
        const typewriterText = document.querySelector('.typewriter-text');
        const typewriterCursor = document.querySelector('.typewriter-cursor');
        
        if (!typewriterText || !typewriterCursor) return;

        let isErasing = false;
        let currentText = '';
        let charIndex = 0;

        function typeWriter() {
          if (!isErasing) {
            // Typing phase
            if (charIndex < typewriterConfig.text.length) {
              currentText += typewriterConfig.text.charAt(charIndex);
              typewriterText.textContent = currentText;
              charIndex++;
              setTimeout(typeWriter, typewriterConfig.speed);
            } else {
              // Finished typing, wait and start erasing
              setTimeout(() => {
                isErasing = true;
                typeWriter();
              }, typewriterConfig.eraseDelay);
            }
          } else {
            // Erasing phase
            if (currentText.length > 0) {
              currentText = currentText.substring(0, currentText.length - 1);
              typewriterText.textContent = currentText;
              setTimeout(typeWriter, typewriterConfig.eraseSpeed);
            } else {
              // Finished erasing, reset and start over if looping
              isErasing = false;
              charIndex = 0;
              if (typewriterConfig.loop) {
                setTimeout(typeWriter, typewriterConfig.loopDelay);
              }
            }
          }
        }

        // Start the animation after initial delay
        setTimeout(typeWriter, typewriterConfig.delay);
      });

// Get elements
const fileInput = document.getElementById('FaqForm-upload');
const uploadBox = document.querySelector('.upload-box');
const selectedFileDisplay = document.getElementById('selected-file-display');
const fileNameSpan = selectedFileDisplay.querySelector('.file-name');
const removeFileBtn = selectedFileDisplay.querySelector('.remove-file');

// Click on upload box triggers file input
uploadBox.addEventListener('click', () => {
    fileInput.click();
});

// File input change handler
fileInput.addEventListener('change', function(e) {
    const file = this.files[0];
    
    if (file) {
        // Validate file type
        if (!file.name.toLowerCase().endsWith('.pdf')) {
            alert('Only PDF files are allowed.');
            this.value = '';
            return;
        }
        
        // Validate file size (10MB)
        const maxSize = 10 * 1024 * 1024;
        if (file.size > maxSize) {
            alert('File size exceeds 10MB limit.');
            this.value = '';
            return;
        }
        
        // Update UI
        fileNameSpan.textContent = file.name;
        selectedFileDisplay.classList.add('show');
        uploadBox.classList.add('file-selected');
    }
});

// Remove file handler
removeFileBtn.addEventListener('click', () => {
    fileInput.value = '';
    selectedFileDisplay.classList.remove('show');
    uploadBox.classList.remove('file-selected');
});

// Drag and drop functionality
uploadBox.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadBox.classList.add('drag-over');
});

uploadBox.addEventListener('dragleave', () => {
    uploadBox.classList.remove('drag-over');
});

uploadBox.addEventListener('drop', (e) => {
    e.preventDefault();
    uploadBox.classList.remove('drag-over');
    
    if (e.dataTransfer.files.length) {
        fileInput.files = e.dataTransfer.files;
        fileInput.dispatchEvent(new Event('change'));
    }
});