<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account as Policyholder</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* Your existing CSS */
    </style>
</head>

<body>
    <form id="form4" action="{{ route('policyholder.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="identity-form2">
            <x-stepper :currentStep="session('currentStep', 2)" />

            <div class="content-container">
                <div class="container-1">
                    <h1 class="title">Create Account as Policyholder</h1>

                    <div class="container-2">
                        <x-Register.form-title title="Your identity" />

                        <div class="container-3">
                            <div class="identification-title">
                                <span class="identification-text">Identification</span>
                                <span class="optional-text">(Optional)</span>
                            </div>

                            <!-- Upload ID Section -->
                            <div class="container-4">
                                <x-file-preview id="uploadID" name="uploadID" buttonText="Upload ID" />
                                <x-Reminders.file-format />
                            </div>

                            <!-- Upload Display Picture Section -->
                            <div class="container-5">
                                <span class="upload-dp-title">Upload Display Picture (Optional)</span>
                                <x-file-preview id="uploadDisplayPicture" name="uploadDisplayPicture" buttonText="Upload" />
                                <x-Reminders.file-format />
                            </div>
                        </div>

                        <div class="container-6">
                            <div class="button-group">
                                <x-buttons.secondary-button id="backForm4">
                                    Back
                                </x-buttons.secondary-button>

                                <x-buttons.primary-button type="submit" id="nextForm4">
                                    Next
                                </x-buttons.primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            function initializeFileUpload(id) {
                const uploadButton = $(`#uploadButton-${id}`);
                const fileInput = $(`#fileInput-${id}`);
                const filePreview = $(`#filePreview-${id}`);
                const fileName = $(`#fileName-${id}`);
                const fileSize = $(`#fileSize-${id}`);
                const viewFileButton = $(`#viewFile-${id}`);
                const deleteFileButton = $(`#deleteFile-${id}`);

                uploadButton.on('click', function() {
                    fileInput.trigger('click');
                });

                fileInput.on('change', function() {
                    const file = this.files[0];
                    if (file) {
                        if (file.size < 15 * 1024 || file.size > 5 * 1024 * 1024) {
                            alert('File size must be between 15KB and 5MB.');
                            return;
                        }

                        fileName.text(file.name);
                        fileSize.text((file.size / 1024).toFixed(2) + ' KB');

                        filePreview.removeClass('d-none');
                        uploadButton.parent().addClass('d-none');

                        viewFileButton.off('click').on('click', function() {
                            const fileURL = URL.createObjectURL(file);
                            window.open(fileURL, '_blank');
                        });

                        deleteFileButton.off('click').on('click', function() {
                            fileInput.val('');
                            filePreview.addClass('d-none');
                            uploadButton.parent().removeClass('d-none');
                            fileName.text('No file uploaded');
                            fileSize.text('0 KB');
                        });
                    }
                });
            }

            initializeFileUpload('uploadID');
            initializeFileUpload('uploadDisplayPicture');
        });
    </script>
</body>

</html>