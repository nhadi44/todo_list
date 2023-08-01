const createActivity = document.getElementById("createActivity");
const activity = document.getElementById("activity");

const updateActivity = document.getElementById("updateActivity");
const updateActivityInput = document.getElementById("updateActivityInput");

const createTaks = document.getElementById("createTaks");
const taksInput = document.getElementById("taks");

const updateTaks = document.getElementById("updateTaks");
const updateTaksInput = document.getElementById("updateTaksInput");

if (createActivity)
  createActivity.addEventListener("shown.bs.modal", () => {
    activity.focus();
  });

if (updateActivity)
  updateActivity.addEventListener("shown.bs.modal", () => {
    updateActivityInput.focus();
  });

if (createTaks)
  createTaks.addEventListener("shown.bs.modal", () => {
    taksInput.focus();
  });

if (updateTaks)
  updateTaks.addEventListener("shown.bs.modal", () => {
    updateTaksInput.focus();
  });
