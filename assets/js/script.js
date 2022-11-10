const showPass = document.querySelector(".occhio");
showPass.addEventListener("click", () => {
  const inputPassword = document.querySelector('[name="password"]');
  if (inputPassword.type === "text") {
    inputPassword.type = "password";
  } else inputPassword.type = "text";
});