
import Vue from 'vue'
import VueValidator from 'vue-validator'

Vue.use(VueValidator);

// start app
new Vue({
    el: '#register-box',
    http: {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
    },
    data: {
        user: {
            firstName: '',
            lastName: '',
            userName: '',
            email: '',
            password: '',
            retype_password: '',
            agree_term: false
        },
        showModal: false,
        checking: false
    },
    computed: {
        placementSize: {
            cache: false,
            get: function () {
                if (window.innerWidth > 991) {
                    return 'right';
                } else {
                    return 'bottom';
                }
            }
        }
    },
    ready: function () {
        $thisVM = this;
        $("[data-toggle=tooltip]").tooltip({placement: function () {
                return $thisVM.placementSize;
            }});
        document.addEventListener("keydown", function (e) {
            if (this.show && e.keyCode === 27) {
                this.showModal = false;
            }
        });
    },
    methods: {
        doLogin:require('./../../../resources/assets/vue/beautez/methods/doLogin.js'),
        getRequestType: function () {
            if (this.$el.querySelector('form[formid="beautez"]')) {
                var method = this.$el.querySelector('form[formid="beautez"]').method;
                return (method ? method : this.$el.method).toLowerCase();
            } else {
                return 'post';
            }
        }
    }
});


