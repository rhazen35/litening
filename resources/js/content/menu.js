import Vue from "vue";

var menu = new Vue({
    el: '#menu',
    data: {
        isActive: false
    },
    methods: {
        toggleMenuLink: function (event) {
            let icon = document.getElementById("menu-icon");
            let menuItems = document.getElementById("menu-items");

            icon.classList.toggle("open");
            icon.title = "Close the menu." === icon.title ? "Open the menu." : "Close the menu.";

            menuItems.classList.toggle("animate-left-cubic");
            menuItems.style.gridColumn = menuItems.style.gridColumn === "1 / auto" ? "3 / auto" : "1 / auto";
        },

        toggleActive: function (event) {

            let items = document.getElementsByClassName('menu-item');

            for (let i = 0; i < items.length; i++) {

                if (items[i].classList.contains('active')) {
                    items[i].classList.remove('active');
                }
            }

            event.target.parentElement.classList.add('active');
        }
    }
});