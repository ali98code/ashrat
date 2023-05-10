//menu ================================
let menuButt = document.querySelector("header .menu");
let exitButt = document.querySelector("header .exit");
let nav = document.querySelector("header .nav");
menuButt.addEventListener("click", () => {
    nav.style.right = "0";
});
exitButt.addEventListener("click", () => {
    nav.style.right = "-373px";
});
//tabs and windows =======================
let hiwTabs = document.querySelectorAll(".how-it-works .tabs li");
let hiwWindows = document.querySelectorAll(".how-it-works .window");
hiwTabs.forEach((tab) => {
    tab.addEventListener("click", (e) => {
        hiwTabs.forEach((e) => {
            e.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        hiwWindows.forEach((w) => {
            w.style.display = "none";
            if (
                w.classList.contains(
                    document
                        .querySelector(".how-it-works .tabs .active")
                        .getAttribute("data-window")
                )
            ) {
                w.style.display = "flex";
            }
        });
    });
});
let sectionsTabs = document.querySelectorAll(".sections .tabs li");
let sectionswWindows = document.querySelectorAll(".sections .window");
sectionsTabs.forEach((tab) => {
    tab.addEventListener("click", (e) => {
        sectionsTabs.forEach((e) => {
            e.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        sectionswWindows.forEach((w) => {
            w.style.display = "none";
            if (
                w.classList.contains(
                    document
                        .querySelector(".sections .tabs .active")
                        .getAttribute("data-window")
                )
            ) {
                w.style.display = "grid";
            }
        });
    });
});
//sidebar===================================================
let openSideBar = document.querySelector(".open-side-bar");
let sideBar = document.querySelector(".side-bar");
let exitSideBar = document.querySelector(".side-bar .close-side-bar");
if (openSideBar) {
    openSideBar.addEventListener("click", () => {
        sideBar.style.right = "0";
    });
    exitSideBar.addEventListener("click", () => {
        sideBar.style.right = "-365px";
    });
}
//chat =====================================================
if (window.innerWidth < 767) {
    document.querySelectorAll(".chat-contacts-box").forEach((box) => {
        box.addEventListener("click", () => {
            document.querySelector(".chat-contacts").style.display = "none";
        });
    });
}
window.addEventListener("resize", () => {
    if (window.innerWidth < 767) {
        document.querySelectorAll(".chat-contacts-box").forEach((box) => {
            box.addEventListener("click", () => {
                document.querySelector(".chat-contacts").style.display = "none";
            });
        });
    }
});
if (document.querySelector(".exit-chat")) {
    document.querySelector(".exit-chat").addEventListener("click", () => {
        document.querySelector(".chat-contacts").style.display = "block";
    });
}
//copy-ref=======================================================
let copRefButt = document.querySelector(".copy-ref");
if (copRefButt) {
    copRefButt.addEventListener("click", () => {
        const tempTextarea = document.createElement("textarea");
        tempTextarea.value = document.querySelector(".ref-url").innerHTML;
        document.body.appendChild(tempTextarea);
        // Select and copy the text
        tempTextarea.select();
        document.execCommand("copy");
        // Remove the temporary textarea
        document.body.removeChild(tempTextarea);
        Swal.fire("تم نسخ رابط احالتك بنجاح !", "", "success");
    });
}

//image shower ====================================================
function readImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var img = document.getElementById(input.id + "-holder");
            img.src = e.target.result;
            img.style.display = "block";
        };
        reader.readAsDataURL(input.files[0]);
    }
}

//skills ===============================================================

const inputField = document.querySelector(".input-skills");
if (inputField) {
    const dropdown = document.querySelector(".dropdown");
    const skills = [
        "HTML",
        "CSS",
        "JavaScript",
        "Python",
        "Java",
        "PHP",
        "Ruby",
        "C++",
        "C#",
        "Swift",
    ];
    inputField.addEventListener("click", () => {
        dropdown.style.display = "block";
    });

    skills.forEach((skill) => {
        const dropdownItem = document.createElement("div");
        dropdownItem.textContent = skill;
        dropdownItem.classList.add("dropdown-item");
        dropdown.appendChild(dropdownItem);

        dropdownItem.addEventListener("click", () => {
            const skillInput = document.createElement("span");
            skillInput.textContent = skill;
            skillInput.classList.add("skill");
            document.querySelector(".skills-box").appendChild(inputField);
            inputField.before(skillInput);
            const deleteButton = document.createElement("span");
            deleteButton.innerHTML = '<i class="fa-solid fa-circle-xmark"></i>';
            deleteButton.classList.add("delete-button");
            skillInput.appendChild(deleteButton);
            deleteButton.addEventListener("click", () => {
                skillInput.remove();
                inputField.focus();
            });
            inputField.value = "";
            dropdown.style.display = "none";
        });
    });
    inputField.addEventListener("input", () => {
        const filter = inputField.value.toUpperCase();
        const dropdownItems = dropdown.querySelectorAll(".dropdown-item");
        dropdownItems.forEach((item) => {
            if (item.textContent.toUpperCase().indexOf(filter) > -1) {
                item.style.display = "";
            } else {
                item.style.display = "none";
            }
        });
    });
    inputField.addEventListener("keydown", (event) => {
        if (event.key === "Backspace" && inputField.value === "") {
            const lastSkill = inputField.previousSibling;
            if (lastSkill && lastSkill.classList.contains("skill")) {
                lastSkill.remove();
            }
        }
    });
    document.addEventListener("click", (event) => {
        if (!event.target.closest(".container")) {
            dropdown.style.display = "none";
        }
    });
}
//add another =============================================
let addAnother = document.querySelector(".add-another");
if (addAnother) {
    addAnother.addEventListener("click", () => {
        document.querySelector(".another").classList.toggle("another-hide");
    });
}
let addPackage = document.querySelector(".add-package");
if (addPackage) {
    addPackage.addEventListener("click", () => {
        document.querySelector(".packages").classList.toggle("another-hide");
    });
}

//dropdown ==================================================
function openDrop(target) {
    if (
        target.parentElement
            .querySelector(".dropdownn-content")
            .classList.contains("hide")
    ) {
        document
            .querySelectorAll(".dropdownn-content")
            .forEach((e) => e.classList.add("hide"));
        target.parentElement
            .querySelector(".dropdownn-content")
            .classList.remove("hide");
    } else {
        target.parentElement
            .querySelector(".dropdownn-content")
            .classList.add("hide");
        document
            .querySelectorAll(".dropdownn-content")
            .forEach((e) => e.classList.add("hide"));
    }
}
