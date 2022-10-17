let message = document.getElementById("message")
let email = document.getElementById("email")

const re = /[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,6}/

email.addEventListener("keypress", event => {
    if(re.test(email.value))
        message.style.visibility = "visible"
})




