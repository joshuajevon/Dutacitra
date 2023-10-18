function validateContact(e) {
    e.preventDefault();

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
        document.querySelector("#form-contact").submit();
    }
}
