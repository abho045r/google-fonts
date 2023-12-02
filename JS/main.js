const previewInput = $("#preview-input");
const sizeInput = $("#size-input");
const sizeDisplay = $("#size-display");
const editableDiv = $(".editable");

// Set initial content of editable div to match preview input on page load
editableDiv.text(previewInput.val());

// Function to update font size and height on range slider change
sizeInput.on("input", function () {
  const newSize = $(this).val();
  sizeDisplay.text(newSize + "px");

  previewInput.css({ "font-size": newSize + "px", height: "auto" });
  editableDiv.css({ "font-size": newSize + "px" });

  const newHeight = Math.min(previewInput[0].scrollHeight, 200);
  previewInput
    .css({ "overflow-y": newHeight > 200 ? "scroll" : "hidden" })
    .height(newHeight);

  // Set a maximum height for the editable div and make it scrollable if needed
  editableDiv.css({
    "max-height": "500px",
    "overflow-y": "auto", // Set overflow-y to auto for contenteditable
  });
});

// Function to update font color on button click
$(".colorUpdateButton").on("click", function () {
  const color = $(this).css("background-color");
  previewInput.css("color", color);
  editableDiv.css("color", color);
});

// Function to update background color on button click
$(".bgColorUpdateButton").on("click", function () {
  const bgColor = $(this).css("background-color");
  previewInput.css("background-color", bgColor);
  editableDiv.css("background-color", bgColor);
});

// Function to update content of contenteditable div as the user types
previewInput.on("input", function () {
  const newText = $(this).val();
  editableDiv.text(newText);
});
// Function to toggle fullscreen class and update the icon
function toggleFullscreen(button) {
  // Get the closest list item
  const listItem = button.closest(".list-group-item");

  // Toggle the fullscreen class
  listItem.classList.toggle("fullscreen-editor");

  // Get the icon inside the button
  const icon = button.querySelector("i.fa-solid");

  // Toggle the icon based on the fullscreen class
  if (listItem.classList.contains("fullscreen-editor")) {
    icon.classList.remove("fa-expand");
    icon.classList.add("fa-minimize");
  } else {
    icon.classList.remove("fa-minimize");
    icon.classList.add("fa-expand");
  }
}

function advPasteText() {
  // Use the Clipboard API to get the clipboard content
  navigator.clipboard
    .readText()
    .then(function (clipboardText) {
      previewInput.val(clipboardText); // Use val() method for jQuery objects
      console.log(previewInput.val()); // Use val() method for jQuery objects

      // Set the clipboard content to all editable divs on the page
      var editableDivs = $(".editable"); // Use jQuery selector
      editableDivs.text(clipboardText); // Use text() method for jQuery objects
      // Resize the textarea based on the content
      const newHeight = Math.min(previewInput[0].scrollHeight, 200);
      previewInput
        .css({ "overflow-y": newHeight > 100 ? "scroll" : "hidden" })
        .height(newHeight);
    })
    .catch(function (err) {
      console.error("Unable to read clipboard content", err);
    });
}
function pasteText(button) {
  // Get the closest editable div to the clicked button
  var editableDiv = button
    .closest(".list-group-item")
    .querySelector(".editable");

  // Use the Clipboard API to get the clipboard content
  navigator.clipboard
    .readText()
    .then(function (clipboardText) {
      // Set the clipboard content to the editable div
      editableDiv.innerText = clipboardText;
    })
    .catch(function (err) {
      console.error("Unable to read clipboard content", err);
    });
}
function copyToClipboard(button) {
  // Find the <pre> element associated with the clicked button
  var preElement = button.parentNode.querySelector("pre.editable");

  // Get the text content of the <pre> element
  var copyText = preElement.textContent;

  // Use navigator.clipboard.writeText to copy the text to the clipboard
  navigator.clipboard
    .writeText(copyText)
    .then(function () {
      // Success callback
      console.log("Content copied to clipboard!");
    })
    .catch(function (err) {
      // Error callback
      console.error("Unable to copy to clipboard", err);
    });
}
var selectedWeights = [];
function toggleImportUrl(weight, italic, button) {
  var index = selectedWeights.indexOf(weight);
  if (index === -1) selectedWeights.push(weight);
  else selectedWeights.splice(index, 1);

  var weightsOrder = [
    "100",
    "200",
    "300",
    "400",
    "500",
    "600",
    "700",
    "800",
    "900",
  ];

  var zeroWeights = selectedWeights
    .filter((w) => !w.startsWith("1,"))
    .sort((a, b) => weightsOrder.indexOf(a) - weightsOrder.indexOf(b));
  var oneWeights = selectedWeights
    .filter((w) => w.startsWith("1,"))
    .sort(
      (a, b) =>
        weightsOrder.indexOf(a.split(",")[1]) -
        weightsOrder.indexOf(b.split(",")[1])
    );

  // Add '0,' to non-italic weights if isItalicSelected is true
  if (oneWeights.length > 0) {
    zeroWeights = zeroWeights.map((w) => "0," + w);
  }

  var sortedWeights = zeroWeights.concat(oneWeights);

  var isItalicSelected = sortedWeights.some((w) => w.startsWith("1,"));
  var isWghtSelected = sortedWeights.some((w) => !w.startsWith("1,"));

  var importUrl = `https://fonts.googleapis.com/css2?family=Roboto${
    isWghtSelected || isItalicSelected ? ":" : ""
  }${isItalicSelected ? "ital," : ""}${
    isWghtSelected || isItalicSelected ? "wght@" : ""
  }${
    isWghtSelected || isItalicSelected ? sortedWeights.join(";") : ""
  }&display=swap`;

  $("#importCode").html(`<style>@import url('${importUrl}');</style>`);
  $("#styleCode").text(`<link href='${importUrl}' rel="stylesheet">`);

  // Update Selected Button Text and Icon
  var buttonText = selectedWeights.includes(weight) ? "Remove" : "Select";
  $(button).find("span").text(buttonText);

  var icon = $(button)
    .find("i")
    .removeClass("fa-plus fa-minus")
    .addClass(selectedWeights.includes(weight) ? "fa-minus" : "fa-plus");

  // Set styles for selected and unselected buttons using ternary operator
  $(button).css({
    color: selectedWeights.includes(weight) ? "#fff" : "#333333",
    "background-color": selectedWeights.includes(weight)
      ? "#3060af"
      : "rgba(51, 51, 51, 0.05)",
  });

  // Open the offcanvas
  $("#font-offcanvas").offcanvas("show");
  // Make the body scrollable
  $("body").css("overflow-y", "auto");
  Prism.highlightAll();
}

