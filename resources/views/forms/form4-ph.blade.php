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
        html,
        body {
            margin: 0px;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: row;
            box-sizing: border-box;
        }

        .container-1 {
            display: flex;
            width: 784px;
            padding: 35px;
            flex-direction: column;
            align-items: flex-start;
            gap: 25px;
            border-radius: 8px;
            background: var(--Surfaces-LVL-0, #fff);
        }

        .title {
            color: var(--Primary-Black, #2D2727);
            font-family: Inter;
            font-size: 27px;
            font-weight: 700;
        }

        .container-2 {
            display: flex;
            width: 706px;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
        }

        .container-3 {
            display: flex;
            width: 714px;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }

        .identification-title {
            display: flex;
            gap: 8px;
        }

        .identification-text {
            color: var(--Primary-Black-Text, #303030);
            font-family: Inter;
            font-size: 16px;
            font-weight: 500;
        }

        .optional-text {
            color: var(--Primary-Caption-Black-text, #585858);
            font-family: Inter;
            font-size: 16px;
            font-weight: 500;
        }

        .container-4 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            gap: 10px;
            align-self: stretch;
        }

        .container-5 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            align-self: stretch;
        }

        .upload-dp-title {
            color: var(--Teal-LVL-12, #033);
            font-family: Inter;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px;
        }

        .container-6 {
            display: flex;
            width: 706px;
            flex-direction: column;
            align-items: flex-start;
            gap: 25px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 25px;
        }

        /* New file-preview styles */
        .file-preview-container {
            width: 100%;
            height: auto;
            display: flex;
            padding: 30px 20px;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            gap: 10px;
            align-self: stretch;
            border-radius: 10px;
            background: #ECF5FA;
        }

        .file-preview-content {
            display: flex;
            align-items: center;
            gap: 166px;
            align-self: stretch;
        }

        .file-icon-container {
            display: flex;
            align-items: flex-start;
            gap: 27px;
        }

        .file-details-container {
            display: flex;
            width: 271px;
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .file-name {
            align-self: stretch;
            color: #2D2727;
            font-family: Inter;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 24px;
        }

        .file-size {
            align-self: stretch;
            color: #848A90;
            font-family: Inter;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
        }

        .file-actions-container {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .d-none {
            display: none !important;
        }

        .identity-form2 {
            display: flex;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <form id="form4" >
        <div class="identity-form2" style="display: none;">
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
                                <x-file-preview id="uploadID" buttonText="Upload ID" />
                                <x-Reminders.file-format />
                            </div>

                            <!-- Upload Display Picture Section -->
                            <div class="container-5">
                                <span class="upload-dp-title">Upload Display Picture (Optional)</span>
                                <x-file-preview id="uploadDisplayPicture" buttonText="Upload" />
                                <x-Reminders.file-format />
                            </div>
                        </div>

                        <div class="container-6">
                            <div class="button-group">
                                <x-buttons.secondary-button id="backForm4">
                                    Back
                                </x-buttons.secondary-button>

                                <x-buttons.primary-button id="nextForm4">
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
                            fileInput.val(''); // Clear the file input
                            filePreview.addClass('d-none'); // Hide the file preview
                            uploadButton.parent().removeClass('d-none'); // Show the upload button
                            fileName.text('No file uploaded'); // Reset file name
                            fileSize.text('0 KB'); // Reset file size
                        });
                    }
                });
            }

            // Initialize file upload for both sections
            initializeFileUpload('uploadID');
            initializeFileUpload('uploadDisplayPicture');


        });
    </script>
</body>

</html>
