import Ajax from "../../modules/requests/ajax"

/**
 * Menu Module.
 */
class Menu {

    constructor() {

        this.ajax = new Ajax();
    }

    // Toggle the menu link, opening/closing the menu.
    toggleMenuLink() {

        let icon      = document.getElementById("menu-icon");
        let menuItems = document.getElementById("menu-items");

        icon.classList.toggle("open");
        icon.title = "Close the menu." === icon.title ? "Open the menu." : "Close the menu.";

        menuItems.classList.toggle("animate-left-cubic-superfast");
        menuItems.style.gridColumn = menuItems.style.gridColumn === "1 / auto" ? "3 / auto" : "1 / auto";
    }

    // Toggle the menu activa state, changing the appearance of the menu item.
    toggleActive(event) {

        let items = document.getElementsByClassName('menu-item');

        for (let i = 0; i < items.length; i++) {

            if (items[i].classList.contains('active')) {
                items[i].classList.remove('active');
            }
        }

        event.target.parentElement.classList.add('active');
    }

    page(page) {

        let url = '/' + page;

        axios.get(url)
          .then(function (response) {
            document.getElementById('app').innerHTML = response.data;

            history.pushState(null, null, url);
            history.replaceState(null, null, url);
          })
          .catch(function (error) {
            console.log(error);
          })
          .then(function () {
            
          }); 

        
    }
}
export default Menu;