const cloud = document.getElementById("cloud");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
const circulo = document.querySelector(".circulo");
const menu = document.querySelector(".menu");
const main = document.querySelector("main");

menu.addEventListener("click", () => {
    barraLateral.classList.toggle("max-barra-lateral");
    if (barraLateral.classList.contains("max-barra-lateral")) {
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    } else {
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }
    if (window.innerWidth <= 320) {
        barraLateral.classList.add("mini-barra-lateral");
        main.classList.add("min-main");
        spans.forEach((span) => {
            span.classList.add("oculto");
        });
    }
});

cloud.addEventListener("click", () => {
    barraLateral.classList.toggle("mini-barra-lateral");
    main.classList.toggle("min-main");
    spans.forEach((span) => {
        span.classList.toggle("oculto");
    });
});

const enlaces = document.querySelectorAll(".barra-lateral .navegacion a");
enlaces.forEach(function (enlace) {
    enlace.addEventListener("click", function (e) {
        e.preventDefault();
        const view = this.getAttribute("href");
        $.ajax({
            type: "GET",
            url: view,
            success: function (response) {
                const elementosActivos = document.querySelectorAll(
                    ".barra-lateral .navegacion a.active"
                );
                elementosActivos.forEach(function (elemento) {
                    elemento.classList.remove("active");
                });
                enlace.classList.toggle("active");

                var tempElement = $("<div>");
                tempElement.html(response);
                var contentHTML = tempElement.find("#container").html();
                $("#content").html(contentHTML);

                history.pushState({}, "", view);
                var popStateEvent = new PopStateEvent("popstate", {
                    state: {},
                });
                dispatchEvent(popStateEvent);
            },
            error: function (xhr, status, error) {
                console.log(error);
            },
        });
    });
});

$.ajax({
    type: "GET",
    url: window.location.pathname,

    success: function (response) {
        var tempElement = $("<div>");
        tempElement.html(response);

        var contentHTML = tempElement.find("#container").html();
        $("#content").html(contentHTML);

        let element = window.location.pathname.substring(1);
        const select = document.getElementById(element);
        select.classList.toggle("active");
    },
    error: function (xhr, status, error) {
        console.log(error);
    },
});
/* 
$(document).ready(function () {
    $("#login").on("click", function (event) {
        event.preventDefault();
        $.ajax({
            type: "GET",
            url: "/login",

            success: function (response) {
                console.log(event);
                var tempElement = $("<div>");
                tempElement.html(response);

                var contentHTML = tempElement.find("#container").html();
                $("#content").html(contentHTML);

                history.pushState({}, "", "/login");

                var popStateEvent = new PopStateEvent("popstate", {
                    state: {},
                });
                dispatchEvent(popStateEvent);
            },
            error: function (xhr, status, error) {
                console.log(error);
            },
        });
    });

    $("#form").on("click", function (event) {
        event.preventDefault();
        $.ajax({
            type: "GET",
            url: "/form",
            success: function (response) {
                var tempElement = $("<div>");
                tempElement.html(response);

                var contentHTML = tempElement.find("#container").html();
                $("#content").html(contentHTML);

                history.pushState({}, "", "/form");

                var popStateEvent = new PopStateEvent("popstate", {
                    state: {},
                });
                dispatchEvent(popStateEvent);
            },
            error: function (xhr, status, error) {
                console.log(error);
            },
        });
    });

    $("#main").on("click", function (event) {
        event.preventDefault();
        $.ajax({
            type: "GET",
            url: "/main",
            success: function (response) {
                var tempElement = $("<div>");
                tempElement.html(response);

                var contentHTML = tempElement.find("#container").html();
                $("#content").html(contentHTML);

                history.pushState({}, "", "/main");

                var popStateEvent = new PopStateEvent("popstate", {
                    state: {},
                });
                dispatchEvent(popStateEvent);
            },
            error: function (xhr, status, error) {
                console.log(error);
            },
        });
    });
});
 */
