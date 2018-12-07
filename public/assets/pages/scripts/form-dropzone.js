var FormDropzone = function () {


    return {
        //main function to initiate the module
        init: function () {

            Dropzone.options.myDropzone = {
                dictDefaultMessage: "",
                maxFilesize: 5,
                dictFileTooBig: 'El archivo es muy grande.',
                dictMaxFilesExceeded: 'Se alcanzó la cantidad máxima de archivos.',
                maxFiles: 10,
                url: '/upload-post',
                headers: {
                    'x-csrf-token': document.querySelectorAll('meta[name=csrf-token]')[0].getAttributeNode('content').value,
                },
                init: function() {
                    this.on("addedfile", function(file) {
                        // Create the remove button
                        var removeButton = Dropzone.createElement("<a href='javascript:;'' class='btn red btn-sm btn-block'>Eliminar</a>");

                        // Capture the Dropzone instance as closure.
                        var _this = this;

                        // Listen to the click event
                        removeButton.addEventListener("click", function(e) {
                            // Make sure the button click doesn't submit the form:
                            e.preventDefault();
                            e.stopPropagation();

                            // Remove the file preview.
                            _this.removeFile(file);
                            // If you want to the delete the file on the server as well,
                            // you can  do the AJAX request here.

                        });

                        // Add the button to the file preview element.
                        file.previewElement.appendChild(removeButton);
                    });

                    this.on("removedfile", function(file) {

                        $.ajax({
                            type: 'POST',
                            url: '/upload/delete',
                            data: {id: file.name , _token: $('#csrf-token').val()},
                            dataType: 'html',
                            success: function(data){
                                var rep = JSON.parse(data);
                            }
                        });

                    } );


                    this.on("error", function(file, response){
                        if (response.error == true) {
                            $(file.previewElement).find('.dz-error-message').text(response.message);
                        }


                    });


                    var thisDropzone = this;

                    $.getJSON('/getserverimages', function(data) {

                        $.each(data.images, function(key,value){
                            var mockFile = { name: value.server, size: value.size, dataURL: value.dataURL}; // here we get the file name and size as response

                            thisDropzone.emit("addedfile", mockFile);

                            thisDropzone.createThumbnailFromUrl(mockFile,
                                thisDropzone.options.thumbnailWidth, thisDropzone.options.thumbnailHeight,
                                thisDropzone.options.thumbnailMethod, true, function (thumbnail) {
                                    thisDropzone.emit('thumbnail', mockFile, thumbnail);
                                });

                            // Make sure that there is no progress bar, etc...
                            thisDropzone.emit("complete", mockFile);

                        });

                    });

                }
            }
        }
    };
}();

jQuery(document).ready(function() {
    FormDropzone.init();
});