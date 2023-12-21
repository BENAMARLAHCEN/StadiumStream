function openInput() {
  var input = document.getElementById("text_content");
  input.removeAttribute("readonly");
  window.addEventListener("click", function () {
  input.setAttribute("readonly", "");
  });
}
function adjustTextareaHeight() {
  var textarea = document.getElementById('text_content');
  textarea.style.height = 'auto';
  textarea.style.height = (textarea.scrollHeight) + 'px';
}
adjustTextareaHeight();
document.getElementById('text_content').addEventListener('input', adjustTextareaHeight);
