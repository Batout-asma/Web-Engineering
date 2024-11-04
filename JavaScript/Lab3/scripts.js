function addNote() {
  const title = document.getElementById("note-title").value;
  const content = document.getElementById("note-content").value;

  if (title && content) {
    const noteContainer = document.createElement("div");
    noteContainer.classList.add("note-card");

    const noteTitle = document.createElement("h3");
    noteTitle.classList.add("note-title");
    noteTitle.textContent = title;

    const noteContent = document.createElement("p");
    noteContent.textContent = content;

    noteContainer.appendChild(noteTitle);
    noteContainer.appendChild(noteContent);

    document.getElementById("notes-container").appendChild(noteContainer);

    document.getElementById("note-title").value = "";
    document.getElementById("note-content").value = "";
  }
}
