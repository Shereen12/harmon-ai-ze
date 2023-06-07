function displayCategories(parentElement, calledFrom) {
    if (calledFrom == "hamburger") {
        if ($("#categories-list").length > 0) {
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

    $("#arrow").addClass("rotate-180");

    addCategoriesListForMobile(parentElement, categories);
}

function addCategoriesListForMobile(parentElement, data) {
    $("#" + parentElement).append(`
                <div id="categories-list" class="bg-blue-900 absolute top p-2 rounded h-max">
                    <ul id="categories-content" class="text-white"></ul>
                </div>
            `);
    for (let i = 0; i < data.length; i++) {
        if (i < data.length - 1)
            $("#categories-content").append(`
                        <li class="border-b b-white p-4"><a href="/${data[i].slug}">${data[i].name}</a></li>
                    `);
        else
            $("#categories-content").append(`
                <li class="border-white p-4"><a href="/${data[i].slug}">${data[i].name}</a></li>
            `);
    }
}

function hideCategories(calledFrom) {
    if (calledFrom == "hamburger") {
        $("#arrow").removeClass("rotate-180");
    }

    $("#categories-list").remove();
}

function displayHumburgerMenu() {
    $("#hamburger-menu").show();
    $("#content").hide();
    $("#hamburger").hide();
}

function closeSideMenu() {
    $("#hamburger-menu").hide();
    $("#content").show();
    $("#hamburger").show();
}
