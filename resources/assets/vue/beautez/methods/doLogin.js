module.exports = function() {
    this.$http.get('/user/test', function($answer) {
        console.log($answer);
    });
};