<style>
    html,
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        font-family: 'Inter', sans-serif;
        display: flex;
        box-sizing: border-box;
    }

    form#form4 {
        display: flex;
        width: 100%;
        height: 100%;
        padding: 0;
        margin: auto;
    }

    .identity-form4 {
        display: flex;
        height: 100%;
        width: 100%;
    }

    .stepper-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 20%;
        background: #f8f9fa;
        padding: 20px;
    }

    .form-container {
        display: flex;
        width: 784px;
        padding: 35px;
        flex-direction: column;
        gap: 25px;
        border-radius: 8px;
        background: var(--Surfaces-LVL-0, #fff);
        margin: auto;
    }

    .title {
        color: var(--Primary-Black, #2D2727);
        font-family: Inter;
        font-size: 27px;
        font-weight: 700;
    }

    .container-2 {
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: center;
        gap: 35px;
    }

    .container-3 {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 20px;
    }

    .button-group {
        display: flex;
        justify-content: space-between;
        width: 100%;
        gap: 25px;
    }
</style>

<body>
    <form id="form4" style="display: none;">
        <div class="identity-form4">
            <div class="stepper-container">
                <x-stepper :currentStep="session('currentStep', 2)" />
            </div>
            <div class="form-container">
                <h1 class="title">Create Account as Policyholder</h1>

                <div class="container-2">
                    <x-Register.form-title title="Your identity" />

                    <div class="container-3">
                        <div class="identification-title">
                            <span class="identification-text">Identification</span>
                            <span class="optional-text">(Optional)</span>
                        </div>

                        <div class="container-4">
                            <x-file-preview id="uploadID" buttonText="Upload ID" />
                            <x-Reminders.file-format />
                        </div>

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
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            // Initialize file upload functions
            function initializeFileUpload(id) {
                const uploadButton = $(`#uploadButton-${id}`);
                const fileInput = $(`#fileInput-${id}`);
                const filePreview = $(`#filePreview-${id}`);
                const fileName = $(`#fileName-${id}`);
                const fileSize = $(`#fileSize-${id}`);
                const viewFileButton = $(`#viewFile-${id}`);
                const deleteFileButton = $(`#deleteFile-${id}`);

                uploadButton.on('click', function (e) {
                    e.preventDefault();
                    fileInput.trigger('click');
                });

                fileInput.on('change', function (e) {
                    e.preventDefault();
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

                        viewFileButton.off('click').on('click', function () {
                            const fileURL = URL.createObjectURL(file);
                            window.open(fileURL, '_blank');
                        });

                        deleteFileButton.off('click').on('click', function (e) {
                            e.preventDefault();
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

            // Handle the back button click
            $('#backForm4').on('click', function () {
                $('#form4').hide();
                $('#form3').show();
            });

            // Handle the next button click
            $('#nextForm4').on('click', function () {
                let form3Data = JSON.parse(sessionStorage.getItem('form3Data')) || {};
                let form4Data = {
                    uploadID: $('#fileInput-uploadID').val() ? true : false,
                    uploadDisplayPicture: $('#fileInput-uploadDisplayPicture').val() ? true : false
                };

                let combinedData = {
                    ...form3Data,
                    ...form4Data
                };

                $('#form4').hide();
                $('#form5').show();
            });

            if (sessionStorage.getItem("form4Data")) {
                let formData = JSON.parse(sessionStorage.getItem("form4Data"));
            }
        });
    </script>
</body>

</html>