@props(['id'])

<div id="upload-section-{{ $id }}">
    <x-Buttons.upload-button id="uploadButton-{{ $id }}">
        Upload
    </x-Buttons.upload-button>
    <input type="file" id="fileInput-{{ $id }}" class="d-none" accept=".jpg,.jpeg,.pdf,.tiff">
</div>

<div class="uploaded-file-container d-none" id="filePreview-{{ $id }}">
    <div class="file-details">
        <div class="file-info">
            <img src="/assets/icons/Icon-Image.svg" alt="File Icon" class="file-icon">
            <div class="file-meta">
                <span class="file-name" id="fileName-{{ $id }}">No file uploaded</span>
                <span class="file-size" id="fileSize-{{ $id }}">0 KB</span>
            </div>
        </div>
        <div class="file-actions">
            <x-Buttons.primary-button class="view-file" id="viewFile-{{ $id }}">View</x-Buttons.primary-button>
            <x-Buttons.danger-lined-button class="delete-file" id="deleteFile-{{ $id }}">Delete</x-Buttons.danger-lined-button>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    $('#uploadButton-{{ $id }}').on('click', function () {
        $('#fileInput-{{ $id }}').click();
    });

    $('#fileInput-{{ $id }}').on('change', function (event) {
        const file = event.target.files[0];
        if (!file) return;

        // Validation
        const allowedExtensions = ["image/jpeg", "application/pdf", "image/tiff"];
        if (!allowedExtensions.includes(file.type)) {
            alert("Invalid file type. Only JPG, PDF, and TIFF are allowed.");
            return;
        }
        if (file.size < 15000 || file.size > 5000000) {
            alert("File size must be between 15KB and 5MB.");
            return;
        }

        // Update UI
        const fileName = file.name.length > 30 ? file.name.substring(0, 27) + "..." : file.name;
        $('#fileName-{{ $id }}').text(fileName);
        $('#fileSize-{{ $id }}').text((file.size / 1024).toFixed(2) + " KB");
        
        // Generate preview URL
        const fileURL = URL.createObjectURL(file);
        $('#viewFile-{{ $id }}').data('file', fileURL);
        
        // Show preview and hide upload button
        $('#upload-section-{{ $id }}').addClass('d-none');
        $('#filePreview-{{ $id }}').removeClass('d-none');
    });

    $('#viewFile-{{ $id }}').on('click', function () {
        const fileURL = $(this).data('file');
        if (fileURL) {
            window.open(fileURL, '_blank');
        } else {
            alert('No file available to view.');
        }
    });

    $('#deleteFile-{{ $id }}').on('click', function () {
        if (confirm('Are you sure you want to delete this file?')) {
            $('#fileInput-{{ $id }}').val(''); // Clear input
            $('#upload-section-{{ $id }}').removeClass('d-none');
            $('#filePreview-{{ $id }}').addClass('d-none');
        }
    });
});
</script>
