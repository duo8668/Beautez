var router = new VueRouter({
     hashbang: false,
     mode: 'html5',
      history: true,
     root: '/'
});
var App = Vue.extend({});

router.start(App,'#register-box');
Vue.component('my-component', App);

var myVue = new Vue({
    el: '#register-box',
    mixins: [globalValidatorMixin],
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
        showModal: false
    },
    computed: {
        placementSize: {
            cache: false,
            get: function() {
                if (window.innerWidth > 991) {
                    return 'right';
                } else {
                    return 'bottom';
                }
            }
        }
    },
    ready: function() {
        $thisVM = this;

        $("[data-toggle=tooltip]").tooltip({
            placement: function() {
                return $thisVM.placementSize;
            }
        });
        document.addEventListener("keydown", function(e) {
            if (this.show && e.keyCode === 27) {
                this.showModal = false;
            }
        });
        this.$on('vue-ajax-completed',function(e){
            if(e.caller == 'registerUser'){
                $thisVM.onAjaxSuccess(e.payload);
            }
        });
                 router.go('/user/login',false,false);
    },
    methods: {
        doLogin: function() {
            this.$http.get('/user/test', function($answer) {
                console.log($answer);
            });
        },
        onAjaxSuccess:function(_user){
            if (_user) {
                console.log(_user);
                var theContents = 'Thank you for your registration ' + _user.firstName +', ' +_user.lastName+ ', redirecting to login...';
                $.SmartMessageBox({
                    title: "Congratulations!!!",
                    content: theContents,
                    buttons: "[Ok]"
                }, function (ButtonPress, Value) {

                });
                router.go('/user/login');
            }
        }
    }
});

