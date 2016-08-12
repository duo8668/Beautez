(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

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
            get: function get() {
                if (window.innerWidth > 991) {
                    return 'right';
                } else {
                    return 'bottom';
                }
            }
        }
    },
    ready: function ready() {
        $thisVM = this;
        $("[data-toggle=tooltip]").tooltip({
            placement: function placement() {
                return $thisVM.placementSize;
            }
        });
        document.addEventListener("keydown", function (e) {
            if (this.show && e.keyCode === 27) {
                this.showModal = false;
            }
        });
    },
    methods: {
        doLogin: function doLogin() {
            this.$http.get('/user/test', function ($answer) {
                console.log($answer);
            });
        }
    }
});

},{}]},{},[1]);

//# sourceMappingURL=register.js.map
