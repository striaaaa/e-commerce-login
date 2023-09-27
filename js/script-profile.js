// JavaScript for handling profile editing and navigation

const editButton = document.getElementById("editButton");
const saveButton = document.getElementById("saveButton");
const editForm = document.querySelector(".edit-form");
const backButton = document.getElementById("backButton");

editButton.addEventListener("click", () => {
  editForm.style.display = "block";
  editButton.style.display = "none";

  // Fill the form fields with the current data
  const currentName = document.getElementById("name").textContent;
  const currentUsername = document.getElementById("username").textContent;
  const currentTwitter = document
    .getElementById("twitterLink")
    .getAttribute("href");
  const currentInstagram = document
    .getElementById("instagramLink")
    .getAttribute("href");
  const currentFacebook = document
    .getElementById("facebookLink")
    .getAttribute("href");

  document.getElementById("nameInput").value = currentName;
  document.getElementById("usernameInput").value = currentUsername;
  document.getElementById("twitterInput").value = currentTwitter;
  document.getElementById("instagramInput").value = currentInstagram;
  document.getElementById("facebookInput").value = currentFacebook;
});

saveButton.addEventListener("click", () => {
  // Update the profile information with the form data
  const newName = document.getElementById("nameInput").value;
  const newUsername = document.getElementById("usernameInput").value;
  const newTwitter = document.getElementById("twitterInput").value;
  const newInstagram = document.getElementById("instagramInput").value;
  const newFacebook = document.getElementById("facebookInput").value;

  document.getElementById("name").textContent = newName;
  document.getElementById("username").textContent = newUsername;
  document.getElementById("twitterLink").setAttribute("href", newTwitter);
  document.getElementById("instagramLink").setAttribute("href", newInstagram);
  document.getElementById("facebookLink").setAttribute("href", newFacebook);

  // Hide the edit form and show the edit button
  editForm.style.display = "none";
  editButton.style.display = "block";
});

backButton.addEventListener("click", () => {
  // Navigate back to the previous page (you can add your own logic here)
  window.history.back();
});
