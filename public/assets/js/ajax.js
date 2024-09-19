const form = document.getElementById('contact-form');
const responseDiv = document.getElementById('response');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const formData = new FormData(form);

//   console.log(form);
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '/test/submit'); // Replace with your server-side script
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = () => {
    if (xhr.status === 200) {
      responseDiv.textContent = 'Message sent successfully!';
      form.reset();

    //   console.log(xhr.response);

      console.log(formData);
    } else {
      responseDiv.textContent = 'Error sending message.';
    }
  };

  xhr.send(new URLSearchParams(formData));
});