//MARK: Отправка форм

function sendForm(formId, errorId, action_name) {
  const form = document.getElementById(formId);

  const messageBlock = document.getElementById(errorId);
  function hideMessage() {
    messageBlock.innerHTML = "";
  }
  if (!form) return;
  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    formData.append("action", action_name);
    //for (const [k, v] of formData.entries()) console.log(k, v);
    fetch(my_ajax_object.ajax_url, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response.success) {
          messageBlock.innerHTML = response.data.message;
          form.reset();
          setTimeout(hideMessage, 5000);
        } else {
          messageBlock.innerHTML = response.data.message;
          setTimeout(hideMessage, 5000);
        }
      })
      .catch((error) => {
        messageBlock.innerHTML = "Error sending. Try again later.";
        console.log(error);
      });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const forms = document.querySelectorAll("form").forEach((form) => {
    form.addEventListener("submit", (e) => {
      const form = e.target.closest("form");
      const countryData = iti.getSelectedCountryData();
      const dialCode = countryData.dialCode;
      if (!form) return;
      const message = form.querySelector(".message_send_status");

      const action = form.dataset.action;
      if (!action || action != "send_mail") return;
      e.preventDefault();

      const formData = new FormData(form);

      formData.append("action", action);
      formData.append("dial_code", dialCode);

      fetch(my_ajax_object.ajax_url, {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((response) => {
          if (response.success) {
            console.log("Сообщение отправлено");
            form.reset();
            closePopUp(form);
            showMessage(message, "Message sent");
          } else {
            closePopUp(form);
            showMessage(
              message,
              "Oups, something went wrong. Please try again later.",
            );
          }
        })
        .catch((error) => {
          console.log(error);
          showMessage(
            message,
            "Oups, something went wrong. Please try again later.",
          );
        });
    });
  });
});

function showMessage(element, text) {
  if (element) {
    element.textContent = text;
    setInterval(() => {
      element.textContent = "";
    }, 2000);
  }
}

function closePopUp(form) {
  if (!form) return;

  const popUp = form.closest(".popup");
  if (!popUp) return;

  setInterval(() => {
    popUp.classList.remove("active");
  }, 3000);
}
