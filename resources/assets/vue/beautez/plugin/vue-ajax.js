Vue.directive('ajax', {
    bind: function () {
        this.el.addEventListener('submit', this.onFormSubmit.bind(this));
    },
    update: function (value) {

    },
    onFormSubmit: function (e) {
        e.preventDefault();
        this.vm.$http[this.getRequestType()](this.el.action, this.vm.user)
                .then(this.onComplete.bind(this))
                .catch(this.onError.bind(this));
    },
    onComplete: function (e) {
        this.vm.$emit('vue-ajax-completed',e.data);
    },
    onError: function (response) {
        if (response.status === 422) {
            if (response.data) {
                this.errorBags = response.data;
                var result = Object.keys(response.data);
                var theContents = '<ul>';
                $(result).each(function (e, v) {
                    theContents += '<li> ' + response.data[v] + ' </li>';
                });
                theContents += '</ul>';
                $.SmartMessageBox({
                    title: "Warning",
                    content: theContents,
                    buttons: "[Ok]"
                }, function (ButtonPress, Value) {

                });
            }
        }
    }
    ,
    getRequestType: function () {
        var method = this.el.querySelector('input[name="_method"]');
        return (method ? method.value : this.el.method).toLowerCase();
    }
});
