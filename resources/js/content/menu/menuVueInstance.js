import Menu from "./menuModule";

var menu = new Vue({
    el: '#menu',
    data: {
        isActive: true,
        module  : new Menu(),
    },
    methods: {
        toggleMenuLink: function(event) {

            this.module.toggleMenuLink();
        },
        goToRoute: function(event) {

            let id = event.target.parentNode.id.replace("menu-", '');

            this.module.toggleActive(event);

            this.module.page(id);
        }
    }
});