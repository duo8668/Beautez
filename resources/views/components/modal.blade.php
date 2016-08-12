<!-- template for the Modal component -->
<script type="x/template" id="modal-template">
    <div class="modal-mask myModal" @click="closeModal" v-show="show" transition="modal">
        <div class="modal-dialog modal-danger" @click.stop>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true"  @click="closeModal">&times;</span></button>
                    <h4 class="modal-title">Modal Danger</h4>
                </div>
                <div class="modal-body">
                    <ul>
                        <li  v-for="item in items">
                            @{{ item }}
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline" @click="closeModal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</script>