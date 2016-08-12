var globalValidatorMixin = {
    data: {
        checking: false,
        firstLoad: []
    },
    validators: {
        checkRule: function(val) {
            this.vm.checking = true; // spinner on 
            var data = {};
            data[this.el.name] = val;
            return this.vm.$http[this.vm.getRequestType()]($validationUrl, data).then(this.vm.onValidateReturn.bind(this.vm)).then(this.vm.onValidateAnalyzed.bind(this.vm)).catch(this.vm.onValidateError.bind(this.vm));
        }
    },
    methods: {
        getRequestType: function() {
            if (this.$el.querySelector('form[id="registerForm"]')) {
                var method = this.$el.querySelector('form[id="registerForm"]').method;
                return (method ? method : this.$el.method).toLowerCase();
            } else {
                return 'post';
            }
        },
        onValidateReturn: function(res) {
            this.checking = false;
            return res;
        },
        onValidateAnalyzed: function(json) {
            var result = Object.keys(json.data);
            $targetEl = this.$el.querySelector('input[name=' + result[0] + ']');
            if (json.data[result[0]]) {
                $('#' + $($targetEl).attr('aria-describedby')).find('.tooltip-inner').first().html('Well done!');
                return Promise.resolve()
            } else {
                return Promise.reject(result[0] + ' cannot be verified')
            }
        },
        onValidateError: function(error) {
            if (error.status === 422) {
                if (error.data) {
                    this.errorBags = error.data;
                    var result = Object.keys(error.data);
                    var $this = this;
                    $(result).each(function(e, v) {
                        if ($this.firstLoad[v] !== undefined && !$this.firstLoad[v]) {
                            $targetEl = $this.$el.querySelector('input[name=' + v + ']');
                            $($targetEl).tooltip('show');
                            $('#' + $($targetEl).attr('aria-describedby')).find('.tooltip-inner').first().html(error.data[v]);
                        } else {
                            $this.firstLoad[v] = false;
                        }
                    });
                }
            }
            this.checking = false;
            return Promise.reject(error.message);
        }
    }
}