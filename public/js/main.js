function displayCategories(parentElement, calledFrom) {
    if (calledFrom == "hamburger") {
        if (document.getElementById("categories-list")) {
            hideCategories("hamburger");
            return;
        }
    }

    const categories = [
        {
            name: "Studying",
            slug: "studying",
        },
        {
            name: "Coding",
            slug: "coding",
        },
        {
            name: "Presentations",
            slug: "presentations",
        },
        {
            name: "Entertainment",
            slug: "entertainment",
        },
        {
            name: "Content Creators",
            slug: "content-creators",
        },
        {
            name: "Editing and designs",
            slug: "editing-and-design",
        },
        {
            name: "Business",
            slug: "business",
        },
        {
            name: "Dubbing and Subtitling",
            slug: "dubbing-and-subtitling",
        },
    ];

    document.getElementById("arrow").classList.add("rotate-180");

    addCategoriesListForMobile(parentElement, categories);
}

function addCategoriesListForMobile(parentElement, data) {
    document.getElementById(parentElement).innerHTML += `
                <div id="categories-list" class="bg-blue-900 absolute top p-2 rounded h-max">
                    <ul id="categories-content" class="text-white"></ul>
                </div>
            `;
    for (let i = 0; i < data.length; i++) {
        if (i < data.length - 1)
            document.getElementById("categories-content").innerHTML += `
                        <li class="border-b b-white p-4"><a href="/${data[i].slug}">${data[i].name}</a></li>
                    `;
        else
            document.getElementById("categories-content").innerHTML += `
                <li class="border-white p-4"><a href="/${data[i].slug}">${data[i].name}</a></li>
            `;
    }
}

function hideCategories(calledFrom) {
    if (calledFrom == "hamburger") {
        document.getElementById("arrow").classList.remove("rotate-180");
    }

    document.getElementById("categories-list").remove();
}

function displayHumburgerMenu() {
    document.getElementById("hamburger-menu").style.display = "block";
    document.getElementById("content").style.display = "none";
    document.getElementById("hamburger").style.display = "none";
}

function closeSideMenu() {
    document.getElementById("hamburger-menu").style.display = "none";
    document.getElementById("content").style.display = "block";
    document.getElementById("hamburger").style.display = "block";
}
