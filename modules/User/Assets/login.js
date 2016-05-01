/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
new Vue({
    el: '#login-box',
    ready: function () {
        this.doLogin();
    },
    methods: {
        doLogin: function () {
            this.$http.get('/user/test', function ($answer) {
                console.log($answer);
            });
        }
    }
});

