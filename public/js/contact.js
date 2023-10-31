function validateContact(e) {
    e.preventDefault();

    const contactValidationMessage = $("#contact-validation-message");
    const contactSubmitButton = $("#contact-submit-button");

    contactValidationMessage.text("");

    // First Name
    const inputFirstName = $("#first-name");
    let valueFirstName = inputFirstName.val();
    const errorFirstName = $("#error-first-name");
    let validFirstName = false;

    if (valueFirstName == "") {
        errorFirstName.removeClass("hidden").text("First Name is required");
        inputFirstName
            .removeClass("border-custom-white")
            .addClass("border-red-500");
        validFirstName = false;
    } else {
        errorFirstName.text("").addClass("hidden");
        inputFirstName
            .removeClass("border-red-500")
            .addClass("border-custom-white");
        validFirstName = true;
    }

    // Last Name
    const inputLastName = $("#last-name");
    let valueLastName = inputLastName.val();
    const errorLastName = $("#error-last-name");
    let validLastName = false;

    if (valueLastName == "") {
        errorLastName.removeClass("hidden").text("Last Name is required");
        inputLastName
            .removeClass("border-custom-white")
            .addClass("border-red-500");
        validLastName = false;
    } else {
        errorLastName.text("").addClass("hidden");
        inputLastName
            .removeClass("border-red-500")
            .addClass("border-custom-white");
        validLastName = true;
    }

    // Email
    const inputEmail = $("#email");
    let valueEmail = inputEmail.val();
    const errorEmail = $("#error-email");
    const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    let validEmail = false;

    if (valueEmail == "") {
        errorEmail.removeClass("hidden").text("Email is required");
        inputEmail
            .removeClass("border-custom-white")
            .addClass("border-red-500");
        validEmail = false;
    } else {
        if (regexEmail.test(valueEmail)) {
            errorEmail.text("").addClass("hidden");
            inputEmail
                .removeClass("border-red-500")
                .addClass("border-custom-white");
            validEmail = true;
        } else {
            errorEmail.removeClass("hidden").text("Email is not valid");
            inputEmail
                .removeClass("border-custom-white")
                .addClass("border-red-500");
            validEmail = false;
        }
    }

    // Phone
    const inputPhone = $("#phone");
    let valuePhone = inputPhone.val();
    const errorPhone = $("#error-phone");
    const regexPhone = /^\d+$/;
    let validPhone = false;

    if (valuePhone == "") {
        errorPhone.removeClass("hidden").text("Phone is required");
        inputPhone
            .removeClass("border-custom-white")
            .addClass("border-red-500");
        validPhone = false;
    } else {
        if (regexPhone.test(valuePhone)) {
            errorPhone.text("").addClass("hidden");
            inputPhone
                .removeClass("border-red-500")
                .addClass("border-custom-white");
            validPhone = true;
        } else {
            errorPhone.removeClass("hidden").text("Phone is not valid");
            inputPhone
                .removeClass("border-custom-white")
                .addClass("border-red-500");
            validPhone = false;
        }
    }

    // Subject
    const inputSubject = $("#subject");
    let valueSubject = inputSubject.val();
    const errorSubject = $("#error-subject");
    let validSubject = false;

    if (valueSubject == "") {
        errorSubject.removeClass("hidden").text("Subject is required");
        inputSubject
            .removeClass("border-custom-white")
            .addClass("border-red-500");
        validSubject = false;
    } else {
        errorSubject.text("").addClass("hidden");
        inputSubject
            .removeClass("border-red-500")
            .addClass("border-custom-white");
        validSubject = true;
    }

    // Message
    const inputMessage = $("#message");
    let valueMessage = inputMessage.val();
    const errorMessage = $("#error-message");
    let validMessage = false;

    if (valueMessage == "") {
        errorMessage.removeClass("hidden").text("Message is required");
        inputMessage
            .removeClass("border-custom-white")
            .addClass("border-red-500 border");
        validMessage = false;
    } else {
        errorMessage.text("").addClass("hidden");
        inputMessage
            .removeClass("border-red-500 border")
            .addClass("border-custom-white");
        validMessage = true;
    }

    if (
        validFirstName &&
        validLastName &&
        validEmail &&
        validPhone &&
        validSubject &&
        validMessage
    ) {
        // document.querySelector("#form-contact").submit();
        const formData = $("#form-contact").serialize();

        contactSubmitButton
            .html(
                "Sending <svg class='animate-spin mr-3 w-4 sm:w-[1.125rem] md:w-5 aspect-square' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><circle class='opacity-25' cx='12' cy='12' r='10' stroke='currentColor' stroke-width='4'></circle><path class='opacity-75' fill='currentColor' d='M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z'></path></svg>"
            )
            .addClass("opacity-50 pointer-events-none");

        $.ajax({
            type: "POST",
            url: "/contact-form", // Update this with the correct route
            data: formData,
            success: function (response) {
                // Handle a successful response (e.g., show a success message)
                if (response.success) {
                    // Clear form fields if needed
                    $("#form-contact")[0].reset();

                    // Display a success message to the user
                    contactValidationMessage
                        .text(response.message)
                        .css("color", "rgb(34, 197, 94");

                    // Change submit button to default
                    contactSubmitButton
                        .html(
                            "Send <svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='w-4 sm:w-[1.125rem] md:w-5 aspect-square' viewBox='0 0 16 16' stroke-width='0.5' stroke='currentColor'><path d='M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z' /></svg>"
                        )
                        .removeClass("opacity-50 pointer-events-none");
                } else {
                    // Handle errors if necessary
                    contactValidationMessage
                        .text(
                            "An error occurred while submitting the form, please try again."
                        )
                        .css("color", "rgb(239, 68, 68)");

                    // Change submit button to default
                    contactSubmitButton
                        .html(
                            "Send <svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='w-4 sm:w-[1.125rem] md:w-5 aspect-square' viewBox='0 0 16 16' stroke-width='0.5' stroke='currentColor'><path d='M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z' /></svg>"
                        )
                        .removeClass("opacity-50 pointer-events-none");
                }
            },
            error: function () {
                // Handle AJAX errors if necessary
                contactValidationMessage
                    .text(
                        "An error occurred while submitting the form, please try again."
                    )
                    .css("color", "rgb(239, 68, 68)");

                // Change submit button to default
                contactSubmitButton
                    .html(
                        "Send <svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='w-4 sm:w-[1.125rem] md:w-5 aspect-square' viewBox='0 0 16 16' stroke-width='0.5' stroke='currentColor'><path d='M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z' /></svg>"
                    )
                    .removeClass("opacity-50 pointer-events-none");
            },
        });
    }
}
