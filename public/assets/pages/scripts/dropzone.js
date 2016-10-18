Dropzone.options.myDropzone = {
        autoProcessQueue: false,
        uploadMultiple: false,
        maxFilezise: 10,
        maxFiles: 2,

        init: function() {
            var submitBtn = document.querySelector("#foto-update");
            myDropzone = this;

            submitBtn.addEventListener("click", function(e){
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });
            this.on("addedfile", function(file) {
                // alert("file uploaded");
            });

            this.on("complete", function(file) {
                myDropzone.removeFile(file);
                location.reload();
            });

            this.on("success",
                myDropzone.processQueue.bind(myDropzone)
            );
        }
    };