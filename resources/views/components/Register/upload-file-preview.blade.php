@props(['id', 'fileName' => 'No file uploaded', 'fileSize' => '0 KB', 'fileData' => ''])

<div class="uploaded-file-container" id="{{ $id }}">
    <div class="file-details">
        <div class="file-info">
            <img src="/assets/icons/Icon-Image.svg" alt="File Icon" class="file-icon">
            <div class="file-meta">
                <span class="file-name">{{ $fileName }}</span>
                <span class="file-size">{{ $fileSize }}</span>
            </div>
        </div>
        <div class="file-actions">
            <x-Buttons.primary-button class="view-file" data-file="{{ $fileData }}">View</x-Buttons.primary-button>
            <x-Buttons.danger-lined-button class="delete-file" data-target="{{ $id }}">Delete</x-Buttons.danger-lined-button>
        </div>
    </div>
</div>

<style>
.uploaded-file-container {
    width: 100%;
    height: 116px;
    display: flex;
    padding: 30px 20px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 10px;
}

.file-details {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.file-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.file-icon {
    width: 24px;
    height: 24px;
}

.file-meta {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.file-name {
    color: #2D2727;
    font-size: 16px;
    font-weight: 700;
}

.file-size {
    color: #848A90;
    font-size: 14px;
    font-weight: 400;
}

.file-actions {
    display: flex;
    gap: 10px;
}
</style>

<script>
$(document).on('click', '.view-file', function() {
    const fileURL = $(this).data('file');
    if (fileURL) {
        window.open(fileURL, '_blank');
    } else {
        alert('No file available to view.');
    }
});

$(document).on('click', '.delete-file', function() {
    const targetId = $(this).data('target');
    if (confirm('Are you sure you want to delete this file?')) {
        $('#' + targetId).remove();
        // Optionally, you can send an AJAX request to delete the file from the server here.
    }
});
</script>