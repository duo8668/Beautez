<script>
export default {
    onValidateReturn (res) {
        this.checking = false;
        return res;
    },
    onValidateAnalyzed (json) {
        var result = Object.keys(json.data);
        $targetEl = this.$el.querySelector('input[name=' + result[0] + ']');
        if (json.data[result[0]]) {
            $('#' + $($targetEl).attr('aria-describedby')).find('.tooltip-inner').first().html('Well done!');
            return Promise.resolve()
        } else {
            return Promise.reject(result[0] + ' cannot be verified')
        }
    },
    onValidateError (error) {
        if (error.status === 422) {
            if (error.data) {
                this.errorBags = error.data;
                var result = Object.keys(error.data);
                var $this = this;
                $(result).each(function (e, v) {
                    if ($this.firstLoad[v] !== undefined && !$this.firstLoad[v]) {
                        $targetEl = $this.$el.querySelector('input[name=' + v + ']');
                        $($targetEl).tooltip('show');
                        $('#' + $($targetEl).attr('aria-describedby')).find('.tooltip-inner').first().html(error.data[v]);
                    } else {
                        $this.firstLoad[v] = false;
                    }
                });
            }
        } else {
            this.firstLoad = false;
        }
        this.checking = false;
        return Promise.reject(error.message);
    },
    validators: {
        data () {
            return { checking: false }
        },
        checkRule (val) {
            console.log(val)
            var data = {};
            data[this.el.name] = val;
            return this.vm.$http[this.getRequestType()](this.validationUrl, data)
                    .then(this.onValidateReturn.bind(this.vm))
                    .then(this.onValidateAnalyzed.bind(this.vm))
                    .catch(this.onValidateError.bind(this.vm));
        }
    }
});
</script>