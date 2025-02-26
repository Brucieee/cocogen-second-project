<div class="uploaded-file-container" id="{{ $id }}">
    <!-- File Input -->
    <label class="upload-button-container">
        <input type="file" id="fileInput-{{ $id }}" hidden>
        <x-Buttons.upload-button id="uploadButton-{{ $id }}">Upload</x-Buttons.upload-button>
    </label>

    <!-- File Preview -->
    <div class="file-details" style="display: none;">
        <div class="file-info">
            <img src="/assets/icons/Icon-Image.svg" alt="File Icon" class="file-icon">
            <div class="file-meta">
                <span class="file-name">No file uploaded</span>
                <span class="file-size">0 KB</span>
            </div>
        </div>
        <div class="file-actions">
            <x-Buttons.primary-button class="view-file">View</x-Buttons.primary-button>
            <x-Buttons.danger-lined-button class="delete-file">Delete</x-Buttons.danger-lined-button>
        </div>
    </div>
</div>

<style>
.uploaded-file-container {
    width: 100%;
    height: auto; /* Adjust height dynamically */
    display: flex;
    padding: 20px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: #fff;
}

.file-details {
    display: flex;
    align-items: center;
    gap: 20px;
    width: 100%;
}

.file-info {
    display: flex;
    align-items: center;
    gap: 15px;
    flex: 1;
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
    font-family: Inter, sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 200px; /* Adjust as needed */
}

.file-size {
    color: #848A90;
    font-family: Inter, sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 24px;
}

.file-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.upload-button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    let fileStorage = {}; // Store file data globally for each uploaded file

    function truncateFileName(fileName, maxLength = 36) {
        if (fileName.length > maxLength) {
            return fileName.substring(0, maxLength) + '...';
        }
        return fileName;
    }

    function handleFileUpload(containerId, fileInput) {
        let file = fileInput.files[0];

        if (file) {
            let fileName = truncateFileName(file.name);
            let fileSize = (file.size / 1024).toFixed(2) + " KB";
            let fileURL = URL.createObjectURL(file);

            // Store file object in global storage
            fileStorage[containerId] = { file, fileURL };

            // Update UI with file details
            $(`#${containerId} .file-details`).show();
            $(`#${containerId} .upload-button-container`).hide();
            $(`#${containerId} .file-name`).text(fileName);
            $(`#${containerId} .file-size`).text(fileSize);
            $(`#${containerId} .view-file`).prop('disabled', false);
            $(`#${containerId} .delete-file`).prop('disabled', false);
        }
    }

    // Handle file input change
    $(`#fileInput-{{ $id }}`).on("change", function () {
        handleFileUpload("{{ $id }}", this);
    });

    // Handle view button click
    $(`#{{ $id }}`).on("click", ".view-file", function () {
        let fileData = fileStorage["{{ $id }}"];

        if (fileData) {
            window.open(fileData.fileURL, "_blank");
        }
    });

    // Handle delete button click
    $(`#{{ $id }}`).on("click", ".delete-file", function () {
        // Clear stored file
        delete fileStorage["{{ $id }}"];

        // Reset UI
        $(`#{{ $id }} .file-details`).hide();
        $(`#{{ $id }} .upload-button-container`).show();
        $(`#{{ $id }} .file-name`).text("No file uploaded");
        $(`#{{ $id }} .file-size`).text("0 KB");
        $(`#{{ $id }} .view-file`).prop('disabled', true);
        $(`#{{ $id }} .delete-file`).prop('disabled', true);

        $(`#fileInput-{{ $id }}`).val("");
    });
});
</script>