let passwordLength = document.getElementById("passLength");
let password = document.getElementById("pass");
let saveButton = document.getElementById("saveButton");

function generatePassword(len) {
  const lowerAlphabet = "abcdefghijklmnopqrstuvwxyz";
  const upperAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  const numeric = "0123456789";
  const symbols = "!@#$%^&*()_+=-{}[]':;/?.,<>`~";

  const data = lowerAlphabet + upperAlphabet + numeric + symbols;
  let generator = "";
  for (let index = 0; index < len; index++) {
    // ~~ = math floor
    generator += data[~~(Math.random() * data.length)];
  }
  return generator;
}

function getPassword() {
  if (passwordLength.value < 8) {
    alert("Password length must be more 8 charachters!");
    return false;
  }
  const newPassword = generatePassword(passwordLength.value);
  password.value = newPassword;
  alert("password has been generated!");
}

function savePassword() {
  //document.title untuk memberikan nama tab
  document.title = password.value;
  saveButton.setAttribute("href", "data:text/plain;charset=utf-8," + encodeURIComponent(`your password: ${document.title}`));
  saveButton.setAttribute("download", "yourpasswordLOG.txt");
  setTimeout(() => {
    alert("saved!");
  }, 1000);
}

function showPassword() {
  switch (password.type) {
    case "password":
      password.type = "text";
      break;
    case "text":
      password.type = "password";
      break;
  }
  // if (password.type === "password") {
  //   password.type = "text"
  // } else {
  //   password.type = "password"
  // }
}
