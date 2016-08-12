// register modal component
Vue.component('modal', {
    template: '#modal-template',
    props: ['show', 'items'],
    methods: {
        closeModal: function () {
            this.show = false;
        }
    },
    events: {
        errorMessageBagsArrived: function (evt, from) {
            this.items = evt;
            var result = Object.keys(evt);
        }
    }
});