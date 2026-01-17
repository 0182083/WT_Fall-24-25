let timer = null;
const usernameInput = document.getElementById("username");
const status = document.getElementById("status");
const submitBtn = document.getElementById("submitBtn");
const charCount = document.getElementById("charCount");

usernameInput.addEventListener("keyup", function () {
    clearTimeout(timer);
    let username = this.value.trim();
    charCount.innerText = username.length;

    if (username.length < 3) {
        status.innerText = "Minimum 3 characters required";
        status.className = "taken";
        submitBtn.disabled = true;
        return;
    }

    status.innerText = "Checking...";
    timer = setTimeout(() => checkUsername(username), 300);
});

function checkUsername(username) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "check_username.php?username=" + username, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = JSON.parse(xhr.responseText);
            status.innerText = response.message;

            if (response.available) {
                status.className = "available";
                submitBtn.disabled = false;
            } else {
                status.className = "taken";
                submitBtn.disabled = true;
            }
        }
    };
    xhr.send();
}