document.addEventListener("DOMContentLoaded", () => {
  setFontWeight("Regular 400");

  const dropdownBtn = document.getElementById("dropdownBtn");
  dropdownBtn.addEventListener("click", toggleDropdown);
});

function toggleDropdown() {
  document.querySelector(".font-dropdown").classList.toggle("show");
}

function selectOption(option) {
  updateFontWeight(option);
  toggleDropdown();
}

function setFontWeight(weight) {
  updateFontWeight(weight);
}

function updateFontWeight(weight) {
  const textElements = document.querySelectorAll(".updateFontWeight");
  const fontTextElements = document.querySelectorAll(".updateFontText");
  const fontWeightMap = {
    "Thin 100": 100,
    "Light 300": 300,
    "Regular 400": 400,
    "Medium 500": 500,
    "Bold 700": 700,
    "Black 900": 900,
  };
  const selectedWeight = fontWeightMap[weight] || 400;

  textElements.forEach((element, index) => {
    element.style.fontWeight = selectedWeight;
    fontTextElements[index].textContent = weight;
  });

  // Update selected option text
  document.getElementById("selectedOption").textContent = weight;
}
function toggleItalic() {
  const textElements = document.querySelectorAll(".updateFontWeight");
  const isItalicSpans = document.querySelectorAll(".isItalic");
  const checkbox = document.querySelector('input[type="checkbox"]');
  const isItalic = checkbox.checked;

  textElements.forEach((element, index) => {
    element.style.fontStyle = isItalic ? "italic" : "normal";
    isItalicSpans[index].textContent = isItalic ? "Italic" : "";
  });
}

//Initialize CodeMirror editor
// Get a reference to the textarea element
var textarea = document.getElementById("font-codemirror");

// Initialize CodeMirror with the textarea element
var editor = CodeMirror.fromTextArea(textarea, {
  lineNumbers: true, // Display line numbers
  mode: "application/xml", // Set the programming language mode
  styleActiveLine: true,
  matchBrackets: true,
  autoCloseBrackets: true,
  autoCloseTags: true,
  styleActiveSelected: true,
  theme: "blackboard",
  autoRefresh: true,
  foldGutter: true,
  gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"],
});
const iframe = document.getElementById("outputFrame");

function updateIframeContent() {
  const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
  iframeDoc.open();
  iframeDoc.write(editor.getValue());
  iframeDoc.close();
}
editor.on("change", updateIframeContent);
updateIframeContent();

//Image Slider
 let slideIndex = 1;
 showSlides(slideIndex);

 function currentSlide(n) {
   showSlides((slideIndex = n));
 }

 function showSlides(n) {
   let i;
   let slides = document.getElementsByClassName("mySlides");
   let dots = document.getElementsByClassName("demo");
   if (n > slides.length) {
     slideIndex = 1;
   }
   if (n < 1) {
     slideIndex = slides.length;
   }
   for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex - 1].style.display = "block";
   dots[slideIndex - 1].className += " active";
 }

