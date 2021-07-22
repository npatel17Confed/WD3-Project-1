const registrationSubmit = () => {

  const email = document.getElementById("email").value.trim();
  const fullName = document.getElementById("full-name").value.trim();
  const password = document.getElementById("password").value.trim();
  let result = true;
  let errors = [];

  // emptying previous errors
  document.getElementById("error-block").style.display = "none";
  document.getElementById("error-msg").innerHTML = "";

  const re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!re.test(email)) {
    result = false;
    errors.push("Email is not valid or is empty.");
  }

  if (
    fullName.length < 3 ||
    fullName.length > 50 ||
    fullName.match(/[0-9]/g) !== null
  ) {
    result = false;
    errors.push(
      "Full name should be between 3 and 50 characters and should not include a number."
    );
  }

  if (
    password.length < 8 ||
    password.match(/[0-9]/g) === null ||
    password.match(/[A-Z]/g) === null ||
    password.match(/[a-z]/g) === null ||
    password.includes("_" || "@" || "!")
  ) {
    result = false;
    errors.push(
      "Password should be at least 8 characters long and must contain lowercase letter, uppercase letter, number and special character (@, _ or !)."
    );
  } else if (
    document.getElementById("password").value.trim() !==
    document.getElementById("confirm-password").value.trim()
  ) {
    result = false;
    errors.push("Passwords do not match.");
  }

  // file validation needs to be done
  const image = document.getElementById("fileToUpload").value.split('.');
  console.log('image name >> ', image);
  if (document.getElementById("fileToUpload").value !== "" && image[image.length - 1] !== "png" && image[image.length - 1] !== "jpg") {
    result = false;
    errors.push("Image must be a jpg or png file.");
  }

  if (errors.length !== 0) {
    document.getElementById("error-block").style.display = "block";
    document.getElementById("error-msg").innerHTML += errors.join("<br>");
  }

  return result;
};

const loginSubmit = () => {

  let result = true;

  // emptying previous errors
  document.getElementById("error-msg").innerHTML = "";
  document.getElementById("error-block").style.display = "none";

  if (
    document.getElementById("email").value.trim() === "" ||
    document.getElementById("password").value.trim() === ""
  ) {
    result = false;
    alert(result);
    document.getElementById("error-block").style.display = "block";
    document.getElementById("error-msg").innerHTML += "Fields are empty.";
  }
  return result;
};

const change = () => // no ';' here
{
  var elem = document.getElementById("myButton1");
  if (elem.value == "Buy") elem.value = "Sold";
  else elem.value = "Buy";
}
