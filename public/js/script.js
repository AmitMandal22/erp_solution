$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#employeeTable").DataTable();
    $("#companyTable").DataTable();

    // update company details
    $("#edit_company_form").on("submit", function (event) {
        event.preventDefault();

        var formData = new FormData($(this)[0]);

        // Send AJAX request
        $.ajax({
            url: "/update-company-details",
            method: "POST",
            data: formData,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {
                window.location.reload();
                alert("Company updated successfully!");
            },
            error: function (xhr, status, error) {
                // Handle validation errors or other errors
                if (xhr.status == 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $("." + key + "_err").text(value[0]); // Show error message
                    });
                } else {
                    alert("An error occurred. Please try again later.");
                }
            },
        });
    });

    //create new company
    $("#create_new_company").on("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        // Serialize form data
        var formData = new FormData($(this)[0]);

        // Send AJAX request
        $.ajax({
            url: "/add-company",
            method: "POST",
            data: formData,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {
                // Reset form fields
                $("#create_new_company")[0].reset();
                // Show success message or handle success response
                alert("Company created successfully!");
                // window.location.href = "/companies";
            },
            error: function (xhr, status, error) {
                // Handle validation errors or other errors
                if (xhr.status == 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $("." + key + "_err").text(value[0]); // Show error message
                    });
                } else {
                    alert("An error occurred. Please try again later.");
                }
            },
        });
    });

    // Create new employee
    $("#create_new_employee").on("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        // Serialize form data
        var formData = new FormData($(this)[0]);

        // Send AJAX request
        $.ajax({
            url: "/add-employee",
            method: "POST",
            data: formData,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {
                // Reset form fields
                $("#create_new_employee")[0].reset();
                // Show success message or handle success response
                alert("Employee created successfully!");
                // window.location.href = "/employees";
            },
            error: function (xhr, status, error) {
                // Handle validation errors or other errors
                if (xhr.status == 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        if (
                            key == "password" ||
                            key == "password_confirmation"
                        ) {
                            // Show error message for password and confirm_password
                            $(".password_err").text(value[0]);
                            $(".password_confirmation_err").text(value[0]);
                        } else {
                            // Show error message for other fields
                            $("." + key + "_err").text(value[0]);
                        }
                    });
                } else {
                    alert("An error occurred. Please try again later.");
                }
            },
        });
    });

    //Delete employee
    $(document).on("click", ".delete", function (e) {
        e.preventDefault();

        const employee_id = $(this).data("employee_id");

        if (employee_id) {
            if (confirm("Are you sure you want to delete this employee?")) {
                $.ajax({
                    url: "/delete-employee/" + employee_id,
                    type: "POST",
                    success: function (response) {
                        // Reload the page after successful deletion
                        location.reload();
                    },
                });
            }
        }
    });

    //Edit employee
    $(document).on("click", ".edit", function (e) {
        e.preventDefault();

        const employee_id = $(this).data("employee_id");

        if (employee_id) {
            $.ajax({
                url: "/edit-employee-details",
                type: "POST",
                data: {
                    id: employee_id,
                },
                success: function (response) {
                    //
                },
                error: function (xhr, status, error) {
                    // Handle errors here
                },
            });
        }
    });

    //
});
