const registrationSubmit = (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value.trim();
    const fullName = document.getElementById('full-name').value.trim();
    const password = document.getElementById('password').value.trim();
    let result = true;
    let errors = [];

    // emptying previous errors
    document.getElementById('error-msg').innerHTML = '';

    const re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!re.test(email)) {
        result = false;
        errors.push("Email is not valid or is empty.");
    }

    if (fullName.length < 3 || fullName.length > 50 || fullName.match(/[0-9]/g) !== null) {
        result = false;
        errors.push("Full name should be between 3 and 50 characters and should not include a number.");
    }

    if (password.length < 8 || password.match(/[0-9]/g) === null
        || password.match(/[A-Z]/g) === null || password.match(/[a-z]/g) === null
        || password.includes('_' || '@' || '!')) {
        result = false;
        errors.push('Password should be at least 8 characters long and must contain lowercase letter, uppercase letter, number and special character (@, _ or !).');
    } else if (password.length !== document.getElementById('confirm-password').value.trim()) {
        result = false;
        errors.push('Passwords do not match.');
    }

    // file validation needs to be done

    if (errors !== "") {
        document.getElementById('error-block').style.display = "block";
        document.getElementById('error-msg').innerHTML += errors.join('<br>');
    }

    return result;
}

const loginSubmit = (e) => {
    e.preventDefault();
    let result = true;

    // emptying previous errors
    document.getElementById('error-msg').innerHTML = '';

    if (document.getElementById('email').value.trim() === "" || document.getElementById('password').value.trim() === "") {
        result = false;
        document.getElementById('error-block').style.display = "block";
        document.getElementById('error-msg').innerHTML += 'Fields are empty.';
    }
    return result;
}