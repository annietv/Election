$(document).ready(function () {
    $('#myForm').submit(function (e) {
        e.preventDefault(); // Prevent the default form submission

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: $(this).attr('action'), // Get the form action URL
            type: $(this).attr('method'), // Get the form method (POST)
            data: formData, // Set the form data

            success: function (response) {
                // Handle the success response
                alert(response.message);
                // Optionally, you can update the UI to display a success message or perform other actions
                // Reset the form
                $('#my-form')[0].reset();
                form.trigger('reset');
            },

            error: function (xhr) {
                // Handle the error response
                console.log(xhr.responseText);
                // Optionally, you can update the UI to display an error message or perform other actions
            }
        });
    });
});

// retriveving the data DOCUMENTS



$(document).ready(function () {
    $('#myChat').submit(function (e) {
        e.preventDefault(); // Prevent the default form submission

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: $(this).attr('action'), // Get the form action URL
            type: $(this).attr('method'), // Get the form method (POST)
            data: formData, // Set the form data

            success: function (response) {
                // Handle the success response
                alert(response.message);
                // Optionally, you can update the UI to display a success message or perform other actions
                // Reset the form
                $('#my-form')[0].reset();
                form.trigger('reset');
            },

            error: function (xhr) {
                // Handle the error response
                console.log(xhr.responseText);
                // Optionally, you can update the UI to display an error message or perform other actions
            }
        });
    });
});

// retriveving the data DOCUMENTS



