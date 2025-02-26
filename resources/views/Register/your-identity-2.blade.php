<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
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
            margin: 35px 144px 0px 125px;
            padding: 25px 25px 0px;
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
            gap: 25px;
            border-radius: 8px;
            background: var(--Surfaces-LVL-0, #F7FCFF);
        }

        .title {
            color: var(--Primary-Black, #2D2727);
            font-size: 27px;
            font-weight: 700;
        }

        .container-3 {
            display: flex;
            width: 714px;
            flex-direction: column;
            gap: 20px;
        }

        .identification-title {
            display: flex;
            margin-top: 35px;
            gap: 8px;
        }

        .identification-text {
            color: var(--Primary-Black-Text, #303030);
            font-size: 16px;
            font-weight: 500;
        }

        .optional-text {
            color: var(--Primary-Caption-Black-text, #585858);
            font-size: 16px;
            font-weight: 500;
        }

        .container-4, .container-5 {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-self: stretch;
        }

        .upload-dp-title {
            color: var(--Teal-LVL-12, #033);
            font-size: 14px;
            font-weight: 400;
            line-height: 24px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 25px;
        }

        /* Uploaded File Component */
        .uploaded-file-container {
            width: 100%;
            height: auto; /* Changed to auto to accommodate longer file names */
            display: flex;
            padding: 20px; /* Reduced padding to give more space */
            flex-direction: column;
            justify-content: center;
            gap: 10px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .file-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            flex-wrap: wrap; /* Allow wrapping for long file names */
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1; /* Allow file info to take up available space */
            min-width: 200px; /* Minimum width to ensure buttons don't overlap */
        }

        .file-icon {
            width: 24px;
            height: 24px;
        }

        .file-meta {
            display: flex;
            flex-direction: column;
            flex: 1; /* Allow file meta to take up available space */
        }

        .file-name {
            color: #2D2727;
            font-size: 16px;
            font-weight: 700;
            white-space: nowrap; /* Prevent text from wrapping */
            overflow: hidden; /* Hide overflow */
            text-overflow: ellipsis; /* Add ellipsis for long text */
        }

        .file-size {
            color: #848A90;
            font-size: 14px;
        }

        .file-actions {
            display: flex;
            gap: 15px;
            flex-shrink: 0; /* Prevent buttons from shrinking */
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

                    <div class="container-4">
                        <!-- Upload ID -->
                        <div id="upload-container-id">
                            <label class="upload-button-container">
                                <input type="file" id="uploadInputID" hidden>
                                <x-Buttons.upload-button id="uploadID">Upload ID</x-Buttons.upload-button>
                            </label>
                        </div>
                        <x-Reminders.file-format />
                    </div>

                    <div class="container-5">
                        <span class="upload-dp-title">Upload Display Picture (Optional)</span>

                        <!-- Upload Profile Picture -->
                        <div id="upload-container-dp">
                            <label class="upload-button-container">
                                <input type="file" id="uploadInputDP" hidden>
                                <x-Buttons.upload-button id="uploadProfilePic">Upload</x-Buttons.upload-button>
                            </label>
                        </div>
                        <x-Reminders.file-format />
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

    <script>
        function handleFileUpload(inputId, containerId) {
            const inputFile = document.getElementById(inputId);
            const uploadContainer = document.getElementById(containerId);

            inputFile.addEventListener('change', function () {
                const file = this.files[0];

                if (file) {
                    const fileURL = URL.createObjectURL(file);

                    // Replace Upload Button with File Preview
                    uploadContainer.innerHTML = `
                        <div class="uploaded-file-container">
                            <div class="file-details">
                                <div class="file-info">
                                    <img src="/assets/icons/Icon-Image.svg" alt="File Icon" class="file-icon">
                                    <div class="file-meta">
                                        <span class="file-name">${file.name}</span>
                                        <span class="file-size">${(file.size / 1024).toFixed(2)} KB</span>
                                    </div>
                                </div>
                                <div class="file-actions">
                                    <x-Buttons.primary-button onclick="window.open('${fileURL}', '_blank')">View</x-Buttons.primary-button>
                                    <x-Buttons.danger-lined-button onclick="resetUpload('${inputId}', '${containerId}')">Delete</x-Buttons.danger-lined-button>
                                </div>
                            </div>
                        </div>
                    `;
                }
            });
        }

        function resetUpload(inputId, containerId) {
            document.getElementById(containerId).innerHTML = `
                <label class="upload-button-container">
                    <input type="file" id="${inputId}" hidden>
                    <x-Buttons.upload-button id="${inputId}">Upload</x-Buttons.upload-button>
                </label>
            `;
            handleFileUpload(inputId, containerId);
        }

        // Initialize Upload Listeners
        handleFileUpload("uploadInputID", "upload-container-id");
        handleFileUpload("uploadInputDP", "upload-container-dp");
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>