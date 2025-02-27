<head>
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

        .content-container {
            width: 756px;
            height: 600px;
            margin: auto;
            padding: 25px;
            padding-bottom: 0px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            position: relative;
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

        /* Upload File Preview Styles */
        .uploaded-file-container {
            display: none; /* Hidden by default */
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
        }

        .file-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .file-icon {
            width: 24px;
            height: 24px;
        }

        .file-meta {
            display: flex;
            flex-direction: column;
        }

        .file-name {
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }

        .file-size {
            font-size: 12px;
            color: #666;
        }

        .file-actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>
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
                        <x-Buttons.upload-button id="uploadID">Upload ID</x-Buttons.upload-button>
                        <x-Reminders.file-format />
                        <!-- Upload File Preview Component for ID -->
                        <div id="upload-section-ID">
                            <input type="file" id="fileInput-ID" class="d-none" accept=".jpg,.jpeg,.pdf,.tiff">
                        </div>
                        <div class="uploaded-file-container" id="filePreview-ID">
                            <div class="file-details">
                                <div class="file-info">
                                    <img src="/assets/icons/Icon-Image.svg" alt="File Icon" class="file-icon">
                                    <div class="file-meta">
                                        <span class="file-name" id="fileName-ID">No file uploaded</span>
                                        <span class="file-size" id="fileSize-ID">0 KB</span>
                                    </div>
                                </div>
                                <div class="file-actions">
                                    <x-Buttons.primary-button class="view-file" id="viewFile-ID">View</x-Buttons.primary-button>
                                    <x-Buttons.danger-lined-button class="delete-file" id="deleteFile-ID">Delete</x-Buttons.danger-lined-button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Display Picture Section -->
                    <div class="container-5">
                        <span class="upload-dp-title">Upload Display Picture (Optional)</span>
                        <x-Buttons.upload-button id="uploadProfilePic">Upload</x-Buttons.upload-button>
                        <x-Reminders.file-format />
                        <!-- Upload File Preview Component for Profile Picture -->
                        <div id="upload-section-ProfilePic">
                            <input type="file" id="fileInput-ProfilePic" class="d-none" accept=".jpg,.jpeg,.png">
                        </div>
                        <div class="uploaded-file-container" id="filePreview-ProfilePic">
                            <div class="file-details">
                                <div class="file-info">
                                    <img src="/assets/icons/Icon-Image.svg" alt="File Icon" class="file-icon">
                                    <div class="file-meta">
                                        <span class="file-name" id="fileName-ProfilePic">No file uploaded</span>
                                        <span class="file-size" id="fileSize-ProfilePic">0 KB</span>
                                    </div>
                                </div>
                                <div class="file-actions">
                                    <x-Buttons.primary-button class="view-file" id="viewFile-ProfilePic">View</x-Buttons.primary-button>
                                    <x-Buttons.danger-lined-button class="delete-file" id="deleteFile-ProfilePic">Delete</x-Buttons.danger-lined-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-6">
                    <div class="button-group">
                        <x-Buttons.secondary-button>Continue later</x-Buttons.secondary-button>
                        <x-Buttons.primary-button>Next</x-Buttons.primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Upload File Preview Script -->
    <script>
        $(document).ready(function () {
            // Function to handle file upload and preview
            function handleFileUpload(uploadButtonId, fileInputId, filePreviewId, fileNameId, fileSizeId, viewFileId, deleteFileId) {
                $(uploadButtonId).on('click', function () {
                    $(fileInputId).click();
                });

                $(fileInputId).on('change', function (event) {
                    const file = event.target.files[0];
                    if (!file) return;

                    // Validation
                    const allowedExtensions = ["image/jpeg", "application/pdf", "image/tiff", "image/png"];
                    if (!allowedExtensions.includes(file.type)) {
                        alert("Invalid file type. Only JPG, PNG, PDF, and TIFF are allowed.");
                        return;
                    }
                    if (file.size < 15000 || file.size > 5000000) {
                        alert("File size must be between 15KB and 5MB.");
                        return;
                    }

                    // Update UI
                    const fileName = file.name.length > 30 ? file.name.substring(0, 27) + "..." : file.name;
                    $(fileNameId).text(fileName);
                    $(fileSizeId).text((file.size / 1024).toFixed(2) + " KB");

                    // Generate preview URL
                    const fileURL = URL.createObjectURL(file);
                    $(viewFileId).data('file', fileURL);

                    // Show preview and hide upload button
                    $(uploadButtonId).closest('.container-4, .container-5').find('.uploaded-file-container').removeClass('d-none');
                });

                $(viewFileId).on('click', function () {
                    const fileURL = $(this).data('file');
                    if (fileURL) {
                        window.open(fileURL, '_blank');
                    } else {
                        alert('No file available to view.');
                    }
                });

                $(deleteFileId).on('click', function () {
                    if (confirm('Are you sure you want to delete this file?')) {
                        $(fileInputId).val(''); // Clear input
                        $(uploadButtonId).closest('.container-4, .container-5').find('.uploaded-file-container').addClass('d-none');
                    }
                });
            }

            // Initialize for ID upload
            handleFileUpload(
                '#uploadID',
                '#fileInput-ID',
                '#filePreview-ID',
                '#fileName-ID',
                '#fileSize-ID',
                '#viewFile-ID',
                '#deleteFile-ID'
            );

            // Initialize for Profile Picture upload
            handleFileUpload(
                '#uploadProfilePic',
                '#fileInput-ProfilePic',
                '#filePreview-ProfilePic',
                '#fileName-ProfilePic',
                '#fileSize-ProfilePic',
                '#viewFile-ProfilePic',
                '#deleteFile-ProfilePic'
            );
        });
    </script>
</body>